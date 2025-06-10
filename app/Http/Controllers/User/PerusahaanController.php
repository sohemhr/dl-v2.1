<?php

namespace App\Http\Controllers\User;

use Carbon\carbon;
use App\Models\User;
use App\Helpers\MyHelper;
use App\Models\Perusahaan;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Transaksi;

class PerusahaanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
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

        return view('user.perusahaan.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $getUser = User::where('status', 'Active')->orderBy('created_at', 'DESC')->get();
        $data = [
            'title'     => 'Perusahaan',
            'subtitle'  => 'Tambah Perusahaan',
            'getUser'   => $getUser
        ];

        return view('user.perusahaan.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate
        $request->validate([
            'perusahaan_nama'   => ['required', 'max:255'],
            'perusahaan_alamat' => ['required'],
            'perusahaan_email'  => ['required', 'email'],
            'perusahaan_telepon'=> ['required'],
            'perusahaan_hp'     => ['required'],
            'perusahaan_atas_nama' => ['required'],
            'perusahaan_an_hp'     => ['required'],
            'perusahaan_tgl'    => ['required'],
            'kode_user'         => ['required']
        ]);

        $getUser = User::where('kode', $request->kode_user)->get();
        foreach ($getUser as $key) {
            $nama_user = $key->nama;
            $email_user = $key->email;
            $no_hp_user = $key->no_hp;
        }

        $uuid = Str::uuid()->toString();
        $kode = MyHelper::auto_kode_perusahaan(); 
        // Create a post
        Perusahaan::create([
            'perusahaan_uuid'   => $uuid,
            'perusahaan_kode'   => $kode,
            'perusahaan_nama'   => $request->perusahaan_nama,
            'perusahaan_alamat' => $request->perusahaan_alamat,
            'perusahaan_email'  => $request->perusahaan_email,
            'perusahaan_telepon' => $request->perusahaan_telepon,
            'perusahaan_hp'     => $request->perusahaan_hp,
            'perusahaan_atas_nama' => $request->perusahaan_atas_nama,
            'perusahaan_an_hp'     => $request->perusahaan_an_hp,
            'perusahaan_user_kode' => $request->kode_user,
            'perusahaan_nama_pic'  => $nama_user,
            'perusahaan_email_pic' => $email_user,
            'perusahaan_hp_pic'    => $no_hp_user,
            'perusahaan_tgl'    => $request->perusahaan_tgl
        ]);

        return redirect()->route('transaksi.create', $uuid)->with('success', 'Data Perusahaan telah di perbaharui..');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $uuid)
    {
        $getPerusahaan = Perusahaan::where('perusahaan_uuid', $uuid)
                                        ->join('users', 'perusahaans.perusahaan_user_kode', '=', 'users.kode')
                                        ->get();
        $getUser = User::where('status', 'Active')->orderBy('created_at', 'DESC')->get();
        $data = [
            'title'     => 'Perusahaan',
            'subtitle'  => 'Edit Perusahaan',
            'getPerusahaan' => $getPerusahaan,
            'getUser'   => $getUser
        ];

        return view('user.perusahaan.edit', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
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

        return view('user.perusahaan.detail', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $uuid)
    {
        // Validate
        $request->validate([
            'perusahaan_nama'   => ['required', 'max:255'],
            'perusahaan_alamat' => ['required'],
            'perusahaan_email'  => ['required', 'email'],
            'perusahaan_telepon'=> ['required'],
            'perusahaan_hp'     => ['required'],
            'perusahaan_atas_nama' => ['required'],
            'perusahaan_an_hp'     => ['required'],
            'kode_user'         => ['required']
        ]); 

        $getUser = User::where('kode', $request->kode_user)->get();
        foreach ($getUser as $key) {
            $nama_user = $key->nama;
            $email_user = $key->email;
            $no_hp_user = $key->no_hp;
        }

        // Update the post
        Perusahaan::where('perusahaan_uuid', $uuid)->update([
            'perusahaan_nama'   => $request->perusahaan_nama,
            'perusahaan_alamat' => $request->perusahaan_alamat,
            'perusahaan_email'  => $request->perusahaan_email,
            'perusahaan_telepon' => $request->perusahaan_telepon,
            'perusahaan_hp'     => $request->perusahaan_hp,
            'perusahaan_atas_nama' => $request->perusahaan_atas_nama,
            'perusahaan_an_hp'     => $request->perusahaan_an_hp,
            'perusahaan_user_kode' => $request->kode_user,
            'perusahaan_nama_pic'  => $nama_user,
            'perusahaan_email_pic' => $email_user,
            'perusahaan_hp_pic'    => $no_hp_user,
            'perusahaan_tgl'    => $request->perusahaan_tgl
        ]);

        // Redirect to dashboard
        return redirect()->route('perusahaan.index')->with('success', 'Data Perusahaan telah di perbaharui..');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $uuid)
    {
        // Delete the post
        Perusahaan::where('perusahaan_uuid',$uuid)->delete();

        // Redirect back to dashboard
        return back()->with('delete', 'Data Telah di Hapus dari Database..');
    }
}
