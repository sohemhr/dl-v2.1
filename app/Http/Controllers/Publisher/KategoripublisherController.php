<?php

namespace App\Http\Controllers\Publisher;

use App\Models\Kategori;
use App\Helpers\MyHelper;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class KategoripublisherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $getKategori = Kategori::orderBy('created_at', 'DESC')->get();
        $data = [
            'title'     => 'Kategori',
            'subtitle'  => 'Data Kategori',
            'getKategori' => $getKategori
        ];

        return view('publisher.kategori.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = [
            'title'     => 'Kategori',
            'subtitle'  => 'Tambah Kategori'
        ];

        return view('publisher.kategori.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate
        $request->validate([
            'kategori_nama'  => ['required', 'max:255', 'unique:kategoris'],
            'kategori_warna'  => ['required']
        ]);

        $kode = MyHelper::auto_kode_kategori();
        // Create a post
        Kategori::create([
            'kategori_uuid' => Str::uuid()->toString(),
            'kategori_kode' => $kode,
            'kategori_nama' => $request->kategori_nama,
            'kategori_slug' => Str::slug($request->kategori_nama),
            'kategori_warna' => $request->kategori_warna
        ]);

        // Redirect back to dashboard
        return back()->with('success', 'Okay.. Data Kategori telah di tambahakan..');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $uuid)
    {
        $getKategori = Kategori::where('kategori_uuid', $uuid)->get();
        $data = [
            'title'     => 'Kategori',
            'subtitle'  => 'Edit Kategori',
            'getKategori'    => $getKategori
        ];

        return view('publisher.kategori.edit', $data);
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
            'kategori_nama'  => ['required', 'max:255'],
            'kategori_warna'  => ['required']
        ]);

        // Update the post
        Kategori::where('kategori_uuid', $uuid)->update([
            'kategori_nama' => $request->kategori_nama,
            'kategori_slug' => Str::slug($request->kategori_nama),
            'kategori_warna' => $request->kategori_warna
        ]);

        // Redirect to dashboard
        return redirect()->route('publisherkategori.index')->with('success', 'Data Kategori telah di perbaharui..');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $uuid)
    {
        // Delete the post
        Kategori::where('kategori_uuid', $uuid)->delete();

        // Redirect back to dashboard
        return back()->with('delete', 'Data Telah di Hapus dari Database..');
    }
}
