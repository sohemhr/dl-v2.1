<?php

namespace App\Http\Controllers\Finance;

use App\Models\Transaksi;
use App\Models\Perusahaan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardfinanceController extends Controller
{
    public function index()
    {
        $total_perusahaan = Perusahaan::all();
        $total_transaksi = Transaksi::all();
        $total_trx_selesai = Transaksi::where('trx_status', '=', 'Completed')
            ->where('trx_status_bayar', '=', 'Lunas')->get();
        $total_trxproses_selesai = Transaksi::where('trx_status', '=', 'Completed')->get();
        $total_trxbayar_selesai = Transaksi::where('trx_status_bayar', '=', 'Lunas')->get();
        $data = [
            'title' => 'Dashboard',
            'subtitle' => 'Dashboard Finance',
            'total_perusahaan' => $total_perusahaan,
            'total_transaksi'  => $total_transaksi,
            'total_trx_selesai' => $total_trx_selesai,
            'total_trxproses_selesai' => $total_trxproses_selesai,
            'total_trxbayar_selesai'  => $total_trxbayar_selesai,
        ];

        return view('finance.finance.dashboard', $data);
    }
}
