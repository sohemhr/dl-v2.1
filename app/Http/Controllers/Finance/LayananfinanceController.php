<?php

namespace App\Http\Controllers\Finance;

use App\Models\Jenis;
use App\Models\Layanan;
use App\Models\Rolelayinc;
use App\Models\Includelist;
use Illuminate\Http\Request;
use App\Models\Rolelayincjns;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class LayananfinanceController extends Controller
{
    public function index()
    {
        $layanan = Layanan::orderBy('created_at', 'DESC')->get();
        $data = [
            'title'     => 'Layanan',
            'subtitle'  => 'Data Layanan',
            'layanan' => $layanan
        ];

        return view('finance.layanan.index', $data);
    }

    public function show(string $uuid)
    {
        $layanan = Layanan::where('layanan_uuid', $uuid)->get();
        $includeList = Includelist::orderBy('created_at', 'DESC')->get();
        foreach ($layanan as $val) {
            $kode = $val->layanan_kode;
        }
        $roleLayInc = DB::table('role_layincs')->where('rli_lay_kode', $kode)
            ->join('include_lists', 'role_layincs.rli_inc_id', '=', 'include_lists.il_id')
            ->orderBy('rli_kode', 'ASC')->get();
        $getJnsLay = Jenis::where('jenis_layanan_kode', $kode)
            ->orderBy('jenis_kode', 'ASC')
            ->get();
        $data = [
            'title'     => 'Layanan',
            'subtitle'  => 'Detail Layanan',
            'layanan'    => $layanan,
            'includeList' => $includeList,
            'roleLayInc' => $roleLayInc,
            'getJnsLay' => $getJnsLay
        ];

        return view('finance.layanan.detail', $data);
    }

    public function showJenis(string $uuid, string $jnsuuid)
    {
        $layanan = Layanan::where('layanan_uuid', $uuid)->get();
        $jnsLayanan = Jenis::where('jenis_uuid', $jnsuuid)
            ->join('layanans', 'jenis.jenis_layanan_kode', '=', 'layanans.layanan_kode')
            ->get();
        foreach ($layanan as $val) {
            $lynKode = $val->layanan_kode;
        }

        foreach ($jnsLayanan as $x) {
            $jnsKode = $x->jenis_kode;
        }
        $getRolLayIncJns = Rolelayincjns::where('rlij_jenis_kode', $jnsKode)
            ->join('include_lists', 'role_layincjns.rlij_inc_id', '=', 'include_lists.il_id')
            ->orderBy('rlij_no_urut', 'ASC')
            ->get();
        $getRolLayInc = Rolelayinc::where('rli_lay_kode', $lynKode)
            ->join('include_lists', 'role_layincs.rli_inc_id', '=', 'include_lists.il_id')
            ->orderBy('rli_kode', 'ASC')
            ->get();
        $data = [
            'title'     => 'Layanan',
            'subtitle'  => 'Detail Layanan',
            'layananuuid' => $uuid,
            'jnslayuuid' => $jnsuuid,
            'getJnsLay' => $jnsLayanan,
            'getRolLayIncJns' => $getRolLayIncJns,
            'getRolLayInc' => $getRolLayInc
        ];

        return view('finance.layanan.layanan-jenis', $data);
    }

    public function indexJenis()
    {
        $layanan = Layanan::orderBy('created_at', 'DESC')->get();
        $data = [
            'title'     => 'Layanan',
            'subtitle'  => 'Data Jenis Layanan',
            'layanan' => $layanan
        ];

        return view('finance.layanan.all-jenis', $data);
    }
}
