<?php

namespace App\Http\Controllers\User;

use App\Helpers\MyHelper;
use App\Models\Transaksi;
use App\Models\Listproses;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\Transaksidetail;
use App\Http\Controllers\Controller;
use App\Models\Transaksidetailstatus;
use Illuminate\Support\Facades\Response;

class MainprocessController extends Controller
{
    public function start()
    {
        $getStart = Transaksidetail::where('trxdtl_status', 'Start')
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

        return view('user.main-process.start', $data);
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

        return view('user.main-process.startbyuuid', $data);
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
        return redirect()->route('mainprocess.startgetuuid', $uuid)->with('success', 'Data telah di perbaharui..');
    }

    public function startProcess(string $uuid)
    {
        $getTrxDtl = Transaksidetail::where('trxdtl_uuid', $uuid)->get();
        foreach ($getTrxDtl as $key) {
            $trxKode = $key->trxdtl_trx_kode;
        }

        Transaksi::where('trx_kode', $trxKode)->update([
            'trx_status' => 'OnProcess'
        ]);

        // Update the post
        Transaksidetail::where('trxdtl_uuid', $uuid)->update([
            'trxdtl_status' => 'OnProcess'
        ]);

        // Redirect to dashboard
        return redirect()->route('mainprocess.onprocessgetuuid', $uuid)->with('success', 'Data telah di perbaharui..');
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
        $listStsDtl = Transaksidetailstatus::where('trxdtlsts_dtl_kode', $kodeTrxDtl)
            ->join('list_proses', 'transaksi_detail_statuses.trxdtlsts_nama', '=', 'list_proses.lp_kode')
            ->select('list_proses.lp_nama', 'transaksi_detail_statuses.trxdtlsts_keterangan', 'transaksi_detail_statuses.trxdtlsts_status', 'transaksi_detail_statuses.updated_at', 'transaksi_detail_statuses.trxdtlsts_kode', 'transaksi_detail_statuses.trxdtlsts_dtl_kode', 'transaksi_detail_statuses.trxdtlsts_nama')
            ->orderBy('trxdtlsts_kode', 'DESC')
            ->get();
        $getListProcess = Listproses::orderBy('lp_no_urut', 'ASC')->get();
        $data = [
            'title'     => 'Process Ongoing',
            'subtitle'  => 'Data Process Ongoing',
            'getProcess' => $getProcess,
            'listStsDtl' => $listStsDtl,
            'getListProcess' => $getListProcess
        ];

        return view('user.main-process.processbyuuid', $data);
    }

    public function onProcess()
    {
        $getProcess = Transaksidetail::where('trxdtl_status', 'onProcess')
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

        return view('user.main-process.process', $data);
    }

    public function updateNotesOn(Request $request, string $uuid)
    {
        // Validate
        $request->validate([
            'trxdtl_notes'  => ['nullable']
        ]);

        // Update the post
        Transaksidetail::where('trxdtl_uuid', $uuid)->update([
            'trxdtl_status' => $request->trxdtl_status,
            'trxdtl_notes' => $request->trxdtl_notes
        ]);

        // Redirect to dashboard
        return redirect()->route('mainprocess.onprocessgetuuid', $uuid)->with('success', 'Data telah di perbaharui..');
    }

    public function addDetailStatus(Request $request)
    {
        $kodeDtlSts = MyHelper::auto_kode_trxdetailsts();
        $timestamp = Carbon::now();
        $addDtlSts = [
            'trxdtlsts_uuid' => Str::uuid()->toString(),
            'trxdtlsts_kode' => $kodeDtlSts,
            'trxdtlsts_dtl_kode' => $request->trxdtl_kode,
            'trxdtlsts_nama' => $request->trxdtlsts_nama,
            'trxdtlsts_keterangan' => $request->trxdtlsts_keterangan,
            'trxdtlsts_status' => 'Start',
            'created_by' => auth('user')->user()->kode,
            'updated_by' => auth('user')->user()->kode,
            'created_at' => $timestamp,
            'updated_at' => $timestamp
        ];
        Transaksidetailstatus::insert($addDtlSts);
        return response()->json(['success' => 'Detail Proses saved successfully.']);
    }



    public function editDetailStatus(String $id)
    {
        // get edit
        $where = array('trxdtlsts_kode' => $id);
        $post  = Transaksidetailstatus::where($where)
            ->join('transaksi_details', 'transaksi_detail_statuses.trxdtlsts_dtl_kode', '=', 'transaksi_details.trxdtl_kode')->first();

        return Response::json($post);
    }

    public function updateDetailStatus(Request $request, string $kode)
    {
        // Update the post
        $detail = Transaksidetail::where('trxdtl_kode', $kode)->get();
        foreach ($detail as $value) {
            $uuid = $value->trxdtl_uuid;
        }
        $getKode = $request->trxdtlsts_kode;
        $timestamp = Carbon::now();
        $post   = Transaksidetailstatus::where('trxdtlsts_kode', $getKode)->update([
            'trxdtlsts_nama' => $request->trxdtlsts_nama,
            'trxdtlsts_keterangan' => $request->trxdtlsts_keterangan,
            'trxdtlsts_status' => $request->trxdtlsts_status,
            'updated_by' => auth('user')->user()->kode,
            'updated_at' => $timestamp
        ]);

        // return Response::json($post);
        return redirect()->route('mainprocess.onprocessgetuuid', $uuid)->with('success', 'Data telah di perbaharui..');
    }

    public function completed()
    {
        $getProcess = Transaksidetail::where('trxdtl_status', 'Completed')
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

        return view('user.main-process.completed', $data);
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
        $listStsDtl = Transaksidetailstatus::where('trxdtlsts_dtl_kode', $kodeTrxDtl)
            ->join('list_proses', 'transaksi_detail_statuses.trxdtlsts_nama', '=', 'list_proses.lp_kode')
            ->orderBy('trxdtlsts_kode', 'DESC')
            ->get();
        $getListProcess = Listproses::orderBy('lp_no_urut', 'ASC')->get();
        $data = [
            'title'     => 'Process Completed',
            'subtitle'  => 'Data Process Completed',
            'getProcess' => $getProcess,
            'listStsDtl' => $listStsDtl,
            'getListProcess' => $getListProcess
        ];

        return view('user.main-process.completedbyuuid', $data);
    }

    public function pending()
    {
        $getProcess = Transaksidetail::where('trxdtl_status', 'Pending')
            ->join('perusahaans', 'transaksi_details.trxdtl_perusahaan_kode', '=', 'perusahaans.perusahaan_kode')
            ->join('layanans', 'transaksi_details.trxdtl_layanan_kode', '=', 'layanans.layanan_kode')
            ->join('jenis', 'transaksi_details.trxdtl_jenis_kode', '=', 'jenis.jenis_kode')
            ->join('users', 'transaksi_details.trxdtl_user_kode', '=', 'users.kode')
            ->orderBy('transaksi_details.created_at', 'DESC')
            ->get();
        $data = [
            'title'     => 'Process Pending',
            'subtitle'  => 'Data Process Pending',
            'getProcess' => $getProcess
        ];

        return view('user.main-process.process', $data);
    }
}
