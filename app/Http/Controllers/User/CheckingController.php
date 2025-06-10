<?php

namespace App\Http\Controllers\User;

use App\Models\Checking;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CheckingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $checkingGet = Checking::orderBy('created_at', 'DESC')->get();
        $data = [
            'title'     => 'Checking List',
            'subtitle'  => 'Data Checking List',
            'checkingGet' => $checkingGet
        ];

        return view('user.checking.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = [
            'title'     => 'Checking List',
            'subtitle'  => 'Tambah Checking List'
        ];

        return view('user.checking.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate
        $request->validate([
            'chk_nama_perusahaan' => ['required', 'max:255',],
            'chk_nama'      => ['required'],
            'chk_email'     => ['required', 'max:255', 'email'],
            'chk_hp'        => ['required', 'numeric']
        ]);

        // Create a post
        Checking::create([
            'chk_uuid'      => Str::uuid()->toString(),
            'chk_nama_perusahaan' => $request->chk_nama_perusahaan,
            'chk_nama'      => $request->chk_nama,
            'chk_email'     => $request->chk_email,
            'chk_hp'        => $request->chk_hp,
            'chk_status'    => '1'
        ]);

        // Redirect back to dashboard
        return back()->with('success', 'Okay.. Data Checking telah di tambahakan..');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $uuid)
    {
        Checking::where('chk_uuid', $uuid)->update(['chk_status'    => '0']);
        $checkingGet = Checking::where('chk_uuid', $uuid)->get();
        $data = [
            'title'     => 'Checking List',
            'subtitle'  => 'Detail Checking List',
            'checkingGet'    => $checkingGet
        ];

        return view('user.checking.edit', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $uuid)
    {
        // Validate
        $request->validate([
            'chk_nama_perusahaan' => ['required', 'max:255',],
            'chk_nama'      => ['required'],
            'chk_email'     => ['required', 'max:255', 'email'],
            'chk_hp'        => ['required', 'numeric']
        ]);

        // Update the post
        Checking::where('chk_uuid', $uuid)->update([
            'chk_nama_perusahaan' => $request->chk_nama_perusahaan,
            'chk_nama'      => $request->chk_nama,
            'chk_email'     => $request->chk_email,
            'chk_hp'        => $request->chk_hp
        ]);

        // Redirect to dashboard
        return redirect()->route('checking.index')->with('success', 'Data Checking telah di perbaharui..');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $uuid)
    {
        // Delete the post
        Checking::where('chk_uuid', $uuid)->delete();

        // Redirect back to dashboard
        return back()->with('delete', 'Data Telah di Hapus dari Database..');
    }

    public function chats(Request $request) 
    {
        return redirect('https://wa.me/' . $request->chk_hp_chats);
    }
}
