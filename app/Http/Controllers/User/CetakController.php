<?php

namespace App\Http\Controllers\User;

use App\Models\Jenis;
use App\Models\Layanan;
use App\Models\Transaksi;
use App\Models\Pembayaran;
use Illuminate\Http\Request;
use App\Models\Transaksidetail;
use App\Http\Controllers\Controller;

class CetakController extends Controller
{
    public function cetakTransaksi(string $uuid)
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
        $data = [
            'title'     => 'Transaksi',
            'subtitle'  => 'Cetak Transaksi',
            'getTrx'    => $getTrx,
            'getDtlJns'  => $getDtlJns
        ];

        return view('cetak.transaksi.cetak-trx', $data);
    }

    public function cetakPembayaranById(string $uuid)
    {
        $getPembayaran = Pembayaran::where('pembayaran_uuid', $uuid)
            ->join('perusahaans', 'pembayarans.pembayaran_perusahaan_kode', '=', 'perusahaans.perusahaan_kode')
            ->join('transaksis', 'pembayarans.pembayaran_trx_kode', '=', 'transaksis.trx_kode')
            ->get();

        foreach ($getPembayaran as $key) {
            $kodeTrx = $key->trx_kode;
        }

        $getTotByrMasuk = Pembayaran::where('pembayaran_trx_kode', $kodeTrx)->get();
        $data = [
            'title'     => 'Pembayaran',
            'subtitle'  => 'Cetak Pembayaran',
            'getPembayaran'    => $getPembayaran,
            'getTotByrMasuk' => $getTotByrMasuk
        ];

        return view('cetak.pembayaran.cetak-bayar', $data);
    }

    public function cetakTrxAllByr(string $uuid)
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
            ->orderBy('pembayaran_kode', 'ASC')
            ->get();
        $data = [
            'title'     => 'Transaksi',
            'subtitle'  => 'All Transaksi Pembayaran',
            'getTrx'    => $getTrx,
            'getDtlJns'  => $getDtlJns,
            'getPembayaran' => $getPembayaran
        ];

        return view('cetak.transaksi.cetak-trxallbyr', $data);
    }

    public function cetakJenisLayanan()
    {
        $layanan = Layanan::orderBy('created_at', 'ASC')->get();
        $data = [
            'title'     => 'Tabel Layanan - Jenis Layanan',
            'subtitle'  => 'Tabel Layanan - Jenis Layanan Harga',
            'layanan' => $layanan
        ];

        return view('cetak.layanan.layanan', $data);
    }
}
