<?php

namespace App\Http\Controllers\User;

use App\Models\User;
use App\Models\Jenis;
use App\Mail\notifNewtrxMail;
use App\Models\Layanan;
use App\Models\Rekening;
use App\Helpers\MyHelper;
use App\Models\Transaksi;
use App\Models\Pembayaran;
use App\Models\Perusahaan;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\Transaksidetail;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Response;

class TransaksiController extends Controller
{
    public function index()
    {
        $getTransaksi = Transaksi::orderBy('trx_kode', 'DESC')
                                    ->join('perusahaans', 'transaksis.trx_perusahaan_kode', '=', 'perusahaans.perusahaan_kode')
                                    ->join('users', 'transaksis.trx_user_kode', '=', 'users.kode')
                                    ->get();
        $data = [
            'title'     => 'Transaksi',
            'subtitle'  => 'Data Transaksi',
            'getTransaksi' => $getTransaksi
        ];

        return view('user.transaksi.index', $data); 
    }

    public function create(String $uuid)
    {
        $getPerusahaan = Perusahaan::where('perusahaan_uuid', $uuid)->get();
        $getLayJns  = Jenis::where('jenis_status', 'Public')->orderBy('layanan_kode', 'ASC')
                                ->join('layanans', 'jenis.jenis_layanan_kode', '=', 'layanans.layanan_kode')
                                ->get();
        $getRekening = Rekening::orderBy('rekening_kode', 'ASC')->get();
        $data = [
            'title'     => 'Transaksi',
            'subtitle'  => 'Tambah Transaksi',
            'getPerusahaan' => $getPerusahaan,
            'getLayJns' => $getLayJns,
            'getRekening' => $getRekening
        ];

        return view('user.transaksi.create', $data);
    }

    public function addJenis(Request $request)
    {
        $addJenis = [
            'trxadd_uuid' => Str::uuid()->toString(),
            'trxadd_perusahaan_kode' => $request->perusahaan_kode,
            'trxadd_jenis_kode' => $request->jenis_kode 
        ];        
        DB::table('trx_transit_add')->insert($addJenis);
        return response()->json(['success'=>'Jenis layanan saved successfully.']);
    }

    public function destroyJenis($id)
    {
        DB::table('trx_transit_add')->where('trxadd_jenis_kode', $id)->delete();
        return response()->json([
        'success' => 'Record deleted successfully!'
        ]);
    }

    public function store(Request $request, String $uuid)
    {
        // Validate
        $request->validate([
            'trx_jumlah' => ['required', 'regex:/^[0-9\.,]+$/'],
            'trx_diskon' => ['required', 'regex:/^[0-9\.,]+$/'],
            'trx_biaya_lain' => ['required', 'regex:/^[0-9\.,]+$/'],
            'trx_total_bayar' => ['required', 'regex:/^[0-9\.,]+$/'],
            'trx_keterangan' => ['nullable'],
            'trx_rekening_kode' => ['required'],
            'trx_tgl' => ['required']
        ]);

        $uuidTrx = Str::uuid()->toString();
        $kode = MyHelper::auto_kode_trx(); 
        // Create a post
        Transaksi::create([
            'trx_uuid'      => $uuidTrx,
            'trx_kode'      => $kode,
            'trx_perusahaan_kode' => $request->perusahaan_kode,
            'trx_user_kode' => $request->perusahaan_user_kode,
            'trx_jumlah'    => str_replace(".", "", $request->trx_jumlah),
            'trx_diskon'    => str_replace(".", "", $request->trx_diskon),
            'trx_biaya_lain' => str_replace(".", "", $request->trx_biaya_lain),
            'trx_total_bayar' => str_replace(".", "", $request->trx_total_bayar),
            'trx_keterangan' => $request->trx_keterangan,
            'trx_tgl'       => $request->trx_tgl,
            'trx_status'    => 'Start',
            'trx_rekening_kode' => $request->trx_rekening_kode,
            'trx_status_bayar' => 'Menunggu Pembayaran'
        ]);

        $jnsKodeReq = [];
        $req_kode = $request['jenis_kode_req'];  
        $req_uuid_trxadd = $request['trxadd_uuid_req'];
        $req_layanan_kode = $request['trxadd_layanan_req'];        
        if (isset($req_kode[0])) {
            foreach ($req_kode as $key => $value) {
                    $jnsKodeReq[] = [
                        'trxdtl_uuid' => $req_uuid_trxadd[$key],
                        'trxdtl_trx_kode' => $kode,
                        'trxdtl_perusahaan_kode' => $request->perusahaan_kode,
                        'trxdtl_user_kode' => $request->perusahaan_user_kode,
                        'trxdtl_layanan_kode' => $req_layanan_kode[$key],
                        'trxdtl_jenis_kode' => $value,
                        'trxdtl_notes'      => '-',
                        'trxdtl_status' =>'Start'
                    ];
            }
        $timestamp = Carbon::now();
        foreach ($jnsKodeReq as &$record) {
            $record['created_at'] = $timestamp;
            $record['updated_at'] = $timestamp;
        }

        $num = 0;
        $kodeDetail = MyHelper::auto_kode_trxdetail(); 
            foreach ($jnsKodeReq as &$x) {
                $num++;
                $x['trxdtl_kode'] = $kodeDetail+$num;
            }
            DB::table('transaksi_details')->insert($jnsKodeReq);
        }  

        DB::table('trx_transit_add')->where('trxadd_perusahaan_kode', $request->perusahaan_kode)->delete();

        
        // send batch mail user notification
        $userInput = User::where('kode', $request->perusahaan_user_kode)->get();
        foreach ($userInput as $getInput) {
            $userNama = $getInput->nama;
        }

        $company = Perusahaan::where('perusahaan_kode', $request->perusahaan_kode)->get();
        foreach ($company as $getCompany) {
            $companyName = $getCompany->perusahaan_nama;
        }
        
        $recipients = User::where('level', '!=', '202504')
            ->where('level', '!=', '202506')
            ->where('level', '!=', '202501')
            ->where('status', 'Active')
            ->pluck('email')->toArray();

        $data = [
            'subject' => 'Notif User Tambah Transaksi Baru',
            'title' => 'Notif User Tambah Transaksi Baru',
            'user' => $userNama,
            'perusahaan' => $companyName,
            'body' => $kode
        ];

        Mail::to($recipients)->queue(new notifNewtrxMail($data));
        // Redirect back to dashboard
        // return back()->with('success', 'Okay.. Data Transaksi telah di tambahakan, Silahkan ..');
        return redirect()->route('transaksi.details', $uuidTrx)->with('success', 'Data Transaksi telah di perbaharui..');
    }

    public function show(string $uuid)
    {
        $getTrx = Transaksi::where('trx_uuid', $uuid)
                                        ->join('perusahaans', 'transaksis.trx_perusahaan_kode', '=', 'perusahaans.perusahaan_kode')
                                        ->join('users', 'transaksis.trx_user_kode', '=', 'users.kode')
                                        ->join('rekenings', 'transaksis.trx_rekening_kode', '=', 'rekenings.rekening_kode')
                                        ->get();
        foreach ($getTrx as $value) {
            $kode = $value->trx_kode;
        }
        $getDtlJns = Transaksidetail::where('trxdtl_trx_kode', $kode)
                                        ->join('jenis', 'transaksi_details.trxdtl_jenis_kode', '=', 'jenis.jenis_kode')
                                        ->orderBy('trxdtl_kode', 'ASC')
                                        ->get();
        $getLayJns  = Jenis::where('jenis_status', 'Public')->orderBy('layanan_kode', 'ASC')
            ->join('layanans', 'jenis.jenis_layanan_kode', '=', 'layanans.layanan_kode')
            ->get();
        $getRekening = Rekening::orderBy('rekening_kode', 'ASC')->get();
        $data = [
            'title'     => 'Transaksi',
            'subtitle'  => 'Edit Transaksi',
            'getTrx'    => $getTrx,
            'getDtlJns'  => $getDtlJns,
            'getLayJns' => $getLayJns,
            'getRekening' => $getRekening
        ];

        return view('user.transaksi.edit', $data);
    }

    public function details(string $uuid)
    {
        $getTrx = Transaksi::where('trx_uuid', $uuid)
            ->join('perusahaans', 'transaksis.trx_perusahaan_kode', '=', 'perusahaans.perusahaan_kode')
            ->join('users', 'transaksis.trx_user_kode', '=', 'users.kode')
            ->get();
        foreach ($getTrx as $value) {
            $kode = $value->trx_kode;
        }
        $getDtlJns = Transaksidetail::where('trxdtl_trx_kode', $kode)
            ->join('jenis', 'transaksi_details.trxdtl_jenis_kode', '=', 'jenis.jenis_kode')
            ->orderBy('trxdtl_kode', 'ASC')
            ->get();
        $getPembayaran = Pembayaran::where('pembayaran_trx_kode', $kode)
            ->orderBy('pembayaran_kode', 'DESC')
            ->get();
        $data = [
            'title'     => 'Transaksi',
            'subtitle'  => 'Details Transaksi',
            'getTrx'    => $getTrx,
            'getDtlJns'  => $getDtlJns,
            'getPembayaran' => $getPembayaran
        ];

        return view('user.transaksi.detail', $data);
    }

    public function addJenisDtl(Request $request)
    {
        $getJnsLay = Jenis::where('jenis_kode', $request->jenis_kode)->get();
        foreach ($getJnsLay as $value) {
            $kodeLayanan = $value->jenis_layanan_kode;
        }
        $kodeDetail = MyHelper::auto_kode_trxdetail();
        $timestamp = Carbon::now();
        $addJenisDtl = [
            'trxdtl_uuid' => Str::uuid()->toString(),
            'trxdtl_kode' => $kodeDetail,
            'trxdtl_trx_kode' => $request->trx_kode,
            'trxdtl_perusahaan_kode' => $request->perusahaan_kode,
            'trxdtl_user_kode' => $request->user_kode,
            'trxdtl_layanan_kode' => $kodeLayanan,
            'trxdtl_jenis_kode' => $request->jenis_kode,
            'trxdtl_status' => 'Start',
            'created_at' => $timestamp,
            'updated_at' => $timestamp
        ];
        DB::table('transaksi_details')->insert($addJenisDtl);
        return response()->json(['success' => 'Jenis layanan Detail saved successfully.']);
    }

    public function destroyDetail(String $id)
    {
        DB::table('transaksi_details')->where('trxdtl_kode', $id)->delete();
        return response()->json([
            'success' => 'Record deleted successfully!'
        ]);
    }
    
    public function editJenisDetail(String $id)
    {
        // get edit
        $where = array('trxdtl_kode' => $id);
        $post  = Transaksidetail::where($where)
            ->join('jenis', 'transaksi_details.trxdtl_jenis_kode', '=', 'jenis.jenis_kode')->first();

        return Response::json($post);
    }

    public function updateJenisDetail(Request $request)
    {
        $getJnsLay = Jenis::where('jenis_kode', $request->jenis_kode)->get();
        foreach ($getJnsLay as $value) {
            $kodeLayanan = $value->jenis_layanan_kode;
        }
        // Update the post
        $getKode = $request->trxdtl_kode;
        $post   = Transaksidetail::where('trxdtl_kode', $getKode)->update([
            'trxdtl_jenis_kode' => $request->jenis_kode,
            'trxdtl_layanan_kode' => $kodeLayanan,
        ]);

        return Response::json($post);
    }

    public function update(Request $request, string $uuid)
    {
        // Validate
        $request->validate([
            'trx_jumlah' => ['required', 'regex:/^[0-9\.,]+$/'],
            'trx_diskon' => ['required', 'regex:/^[0-9\.,]+$/'],
            'trx_biaya_lain' => ['required', 'regex:/^[0-9\.,]+$/'],
            'trx_total_bayar' => ['required', 'regex:/^[0-9\.,]+$/'],
            'trx_keterangan' => ['nullable'],
            'trx_rekening_kode' => ['required'],
            'trx_tgl' => ['required'],
            'trx_status' => ['required'],
            'trx_status_bayar' => ['required']
        ]);

        // Update the post
        Transaksi::where('trx_uuid', $uuid)->update([
            'trx_jumlah'    => str_replace(".", "", $request->trx_jumlah),
            'trx_diskon'    => str_replace(".", "", $request->trx_diskon),
            'trx_biaya_lain' => str_replace(".", "", $request->trx_biaya_lain),
            'trx_total_bayar' => str_replace(".", "", $request->trx_total_bayar),
            'trx_keterangan' => $request->trx_keterangan,
            'trx_rekening_kode' => $request->trx_rekening_kode,
            'trx_tgl'       => $request->trx_tgl,
            'trx_status'    => $request->trx_status,
            'trx_status_bayar'    => $request->trx_status_bayar
        ]);

        // Redirect to dashboard
        return redirect()->route('transaksi.index')->with('success', 'Data Transaksi telah di perbaharui..');
    }

    public function destroy(string $uuid)
    {
        $getTrx = Transaksi::where('trx_uuid', $uuid)->get();
        foreach ($getTrx as $key) {
            $kodeTrx = $key->trx_kode;
        }

        DB::table('transaksi_details')->where('trxdtl_trx_kode', $kodeTrx)->delete();
        
        // Delete the post
        Transaksi::where('trx_uuid', $uuid)->delete();

        // Redirect back to dashboard
        return back()->with('delete', 'Data Telah di Hapus dari Database..');
    }


    /**
     * START
     */


    /**
     * START END
     */

    /**
     * ON PROCESS
     */


    /**
     * ON PROCESS END
     */

    /**
     * COMPLETED
     */


    /**
     * COMPLETED END
     */
}
