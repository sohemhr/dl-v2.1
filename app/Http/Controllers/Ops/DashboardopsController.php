<?php

namespace App\Http\Controllers\Ops;

use App\Models\Transaksi;
use App\Models\Perusahaan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Transaksidetail;

class DashboardopsController extends Controller
{
    
    public function index()
    {
        $total_perusahaan = Perusahaan::all();
        $total_transaksi = Transaksi::all();
        $total_trx_selesai = Transaksi::where('trx_status', '=', 'Completed')
            ->where('trx_status_bayar', '=', 'Lunas')->get();
        $total_transaksi_detail = Transaksidetail::all();
        $total_trxdtl_completed = Transaksidetail::where('trxdtl_status', 'Completed')->get();
        $total_trxdtl_onprocess = Transaksidetail::where('trxdtl_status', 'onProcess')->get();
        $total_trxdtl_start = Transaksidetail::where('trxdtl_status', 'Start')->get();
        $data = [
            'title' => 'Dashboard',
            'subtitle' => 'Dashboard Operasional',
            'total_perusahaan' => $total_perusahaan,
            'total_transaksi'  => $total_transaksi,
            'total_trx_selesai' => $total_trx_selesai,
            'total_transaksi_detail' => $total_transaksi_detail,
            'total_trxdtl_completed' => $total_trxdtl_completed,
            'total_trxdtl_onprocess' => $total_trxdtl_onprocess,
            'total_trxdtl_start'     => $total_trxdtl_start
        ];

        return view('ops.ops.dashboard', $data);
    }
}
