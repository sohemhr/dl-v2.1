<?php

namespace App\Http\Controllers\Finance;

use App\Models\Jenis;
use App\Models\Transaksi;
use App\Models\Listproses;
use App\Models\Pembayaran;
use App\Models\Perusahaan;
use Illuminate\Http\Request;
use App\Models\Transaksidetail;
use App\Http\Controllers\Controller;
use App\Models\Transaksidetailstatus;

class PerusahaanfinanceController extends Controller
{
    public function index()
    {
        $getPerusahaan = Perusahaan::orderBy('perusahaan_kode', 'DESC')
            ->join('users', 'perusahaans.perusahaan_user_kode', '=', 'users.kode')
            ->get();
        $data = [
            'title'     => 'Perusahaan',
            'subtitle'  => 'Data Perusahaan',
            'getPerusahaan' => $getPerusahaan
        ];

        return view('finance.perusahaan.index', $data);
    }

    public function details(string $uuid)
    {
        $getPerusahaan = Perusahaan::where('perusahaan_uuid', $uuid)
            ->join('users', 'perusahaans.perusahaan_user_kode', '=', 'users.kode')
            ->get();
        foreach ($getPerusahaan as $key) {
            $kodePerusahaan = $key->perusahaan_kode;
        }
        $getTransaksi = Transaksi::where('trx_perusahaan_kode', $kodePerusahaan)
            ->join('users', 'transaksis.trx_user_kode', '=', 'users.kode')
            ->orderBy('trx_kode', 'DESC')
            ->get();
        $data = [
            'title'     => 'Perusahaan',
            'subtitle'  => 'Details Perusahaan',
            'getPerusahaan' => $getPerusahaan,
            'getTransaksi' => $getTransaksi
        ];

        return view('finance.perusahaan.detail', $data);
    }

    public function indexTransaksi()
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

        return view('finance.perusahaan.index-transaksi', $data);
    }

    public function showTransaksi(string $uuid)
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
        $getLayJns  = Jenis::where('jenis_status', 'Public')->orderBy('layanan_kode', 'ASC')
            ->join('layanans', 'jenis.jenis_layanan_kode', '=', 'layanans.layanan_kode')
            ->get();
        $data = [
            'title'     => 'Transaksi',
            'subtitle'  => 'Edit Transaksi',
            'getTrx'    => $getTrx,
            'getDtlJns'  => $getDtlJns,
            'getLayJns' => $getLayJns
        ];

        return view('finance.perusahaan.edit-transaksi', $data);
    }

    public function updateTransaksi(Request $request, string $uuid)
    {
        // Validate
        $request->validate([
            // 'trx_jumlah' => ['required', 'numeric'],
            // 'trx_diskon' => ['required', 'numeric'],
            // 'trx_biaya_lain' => ['nullable'],
            // 'trx_total_bayar' => ['required', 'numeric'],
            'trx_keterangan' => ['nullable'],
            'trx_tgl' => ['required'],
            'trx_status' => ['required'],
            'trx_status_bayar' => ['required']
        ]);

        // Update the post
        Transaksi::where('trx_uuid', $uuid)->update([
            // 'trx_jumlah'    => $request->trx_jumlah,
            // 'trx_diskon'    => $request->trx_diskon,
            // 'trx_biaya_lain' => $request->trx_biaya_lain,
            // 'trx_total_bayar' => $request->trx_total_bayar,
            'trx_keterangan' => $request->trx_keterangan,
            'trx_tgl'       => $request->trx_tgl,
            'trx_status'    => $request->trx_status,
            'trx_status_bayar'    => $request->trx_status_bayar
        ]);

        // Redirect to dashboard
        // return redirect()->route('opstransaksi.index')->with('success', 'Data Transaksi telah di perbaharui..');
        return back()->with('success', 'Okay.. Data Transaksi telah di perbaharui..');
    }

    public function detailsTransaksi(string $uuid)
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

        return view('finance.perusahaan.detail-transaksi', $data);
    }

    public function onprocessGetUuid(String $uuid)
    {
        $getProcess = Transaksidetail::where('trxdtl_uuid', $uuid)
            ->join('transaksis', 'transaksi_details.trxdtl_trx_kode', '=', 'transaksis.trx_kode')
            ->join('perusahaans', 'transaksi_details.trxdtl_perusahaan_kode', '=', 'perusahaans.perusahaan_kode')
            ->join('layanans', 'transaksi_details.trxdtl_layanan_kode', '=', 'layanans.layanan_kode')
            ->join('jenis', 'transaksi_details.trxdtl_jenis_kode', '=', 'jenis.jenis_kode')
            ->join('users', 'transaksi_details.trxdtl_user_kode', '=', 'users.kode')
            ->orderBy('transaksi_details.created_at', 'DESC')
            ->get();
        foreach ($getProcess as $key) {
            $kodeTrxDtl = $key->trxdtl_kode;
        }
        $listStsDtl = Transaksidetailstatus::where('trxdtlsts_dtl_kode', $kodeTrxDtl)->orderBy('trxdtlsts_kode', 'DESC')->get();
        $getListProcess = Listproses::orderBy('lp_no_urut', 'ASC')->get();
        $data = [
            'title'     => 'Transaksi',
            'subtitle'  => 'Data Process Ongoing',
            'getProcess' => $getProcess,
            'listStsDtl' => $listStsDtl,
            'getListProcess' => $getListProcess
        ];

        return view('finance.perusahaan.processbyuuid', $data);
    }
}
