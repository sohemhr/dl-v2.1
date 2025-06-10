<?php
namespace App\Helpers;

use App\Models\Contact;
use App\Models\Checking;
use App\Models\User;
use App\Models\Visitorsweb;
use Illuminate\Support\Str;
use App\Models\Visitors_table;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request;

class MyHelper 
{
    public static function auto_kode_users()
    {
        $prefix = "USR";
        $date = date('ym');
        $q=DB::table('users')->select(DB::raw('MAX(RIGHT(kode,4)) as kd_max'));
        $prx = $prefix.$date;
            if($q->count()>0)
            {
                foreach($q->get() as $k)
                {
                $tmp = ((int)$k->kd_max)+1;
                $kd = $prx.sprintf("%04s", $tmp);
                }
            }
            else
            {
                $kd = $prx."0001";
            }

        return $kd;
    }

    public static function auto_kode_il()
    {
        $q=DB::table('include_lists')->select(DB::raw('MAX(RIGHT(il_id,4)) as kd_max'));
            if($q->count()>0)
            {
                foreach($q->get() as $k)
                {
                    $tmp = ((int)$k->kd_max)+1;
                    $kd = sprintf("%04s", $tmp);
                }
            }
            else
            {
                $kd = "0001";
            }
    
        return $kd;
    }

    public static function auto_kode_layanan()
    {
        $prefix = "LN";
        $date = date('ym');
        $q=DB::table('layanans')->select(DB::raw('MAX(RIGHT(layanan_kode,4)) as kd_max'));
        $prx = $prefix.$date;
            if($q->count()>0)
            {
                foreach($q->get() as $k)
                {
                $tmp = ((int)$k->kd_max)+1;
                $kd = $prx.sprintf("%04s", $tmp);
                }
            }
            else
            {
                $kd = $prx."0001";
            }

        return $kd;
    }

    public static function auto_kode_rli()
    {
        $date = date('y'); // Mendapatkan dua digit terakhir tahun
        $prefix = $date; // Menggunakan prefix untuk konsistensi penamaan
        $default_kode = $prefix . "0001"; // Kode default jika tidak ada data

        // Mengambil kode terakhir berdasarkan urutan descending
        $query = DB::table('role_layincs')
            ->select('rli_kode')
            ->orderBy('rli_kode', 'DESC')
            ->limit(1)
            ->first();

        if (!$query) {
            // Jika tidak ada data, kembalikan kode default
            return $default_kode;
        }

        // Ambil nomor dari kode terakhir dan tambahkan 1
        $last_number = (int) substr($query->rli_kode, 2); // Ambil angka setelah prefix
        $new_number = $last_number + 1;
        $new_kode = $prefix . sprintf("%04d", $new_number); // Format dengan 4 digit

        return $new_kode;
    }

    public static function auto_kode_jenis()
    {
        $prefix = "PRD";
        $date = date('ym');
        $q=DB::table('jenis')->select(DB::raw('MAX(RIGHT(jenis_kode,4)) as kd_max'));
        $prx = $prefix.$date;
            if($q->count()>0)
            {
                foreach($q->get() as $k)
                {
                $tmp = ((int)$k->kd_max)+1;
                $kd = $prx.sprintf("%04s", $tmp);
                }
            }
            else
            {
                $kd = $prx."0001";
            }

        return $kd;
    }

    public static function auto_kode_rlij()
    {
        $date = date('ym'); // Mendapatkan format tahun dan bulan (misalnya, 2505 untuk Mei 2025)
        $prefix = $date; // Menggunakan prefix untuk konsistensi penamaan
        $default_kode = $prefix . "0001"; // Kode default jika tidak ada data

        // Mengambil kode terakhir berdasarkan urutan descending
        $query = DB::table('role_layincjns')
            ->select('rlij_kode')
            ->orderBy('rlij_kode', 'DESC')
            ->limit(1)
            ->first();

        if (!$query) {
            // Jika tidak ada data, kembalikan kode default
            return $default_kode;
        }

        // Ambil nomor dari kode terakhir dan tambahkan 1
        $last_number = (int) substr($query->rlij_kode, 4); // Ambil angka setelah prefix (tahun dan bulan)
        $new_number = $last_number + 1;
        $new_kode = $prefix . sprintf("%04d", $new_number); // Format dengan 4 digit

        return $new_kode;
    }

    public static function auto_kode_lp()
    {
        $q=DB::table('list_proses')->select(DB::raw('MAX(RIGHT(lp_kode,4)) as kd_max'));
            if($q->count()>0)
            {
                foreach($q->get() as $k)
                {
                    $tmp = ((int)$k->kd_max)+1;
                    $kd = sprintf("%04s", $tmp);
                }
            }
            else
            {
                $kd = "0001";
            }
    
        return $kd;
    }

    public static function auto_kode_perusahaan()
    {
        $date = date('ymd');
        $prx = $date;
        $kd = $prx . "001";
        $query = DB::table('perusahaans')->where('perusahaan_kode', $kd)->limit(1)->get();
        if ($query == '') {
            $kd = $prx . "001";
        } else {
            $queryNew = DB::table('perusahaans')->orderBy('perusahaan_kode', 'DESC')->limit(1)->get();
            foreach ($queryNew as $k) {
                $getKode = $k->perusahaan_kode;
                $tmp = Str::substr($getKode, 0, 6);
                if ($prx == $tmp) {
                    $kd = $getKode + 1;
                } else {
                    $kd = $prx . "001";
                }
            }
        }
        return $kd;
    }

    public static function auto_kode_trx()
    {
        // $prefix = "DL";
        // $date = date('ym');
        // $q=DB::table('transaksis')->select(DB::raw('MAX(RIGHT(trx_kode,4)) as kd_max'));
        // $prx = $prefix.$date;
        //     if ($q->count()>0)
        //     {
        //         foreach($q->get() as $k)
        //         {
        //             if ($k->kd_max == "9999") {
        //                 $kd = $prx."0001";
        //             } else {
        //                 $tmp = ((int)$k->kd_max)+1;
        //                 $kd = $prx.sprintf("%04s", $tmp);
        //             }                    
        //         }
        //     }
        //     else
        //     {
        //         $kd = $prx."0001";
        //     }

        $prefix = "DL";
        $date = date('ym');
        $prx = $prefix . $date;
        $kd = $prx . "0001";
        $query = DB::table('transaksis')->where('trx_kode', $kd)->limit(1)->get();

        if ($query == '') {
            $kd = $prx . "0001";
        } else {
            $queryNew = DB::table('transaksis')->orderBy('trx_kode', 'DESC')->limit(1)->get();
            foreach ($queryNew as $key) {
                $getKode = $key->trx_kode;
                $str = Str::substr($getKode, 2);
                $tmp = Str::substr($getKode, 2, 4);
                if ($date == $tmp) {
                    $kd = $prefix.$str + 1;
                } else {
                    $kd = $prx . "0001";
                }
            }
        }
        return $kd;
    }

    public static function auto_kode_trxdetail()
    {
        $date = date('ym');
        $prx = $date;
        $kd = $prx . "001";
        $query = DB::table('transaksi_details')->where('trxdtl_kode', $kd)->limit(1)->get();
        if ($query == '') {
            $kd = $prx . "001";
        } else {
            $queryNew = DB::table('transaksi_details')->orderBy('trxdtl_kode', 'DESC')->limit(1)->get();
            foreach ($queryNew as $k) {
                $getKode = $k->trxdtl_kode;
                $tmp = Str::substr($getKode, 0, 4);
                if ($prx == $tmp) {
                    $kd = $getKode + 1;
                } else {
                    $kd = $prx . "001";
                }
            }
        }
        return $kd;
    }

    public static function auto_kode_trxdetailsts()
    {
        $date = date('ymd');
        $prx = $date;
        $kd = $prx . "0001";
        $query = DB::table('transaksi_detail_statuses')->where('trxdtlsts_kode', $kd)->limit(1)->get();
        if ($query == '') {
            $kd = $prx . "0001";
        } else {
            $queryNew = DB::table('transaksi_detail_statuses')->orderBy('trxdtlsts_kode', 'DESC')->limit(1)->get();
            foreach ($queryNew as $k) {
                $getKode = $k->trxdtlsts_kode;
                $tmp = Str::substr($getKode, 0, 6);
                if ($prx == $tmp) {
                    $kd = $getKode + 1;
                } else {
                    $kd = $prx . "0001";
                }
            }
        }
        return $kd;
    }

    public static function auto_kode_bayar()
    {
        $prefix = "BYR";
        $date = date('ym');
        $prx = $prefix . $date;
        $kd = $prx . "0001";
        $query = DB::table('pembayarans')->where('pembayaran_kode', $kd)->limit(1)->get();

        if ($query == '') {
            $kd = $prx . "0001";
        } else {
            $queryNew = DB::table('pembayarans')->orderBy('pembayaran_kode', 'DESC')->limit(1)->get();
            foreach ($queryNew as $key) {
                $getKode = $key->pembayaran_kode;
                $str = Str::substr($getKode, 3);
                $tmp = Str::substr($getKode, 3, 4);
                if ($date == $tmp) {
                    $kd = $prefix . $str + 1;
                } else {
                    $kd = $prx . "0001";
                }
            }
        }
        return $kd;
    }

    public static function auto_kode_kategori()
    {
        $date = date('y');
        $prx = $date;
        $kd = $prx . "001";
        $query = DB::table('kategoris')->where('kategori_kode', $kd)->limit(1)->get();
        if ($query == '') {
            $kd = $prx . "001";
        } else {
            $queryNew = DB::table('kategoris')->orderBy('kategori_kode', 'DESC')->limit(1)->get();
            foreach ($queryNew as $k) {
                $getKode = $k->kategori_kode;
                $tmp = Str::substr($getKode, 0, 2);
                if ($prx == $tmp) {
                    $kd = $getKode + 1;
                } else {
                    $kd = $prx . "001";
                }
            }
        }
        return $kd;
    }

    public static function auto_kode_artikel()
    {
        $date = date('ym');
        $prx = $date;
        $kd = $prx . "001";
        $query = DB::table('artikels')->where('artikel_kode', $kd)->limit(1)->get();
        if ($query == '') {
            $kd = $prx . "001";
        } else {
            $queryNew = DB::table('artikels')->orderBy('artikel_kode', 'DESC')->limit(1)->get();
            foreach ($queryNew as $k) {
                $getKode = $k->artikel_kode;
                $tmp = Str::substr($getKode, 0, 4);
                if ($prx == $tmp) {
                    $kd = $getKode + 1;
                } else {
                    $kd = $prx . "001";
                }
            }
        }
        return $kd;
    }

    public static function auto_kode_keyword()
    {
        $date = date('ymd');
        $prx = $date;
        $kd = $prx . "0001";
        $query = DB::table('keywords')->where('keyword_kode', $kd)->limit(1)->get();
        if ($query == '') {
            $kd = $prx . "0001";
        } else {
            $queryNew = DB::table('keywords')->orderBy('keyword_kode', 'DESC')->limit(1)->get();
            foreach ($queryNew as $k) {
                $getKode = $k->keyword_kode;
                $tmp = Str::substr($getKode, 0, 6);
                if ($prx == $tmp) {
                    $kd = $getKode + 1;
                } else {
                    $kd = $prx . "0001";
                }
            }
        }
        return $kd;
    }

    public static function auto_kode_promo()
    {
        $date = date('ym');
        $prx = $date;
        $kd = $prx . "001";
        $query = DB::table('promos')->where('promo_kode', $kd)->limit(1)->get();
        if ($query == '') {
            $kd = $prx . "001";
        } else {
            $queryNew = DB::table('promos')->orderBy('promo_kode', 'DESC')->limit(1)->get();
            foreach ($queryNew as $k) {
                $getKode = $k->promo_kode;
                $tmp = Str::substr($getKode, 0, 4);
                if ($prx == $tmp) {
                    $kd = $getKode + 1;
                } else {
                    $kd = $prx . "001";
                }
            }
        }
        return $kd;
    }

    public static function auto_kode_career()
    {
        $date = date('ym');
        $prx = $date;
        $kd = $prx . "001";
        $query = DB::table('careers')->where('career_kode', $kd)->limit(1)->get();
        if ($query == '') {
            $kd = $prx . "001";
        } else {
            $queryNew = DB::table('careers')->orderBy('career_kode', 'DESC')->limit(1)->get();
            foreach ($queryNew as $k) {
                $getKode = $k->career_kode;
                $tmp = Str::substr($getKode, 0, 4);
                if ($prx == $tmp) {
                    $kd = $getKode + 1;
                } else {
                    $kd = $prx . "001";
                }
            }
        }
        return $kd;
    }

    public static function auto_kode_office()
    {
        $prefix = "DL";
        $q = DB::table('offices')->select(DB::raw('MAX(RIGHT(office_kode,3)) as kd_max'));
        $prx = $prefix;
        if ($q->count() > 0) {
            foreach ($q->get() as $k) {
                $tmp = ((int)$k->kd_max) + 1;
                $kd = $prx . sprintf("%03s", $tmp);
            }
        } else {
            $kd = $prx . "001";
        }

        return $kd;
    }



    public static function GetBeforereadContact()
    {
        return Contact::where('contact_status', '1')->get();
    }

    public static function GetBeforereadChecking()
    {
        return Checking::where('chk_status', '1')->get();
    }


    public static function getClientIPaddress($request)
    {

        if (isset($_SERVER["HTTP_CF_CONNECTING_IP"])) {
            $_SERVER['REMOTE_ADDR'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
            $_SERVER['HTTP_CLIENT_IP'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
        }
        $client  = @$_SERVER['HTTP_CLIENT_IP'];
        $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
        $remote  = $_SERVER['REMOTE_ADDR'];

        if (filter_var($client, FILTER_VALIDATE_IP)) {
            $clientIp = $client;
        } elseif (filter_var($forward, FILTER_VALIDATE_IP)) {
            $clientIp = $forward;
        } else {
            $clientIp = $remote;
        }

        return $clientIp;
    }

    public static function sendClientIPaddress($ip)
    {
        $day = Carbon::now()->format('Y-m-d');
        $cek_query = Visitorsweb::where('ip_address', $ip)
            ->whereLike('created_at', '%' . $day . '%')
            ->get();

        if ($cek_query->isEmpty()) {
            return Visitorsweb::create([
                'ip_address'    => $ip
            ]);
        }
    }

    public static function ulangTahun()
    {
        $hbd_bln = date('m');
        $hbd_tgl = date('d');

        $querySearch = User::where('tgl_tgl', '=', $hbd_tgl)
            ->where('tgl_bln', '=', $hbd_bln)
            ->where('status', '=', 'Active')
            ->orderBy('kode', 'ASC')
            ->get();
        
        return $querySearch;
    }

    public static function auto_kode_rekening()
    {
        $date = date('y');
        $prx = $date;
        $kd = $prx . "001";
        $query = DB::table('rekenings')->where('rekening_kode', $kd)->limit(1)->get();
        if ($query == '') {
            $kd = $prx . "001";
        } else {
            $queryNew = DB::table('rekenings')->orderBy('rekening_kode', 'DESC')->limit(1)->get();
            foreach ($queryNew as $k) {
                $getKode = $k->rekening_kode;
                $tmp = Str::substr($getKode, 0, 2);
                if ($prx == $tmp) {
                    $kd = $getKode + 1;
                } else {
                    $kd = $prx . "001";
                }
            }
        }
        return $kd;
    }
}