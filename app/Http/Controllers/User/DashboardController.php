<?php

namespace App\Http\Controllers\User;

use App\Models\Transaksi;
use App\Models\Perusahaan;
use App\Models\Visitorsweb;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\Transaksidetail;
use App\Http\Controllers\Controller;
use App\Models\Bulan;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {        
        // for ($i=0; $i < 10; $i++) { 
        //         $tahun = $i;
        // }
        // dump($i);
        $all = Visitorsweb::all();
        $day = Carbon::now()->format('Y-m-d');
        $moon = Carbon::now()->format('Y-m');
        $year = Carbon::now()->format('Y');

        $hari_ini = Visitorsweb::whereLike('created_at', '%' . $day . '%')->get();
        $minggu_ini = Visitorsweb::where("created_at", ">", Carbon::now()->subWeek())
                                    ->where("created_at", "<", Carbon::now())->get();
        $bulan_ini = Visitorsweb::whereLike('created_at', '%' . $moon . '%')->get();
        $tahun_ini = Visitorsweb::whereLike('created_at', '%' . $year . '%')->get();


        $total_perusahaan = Perusahaan::all();
        $total_transaksi = Transaksi::all();
        $total_trx_selesai = Transaksi::where('trx_status', '=', 'Completed')
                                            ->where('trx_status_bayar', 'Lunas')->get();
        $total_trxproses_selesai = Transaksi::where('trx_status', '=', 'Completed')->get();
        $total_trxbayar_selesai = Transaksi::where('trx_status_bayar', 'Lunas')->get();

        $total_transaksi_detail = Transaksidetail::all();
        $total_trxdtl_completed = Transaksidetail::where('trxdtl_status', 'Completed')->get();
        $total_trxdtl_onprocess = Transaksidetail::where('trxdtl_status', 'onProcess')->get();
        $total_trxdtl_start = Transaksidetail::where('trxdtl_status', 'Start')->get();

        $total_trxbayar_tunggu = Transaksi::where('trx_status_bayar', 'Menunggu Pembayaran')->get();
        $total_trxbayar_dp = Transaksi::where('trx_status_bayar', 'DP')->get();
        $total_trxbayar_dicicil = Transaksi::where('trx_status_bayar', 'Dicicil')->get();
        $total_trxbayar_lunas = Transaksi::where('trx_status_bayar', 'Lunas')->get();

        $bln = Carbon::now()->format('m');
        $bulans = Bulan::where('bulan_list', '<=', $bln)->orderBy('id', 'DESC')->get();

        $getSales =  User::where('level', 202504)->where('status', 'Active')->get();
        $data = [
            'title' => 'Dashboard',
            'subtitle' => 'Dashboard Admin',
            'total_perusahaan' => $total_perusahaan,
            'total_transaksi'  => $total_transaksi,
            'total_trx_selesai' => $total_trx_selesai,
            'total_trxproses_selesai' => $total_trxproses_selesai,
            'total_trxbayar_selesai'  => $total_trxbayar_selesai,
            'total_transaksi_detail' => $total_transaksi_detail,
            'total_trxdtl_completed' => $total_trxdtl_completed,
            'total_trxdtl_onprocess' => $total_trxdtl_onprocess,
            'total_trxdtl_start'     => $total_trxdtl_start,
            'total_trxbayar_tunggu' => $total_trxbayar_tunggu,
            'total_trxbayar_dp' => $total_trxbayar_dp,
            'total_trxbayar_dicicil' => $total_trxbayar_dicicil,
            'total_trxbayar_lunas' => $total_trxbayar_lunas,
            // 'tahunList'     => $tahun,
            'bulanList'     => $bulans,
            'getSales'      => $getSales,
            'p_hari_ini'    => $hari_ini,
            'p_minggu_ini'  => $minggu_ini,
            'p_bulan_ini'   => $bulan_ini,
            'p_tahun_ini'   => $tahun_ini,
            'total_pengunjung' => $all
        ];
    
        return view('user.users.dashboard', $data);        
    }

    public function profileDetail(string $uuid)
    {
        $user = User::where('uuid', $uuid)->get();
        foreach ($user as $value) {
            $kode = $value->kode;
        }
        $totalPerusahaan = Perusahaan::where('perusahaan_user_kode', $kode)->orderBy('perusahaan_kode', 'DESC')->get();
        $totalTransaksi = Transaksi::where('trx_user_kode', $kode)
                            ->join('perusahaans', 'transaksis.trx_perusahaan_kode', '=', 'perusahaans.perusahaan_kode')
                            ->orderBy('trx_kode', 'DESC')
                            ->get();
        $moon = Carbon::now()->format('Y-m');
        $year = Carbon::now()->format('Y');
        $totalPerusahaanYear = Perusahaan::where('perusahaan_user_kode', $kode)->whereLike('perusahaan_tgl', '%' . $year . '%')->get();
        $totalTransaksiYear = Transaksi::where('trx_user_kode', $kode)->whereLike('trx_tgl', '%' . $year . '%')->get();
        $totalPerusahaanMoon = Perusahaan::where('perusahaan_user_kode', $kode)->whereLike('perusahaan_tgl', '%' . $moon . '%')->get();
        $totalTransaksiMoon = Transaksi::where('trx_user_kode', $kode)->whereLike('trx_tgl', '%' . $moon . '%')->get();
        $total_trx_selesai = Transaksi::where('trx_user_kode', $kode)
            ->where('trx_status', '=', 'Completed')
            ->where('trx_status_bayar', '=', 'Lunas')->get();

        $bln = Carbon::now()->format('m');
        $bulans = Bulan::where('bulan_list', '<=', $bln)->orderBy('id', 'DESC')->get();
        $data = [
            'title'     => 'Dashboard',
            'subtitle'  => 'Profile User Details',
            'users'     => $user,
            'totalPerusahaan' => $totalPerusahaan,
            'totalTransaksi'  => $totalTransaksi,
            'totalPerusahaanYear' => $totalPerusahaanYear,
            'totalTransaksiYear'  => $totalTransaksiYear,
            'totalPerusahaanMoon' => $totalPerusahaanMoon,
            'totalTransaksiMoon'  => $totalTransaksiMoon,
            'totalTrxSelesai'  => $total_trx_selesai,
            'bulanList'         => $bulans
        ];

        return view('user.users.profile-detail', $data);
    }
}
