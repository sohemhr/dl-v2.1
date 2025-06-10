<?php

namespace App\Http\Controllers\Finance;

use App\Models\User;
use App\Helpers\MyHelper;
use App\Models\Transaksi;
use App\Models\Pembayaran;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Mail\notifInvoiceMail;
use Illuminate\Support\Carbon;
use Illuminate\Support\Number;
use App\Models\Transaksidetail;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class PembayaranfinanceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $getPembayaran = Pembayaran::orderBy('pembayaran_kode', 'DESC')
            ->join('perusahaans', 'pembayarans.pembayaran_perusahaan_kode', '=', 'perusahaans.perusahaan_kode')
            ->get();
        $data = [
            'title'     => 'Pembayaran',
            'subtitle'  => 'Data Pembayaran',
            'getPembayaran' => $getPembayaran
        ];

        return view('finance.pembayaran.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(String $uuid)
    {
        $getTrx = Transaksi::where('trx_uuid', $uuid)
            ->join('perusahaans', 'transaksis.trx_perusahaan_kode', '=', 'perusahaans.perusahaan_kode')
            ->join('users', 'transaksis.trx_user_kode', '=', 'users.kode')
            ->join('rekenings', 'transaksis.trx_rekening_kode', '=', 'rekenings.rekening_kode')
            ->get();
        foreach ($getTrx as $key) {
            $kodeTrx = $key->trx_kode;
        }
        $getTrxDtl = Transaksidetail::where('trxdtl_trx_kode', $kodeTrx)
            ->join('jenis', 'transaksi_details.trxdtl_jenis_kode', '=', 'jenis.jenis_kode')
            ->orderBy('trxdtl_kode', 'ASC')
            ->get();
            // dd($getTrxDtl);
        $data = [
            'title'     => 'Pembayaran',
            'subtitle'  => 'Tambah Pembayaran',
            'getTrx'    => $getTrx,
            'getTrxDtl' => $getTrxDtl
        ];

        return view('finance.pembayaran.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate
        $request->validate([
            'pembayaran_jumlah'  => ['required', 'regex:/^[0-9\.,]+$/'],
            'pembayaran_metode'  => ['required'],
            'pembayaran_penyetor'  => ['required'],
            'pembayaran_penyetor_hp'  => ['required'],
            'pembayaran_penerima'  => ['required'],
            'pembayaran_keterangan'  => ['nullable'],
            'pembayaran_tanggal'  => ['required']
        ]);

        $kode = MyHelper::auto_kode_bayar();
        $uuid = Str::uuid()->toString();
        // Create a post
        Pembayaran::create([
            'pembayaran_uuid' => $uuid,
            'pembayaran_kode' => $kode,
            'pembayaran_perusahaan_kode' => $request->pembayaran_perusahaan_kode,
            'pembayaran_trx_kode' => $request->pembayaran_trx_kode,
            'pembayaran_rincian' => $request->pembayaran_rincian,
            'pembayaran_jumlah' => str_replace(".", "", $request->pembayaran_jumlah),
            'pembayaran_metode' => $request->pembayaran_metode,
            'pembayaran_penyetor' => $request->pembayaran_penyetor,
            'pembayaran_penyetor_hp' => $request->pembayaran_penyetor_hp,
            'pembayaran_penerima' => $request->pembayaran_penerima,
            'pembayaran_keterangan' => $request->pembayaran_keterangan,
            'pembayaran_tanggal' => $request->pembayaran_tanggal,
            'created_by'    => auth('user')->user()->kode,
            'updated_by'    => auth('user')->user()->kode
        ]);

        // Transaksi::where('trx_uuid', $request->trx_uuid)->update([
        //     'trx_status_bayar' =>'DP'
        // ]);

        $getPembayaran = Pembayaran::where('pembayaran_uuid', $uuid)
            ->join('perusahaans', 'pembayarans.pembayaran_perusahaan_kode', '=', 'perusahaans.perusahaan_kode')
            ->join('transaksis', 'pembayarans.pembayaran_trx_kode', '=', 'transaksis.trx_kode')
            ->get();

        // Inisialisasi array untuk menyimpan email penerima
        $recipients = [];

        // Pastikan $getPembayaran tidak kosong
        if (!empty($getPembayaran)) {
            foreach ($getPembayaran as $key) {
                if (!empty($key->perusahaan_email)) {
                    $recipients[] = $key->perusahaan_email;
                }
            }
        }

        // Ambil email admin dengan level 202500 dan status Active
        $adminEmails = User::where('level', '202500')
            ->where('status', 'Active')
            ->pluck('email')
            ->toArray();

        // Gabungkan email perusahaan dan admin
        $allRecipients = array_merge($recipients, $adminEmails);        

        foreach ($getPembayaran as $key) {
            $paymentTrxTotal = $key->trx_total_bayar;
            $companyName = $key->perusahaan_nama;
            $companyEmail = $key->perusahaan_email;
            $companyAddress = $key->perusahaan_alamat;
            $nameOf = $key->perusahaan_atas_nama;
            $phone = $key->perusahaan_an_hp;
        }

        $getTotByrMasuk = Pembayaran::where('pembayaran_trx_kode', $request->pembayaran_trx_kode)->get();
        $paymentIn = 0;
        foreach ($getTotByrMasuk as $value) {
            $paymentIn += $value->pembayaran_jumlah;
        }
        $remainingPayment = $paymentTrxTotal - $paymentIn;

        
        $nvoiceDate = now();
        $total = str_replace(".", "", $request->pembayaran_jumlah);
        $data = [
            'subject' => 'Payment Proof - Invoice Submited',
            'title' => 'Payment Proof',
            'invoiceCode' => $kode,
            'invoiceDate' => Carbon::parse($nvoiceDate)->format('d F Y'),
            'trxId' => $request->pembayaran_trx_kode,
            'paymentDate' => Carbon::parse($request->pembayaran_tanggal)->format('d F Y'),
            'aymentMethod' => $request->pembayaran_metode,
            'companyId' => $request->pembayaran_perusahaan_kode,
            'companyName' => $companyName,
            'companyEmail' => $companyEmail,
            'companyAddress' => $companyAddress,
            'nameOf' => $nameOf,
            'phone' => $phone,
            'from' => $request->pembayaran_penyetor,
            'to'   => $request->pembayaran_penerima,
            'description' => $request->pembayaran_rincian,
            'total' => Number::format($total),
            'paymentTrxTotal' => Number::format($paymentTrxTotal),
            'paymentIn' => Number::format($paymentIn),
            'remainingPayment' => Number::format($remainingPayment),
            'notes' => $request->pembayaran_keterangan
        ];
        
        Mail::to($allRecipients)->queue(new notifInvoiceMail($data));
                    
        // Redirect back to dashboard
        return redirect()->route('financetransaksi.details', $request->trx_uuid)->with('success', 'Data telah di tambahkan..');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $uuid)
    {
        $getPembayaran = Pembayaran::where('pembayaran_uuid', $uuid)
            ->join('perusahaans', 'pembayarans.pembayaran_perusahaan_kode', '=', 'perusahaans.perusahaan_kode')
            ->join('transaksis', 'pembayarans.pembayaran_trx_kode', '=', 'transaksis.trx_kode')
            ->get();

        foreach ($getPembayaran as $key) {
            $kodeTrx = $key->trx_kode;
        }

        $getTrxDtl = Transaksidetail::where('trxdtl_trx_kode', $kodeTrx)
            ->join('jenis', 'transaksi_details.trxdtl_jenis_kode', '=', 'jenis.jenis_kode')
            ->orderBy('trxdtl_kode', 'ASC')
            ->get();
        // dd($getTrxDtl);
        $data = [
            'title'     => 'Pembayaran',
            'subtitle'  => 'Edit Pembayaran',
            'getPembayaran'    => $getPembayaran,
            'getTrxDtl' => $getTrxDtl
        ];

        return view('finance.pembayaran.edit', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $uuid)
    {
        // Validate
        $request->validate([
            'pembayaran_jumlah'  => ['required', 'regex:/^[0-9\.,]+$/'],
            'pembayaran_metode'  => ['required'],
            'pembayaran_penyetor'  => ['required'],
            'pembayaran_penyetor_hp'  => ['required'],
            'pembayaran_penerima'  => ['required'],
            'pembayaran_keterangan'  => ['nullable'],
            'pembayaran_tanggal'  => ['required']
        ]);

        // Update the post
        Pembayaran::where('pembayaran_uuid', $uuid)->update([
            'pembayaran_jumlah' => str_replace(".", "", $request->pembayaran_jumlah),
            'pembayaran_metode' => $request->pembayaran_metode,
            'pembayaran_penyetor' => $request->pembayaran_penyetor,
            'pembayaran_penyetor_hp' => $request->pembayaran_penyetor_hp,
            'pembayaran_penerima' => $request->pembayaran_penerima,
            'pembayaran_keterangan' => $request->pembayaran_keterangan,
            'pembayaran_tanggal' => $request->pembayaran_tanggal,
            'updated_by'    => auth('user')->user()->kode
        ]);

        // Redirect to dashboard
        return back()->with('success', 'Okay.. Data Telah telah di Perbaharui..');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $uuid)
    {
        // Delete the post
        Pembayaran::where('pembayaran_uuid', $uuid)->delete();

        // Redirect back to dashboard
        return back()->with('delete', 'Data Telah di Hapus dari Database..');
    }

    public function destroyBayar(String $uuid)
    {
        DB::table('pembayarans')->where('pembayaran_uuid', $uuid)->delete();
        return response()->json([
            'success' => 'Record deleted successfully!'
        ]);
    }
}
