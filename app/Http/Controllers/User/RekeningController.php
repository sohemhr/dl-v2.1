<?php

namespace App\Http\Controllers\User;

use App\Models\Rekening;
use App\Helpers\MyHelper;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RekeningController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $getRekening = Rekening::orderBy('created_at', 'DESC')->get();
        $data = [
            'title'     => 'Rekening',
            'subtitle'  => 'Data Rekening',
            'getRekening' => $getRekening
        ];

        return view('user.rekening.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = [
            'title'     => 'Rekening',
            'subtitle'  => 'Tambah Rekening'
        ];

        return view('user.rekening.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate
        $request->validate([
            'rekening_nama'  => ['required', 'max:255'],
            'rekening_nomor'  => ['required', 'numeric', 'unique:rekenings'],
            'rekening_atas_nama'  => ['required'],
            'rekening_swiftcode'  => ['required'],
            'rekening_kategori'  => ['required']
        ]);

        $kode = MyHelper::auto_kode_rekening();
        // Create a post
        Rekening::create([
            'rekening_uuid' => Str::uuid()->toString(),
            'rekening_kode' => $kode,
            'rekening_nama' => $request->rekening_nama,
            'rekening_nomor' => $request->rekening_nomor,
            'rekening_atas_nama' => $request->rekening_atas_nama,
            'rekening_swiftcode' => $request->rekening_swiftcode,
            'rekening_kategori' => $request->rekening_kategori
        ]);

        // Redirect back to dashboard
        return back()->with('success', 'Okay.. Data rekening telah di tambahakan..');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $uuid)
    {
        $getRekening = Rekening::where('rekening_uuid', $uuid)->get();
        $data = [
            'title'     => 'rekening',
            'subtitle'  => 'Edit rekening',
            'getRekening'    => $getRekening
        ];

        return view('user.rekening.edit', $data);
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
            'rekening_nama'  => ['required', 'max:255'],
            'rekening_nomor'  => ['required', 'numeric'],
            'rekening_atas_nama'  => ['required'],
            'rekening_swiftcode'  => ['required'],
            'rekening_kategori'  => ['required']
        ]);

        // Update the post
        Rekening::where('rekening_uuid', $uuid)->update([
            'rekening_nama' => $request->rekening_nama,
            'rekening_nomor' => $request->rekening_nomor,
            'rekening_atas_nama' => $request->rekening_atas_nama,
            'rekening_swiftcode' => $request->rekening_swiftcode,
            'rekening_kategori' => $request->rekening_kategori
        ]);

        // Redirect to dashboard
        return redirect()->route('rekening.index')->with('success', 'Data rekening telah di perbaharui..');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $uuid)
    {
        // Delete the post
        Rekening::where('rekening_uuid', $uuid)->delete();

        // Redirect back to dashboard
        return back()->with('delete', 'Data Telah di Hapus dari Database..');
    }
}
