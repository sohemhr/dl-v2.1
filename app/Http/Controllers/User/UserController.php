<?php

namespace App\Http\Controllers\User;

use App\Models\User;
use App\Helpers\MyHelper;
use App\Models\Akseslevel;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (auth('user')->user()->level == '202500') {
            $user = User::orderBy('users.created_at', 'DESC')
                ->join('akses_levels', 'users.level', '=', 'akses_levels.akses_id')
                ->get();
        } else {
            $user = User::where('level', '>', 202500)
                ->join('akses_levels', 'users.level', '=', 'akses_levels.akses_id')
                ->orderBy('users.created_at', 'DESC')
                ->get();
        }
        
        
        $data = [
            'title'     => 'Users',
            'subtitle'  => 'Data Users',
            'users'     => $user
        ];

        return view('user.users.index', $data);
    }

    public function create ()
    {
        if (auth('user')->user()->level == '202500') {
            $levels = Akseslevel::orderBy('created_at', 'DESC')->get();
        } else {
            $levels = Akseslevel::getLevelFilter();
        }
        $data = [
            'title'     => 'Users',
            'subtitle'  => 'Tambah Users',
            'levels'    => $levels
        ];

        return view('user.users.create', $data);
    }

    public function store(Request $request)
    {
        // Validate
        $request->validate([
            'nama'      => ['required', 'max:255'],
            'email'     => ['required', 'max:255', 'email:rfc,dns', 'unique:users,email'],
            'password'  => ['required', 'min:3', 'confirmed'],
            'no_hp'     => ['required'],
            'tmp_lahir' => ['required'],
            'tgl_lahir' => ['required'],
            'tgl_masuk' => ['required'],
            'level'     => ['required'],
            'status'    => ['required'],
            'photo'     => ['nullable', 'file', 'max:3000', 'mimes:webp,png,jpg,jpeg']
        ]);

        // Store image if exists
        $path = null;
        if ($request->hasFile('photo')) {
            $path = Storage::disk('public')->put('users_foto', $request->photo);
        }

        // Create a post
        $kode = MyHelper::auto_kode_users();
        $segments = Str::of($request->tgl_lahir)->split('/[-\s,]+/');
        $thn = $segments[0];
        $bln = $segments[1];
        $tgl = $segments[2];
        User::create([
            'uuid'  => Str::uuid()->toString(),
            'kode'  => $kode,
            'nama'  => $request->nama,
            'email' => $request->email,
            'email_verified_at' => now(),
            'password' => $request->password,
            'remember_token' => Str::random(10),
            'no_hp'     => $request->no_hp,
            'tmp_lahir' => $request->tmp_lahir,
            'tgl_lahir' => $request->tgl_lahir,
            'tgl_tgl'   => $tgl,
            'tgl_bln'   => $bln,
            'tgl_thn'   => $thn,
            'tgl_masuk' => $request->tgl_masuk,
            'tgl_keluar'=> '',
            'level'     => $request->level,
            'status'    => $request->status,
            'foto'      => $path
        ]);

        // Redirect back to dashboard
        return back()->with('success', 'Okay.. Data Users telah di tambahakan..');
    }

    public function show(string $uuid)
    {
        if (auth('user')->user()->level == '202500') {
            $levels = Akseslevel::orderBy('created_at', 'DESC')->get();
        } else {
            $levels = Akseslevel::getLevelFilter();
        }
        $user = User::where('uuid', $uuid)
                            ->join('akses_levels', 'users.level', '=', 'akses_levels.akses_id')
                            ->get();
        $data = [
            'title'     => 'Users',
            'subtitle'  => 'Edit Users',
            'levels'    => $levels,
            'users'     => $user
        ];

        return view('user.users.edit', $data);
    }

    public function update(Request $request, String $uuid)
    {
        // Validate
        $request->validate([
            'nama'      => ['required', 'max:255'],
            'email'     => ['required', 'max:255', 'email'],
            'password'  => ['nullable', 'min:3', 'confirmed'],
            'no_hp'     => ['required'],
            'tmp_lahir' => ['required'],
            'tgl_lahir' => ['required'],
            'tgl_masuk' => ['required'],
            'tgl_keluar'=> ['nullable'],
            'level'     => ['required'],
            'status'    => ['required'],
            'photo'     => ['nullable', 'file', 'max:3000', 'mimes:webp,png,jpg,jpeg']
        ]);

        // Store image if exists
        $user = User::where('uuid', $uuid)->get();
        foreach($user as $x){
            $fotoLama = $x->foto;
        }       
        $path = $fotoLama ?? null;
        if ($request->hasFile('photo')) {
            if ($fotoLama) {
                Storage::disk('public')->delete($fotoLama);
            }
            $path = Storage::disk('public')->put('users_foto', $request->photo);
        }

        // Store password if new
        if ($request->password != null) {
            User::where('uuid',$uuid)->update([
                'password' => Hash::make($request->password)
            ]);
        }
        

        // Update the post
        $segments = Str::of($request->tgl_lahir)->split('/[-\s,]+/');
        $thn = $segments[0];
        $bln = $segments[1];
        $tgl = $segments[2];
        User::where('uuid',$uuid)->update([
            'nama'  => $request->nama,
            'email' => $request->email,
            'no_hp'     => $request->no_hp,
            'tmp_lahir' => $request->tmp_lahir,
            'tgl_lahir' => $request->tgl_lahir,
            'tgl_tgl'   => $tgl,
            'tgl_bln'   => $bln,
            'tgl_thn'   => $thn,
            'tgl_masuk' => $request->tgl_masuk,
            'tgl_keluar'=> $request->tgl_keluar,
            'level'     => $request->level,
            'status'    => $request->status,
            'foto'      => $path
        ]);

        // Redirect to dashboard
        // return redirect()->route('users.index')->with('success', 'Data Users telah di perbaharui..');
        return back()->with('success', 'Okay.. Data telah di perbaharui.. :) ');
    }

    public function destroy(string $uuid)
    {
        // Delete post image if exists
        $user = User::where('uuid', $uuid)->get();
        foreach($user as $x){
            $fotoLama = $x->foto;
        } 
        if ($fotoLama) {
            Storage::disk('public')->delete($fotoLama);
        }

        // Delete the post
        User::where('uuid',$uuid)->delete();

        // Redirect back to dashboard
        return back()->with('delete', 'Data Telah di Hapus dari Database..');
    }

    public function profile()
    {
        $user = User::where('uuid', auth('user')->user()->uuid)->get();
        $data = [
            'title'     => 'Profile',
            'subtitle'  => 'My Profile',
            'users'     => $user
        ];

        return view('user.users.profile', $data);
    }
}
