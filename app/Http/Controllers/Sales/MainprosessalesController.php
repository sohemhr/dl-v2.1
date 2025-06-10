<?php

namespace App\Http\Controllers\Sales;

use App\Models\Listproses;
use Illuminate\Http\Request;
use App\Models\Transaksidetail;
use App\Http\Controllers\Controller;
use App\Models\Transaksidetailstatus;

class MainprosessalesController extends Controller
{
    public function start()
    {
        $getStart = Transaksidetail::where('trxdtl_status', 'Start')
            ->where('trxdtl_user_kode', auth('user')->user()->kode)
            ->join('perusahaans', 'transaksi_details.trxdtl_perusahaan_kode', '=', 'perusahaans.perusahaan_kode')
            ->join('layanans', 'transaksi_details.trxdtl_layanan_kode', '=', 'layanans.layanan_kode')
            ->join('jenis', 'transaksi_details.trxdtl_jenis_kode', '=', 'jenis.jenis_kode')
            ->join('users', 'transaksi_details.trxdtl_user_kode', '=', 'users.kode')
            ->orderBy('transaksi_details.created_at', 'DESC')
            ->get();
        $data = [
            'title'     => 'Process Start',
            'subtitle'  => 'Data Process Start',
            'getStart' => $getStart
        ];

        return view('sales.main-process.start', $data);
    }

    public function startGetUuid(String $uuid)
    {
        $getStart = Transaksidetail::where('trxdtl_uuid', $uuid)
            ->join('transaksis', 'transaksi_details.trxdtl_trx_kode', '=', 'transaksis.trx_kode')
            ->join('perusahaans', 'transaksi_details.trxdtl_perusahaan_kode', '=', 'perusahaans.perusahaan_kode')
            ->join('layanans', 'transaksi_details.trxdtl_layanan_kode', '=', 'layanans.layanan_kode')
            ->join('jenis', 'transaksi_details.trxdtl_jenis_kode', '=', 'jenis.jenis_kode')
            ->join('users', 'transaksi_details.trxdtl_user_kode', '=', 'users.kode')
            ->orderBy('transaksi_details.created_at', 'DESC')
            ->get();
        $data = [
            'title'     => 'Process Start',
            'subtitle'  => 'Data Process Start',
            'getStart' => $getStart
        ];

        return view('sales.main-process.startbyuuid', $data);
    }

    public function updateNotes(Request $request, string $uuid)
    {
        // Validate
        $request->validate([
            'trxdtl_notes'  => ['nullable']
        ]);

        // Update the post
        Transaksidetail::where('trxdtl_uuid', $uuid)->update([
            'trxdtl_notes' => $request->trxdtl_notes
        ]);

        // Redirect to dashboard
        return redirect()->route('salesmainprocess.startgetuuid', $uuid)->with('success', 'Data telah di perbaharui..');
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
            'title'     => 'Process Ongoing',
            'subtitle'  => 'Data Process Ongoing',
            'getProcess' => $getProcess,
            'listStsDtl' => $listStsDtl,
            'getListProcess' => $getListProcess
        ];

        return view('sales.main-process.processbyuuid', $data);
    }

    public function onProcess()
    {
        $getProcess = Transaksidetail::where('trxdtl_status', 'onProcess')
            ->where('trxdtl_user_kode', auth('user')->user()->kode)
            ->join('perusahaans', 'transaksi_details.trxdtl_perusahaan_kode', '=', 'perusahaans.perusahaan_kode')
            ->join('layanans', 'transaksi_details.trxdtl_layanan_kode', '=', 'layanans.layanan_kode')
            ->join('jenis', 'transaksi_details.trxdtl_jenis_kode', '=', 'jenis.jenis_kode')
            ->join('users', 'transaksi_details.trxdtl_user_kode', '=', 'users.kode')
            ->orderBy('transaksi_details.created_at', 'DESC')
            ->get();
        $data = [
            'title'     => 'Process Ongoing',
            'subtitle'  => 'Data Process Ongoing',
            'getProcess' => $getProcess
        ];

        return view('sales.main-process.process', $data);
    }

    public function updateNotesOn(Request $request, string $uuid)
    {
        // Validate
        $request->validate([
            'trxdtl_notes'  => ['nullable']
        ]);

        // Update the post
        Transaksidetail::where('trxdtl_uuid', $uuid)->update([
            'trxdtl_notes' => $request->trxdtl_notes
        ]);

        // Redirect to dashboard
        return redirect()->route('salesmainprocess.onprocessgetuuid', $uuid)->with('success', 'Data telah di perbaharui..');
    }

    public function completed()
    {
        $getProcess = Transaksidetail::where('trxdtl_status', 'Completed')
            ->where('trxdtl_user_kode', auth('user')->user()->kode)
            ->join('perusahaans', 'transaksi_details.trxdtl_perusahaan_kode', '=', 'perusahaans.perusahaan_kode')
            ->join('layanans', 'transaksi_details.trxdtl_layanan_kode', '=', 'layanans.layanan_kode')
            ->join('jenis', 'transaksi_details.trxdtl_jenis_kode', '=', 'jenis.jenis_kode')
            ->join('users', 'transaksi_details.trxdtl_user_kode', '=', 'users.kode')
            ->orderBy('transaksi_details.created_at', 'DESC')
            ->get();
        $data = [
            'title'     => 'Process Completed',
            'subtitle'  => 'Data Process Completed',
            'getProcess' => $getProcess
        ];

        return view('sales.main-process.completed', $data);
    }

    public function completedGetUuid(String $uuid)
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
            'title'     => 'Process Completed',
            'subtitle'  => 'Data Process Completed',
            'getProcess' => $getProcess,
            'listStsDtl' => $listStsDtl,
            'getListProcess' => $getListProcess
        ];

        return view('sales.main-process.completedbyuuid', $data);
    }

    public function pending()
    {
        $getProcess = Transaksidetail::where('trxdtl_status', 'Pending')
            ->where('trxdtl_user_kode', auth('user')->user()->kode)
            ->join('perusahaans', 'transaksi_details.trxdtl_perusahaan_kode', '=', 'perusahaans.perusahaan_kode')
            ->join('layanans', 'transaksi_details.trxdtl_layanan_kode', '=', 'layanans.layanan_kode')
            ->join('jenis', 'transaksi_details.trxdtl_jenis_kode', '=', 'jenis.jenis_kode')
            ->join('users', 'transaksi_details.trxdtl_user_kode', '=', 'users.kode')
            ->orderBy('transaksi_details.created_at', 'DESC')
            ->get();
        $data = [
            'title'     => 'Process Ongoing',
            'subtitle'  => 'Data Process Ongoing',
            'getProcess' => $getProcess
        ];

        return view('sales.main-process.process', $data);
    }
}
