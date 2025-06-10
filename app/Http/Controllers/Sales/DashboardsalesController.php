<?php

namespace App\Http\Controllers\Sales;

use App\Models\Transaksi;
use App\Models\Perusahaan;
use App\Models\Visitorsweb;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;

class DashboardsalesController extends Controller
{
    public function index()
    {
        $total_perusahaan = Perusahaan::where('perusahaan_user_kode', auth('user')->user()->kode)->get();
        $total_transaksi = Transaksi::where('trx_user_kode', auth('user')->user()->kode)->get();
        $total_trx_selesai = Transaksi::where('trx_user_kode', auth('user')->user()->kode)
            ->where('trx_status', '=', 'Completed')
            ->where('trx_status_bayar', '=', 'Lunas')->get();
        $total_trxproses_selesai = Transaksi::where('trx_user_kode', auth('user')->user()->kode)
                                            ->where('trx_status', '=', 'Completed')->get();
        $total_trxbayar_selesai = Transaksi::where('trx_user_kode', auth('user')->user()->kode)
                                            ->where('trx_status_bayar', '=', 'Lunas')->get();
        $data = [
            'title' => 'Dashboard',
            'subtitle' => 'Dashboard Sales',
            'total_perusahaan' => $total_perusahaan,
            'total_transaksi'  => $total_transaksi,
            'total_trx_selesai' => $total_trx_selesai,
            'total_trxproses_selesai' => $total_trxproses_selesai,
            'total_trxbayar_selesai'  => $total_trxbayar_selesai
        ];

        return view('sales.sales.dashboard', $data);
    }
}
