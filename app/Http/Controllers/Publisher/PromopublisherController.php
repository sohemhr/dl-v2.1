<?php

namespace App\Http\Controllers\Publisher;

use App\Models\Promo;
use App\Helpers\MyHelper;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class PromopublisherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $getPromo = Promo::orderBy('promo_kode', 'DESC')->get();
        $data = [
            'title'     => 'Promo',
            'subtitle'  => 'Data Promo',
            'getPromo' => $getPromo
        ];

        return view('publisher.promo.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = [
            'title'     => 'Promo',
            'subtitle'  => 'Tambah Promo'
        ];

        return view('publisher.promo.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate
        $request->validate([
            'promo_judul'     => ['required', 'max:255'],
            'promo_deskripsi' => ['required'],
            'promo_tanggal_mulai'   => ['required'],
            'promo_tanggal_selesai' => ['required'],
            'promo_status'    => ['required'],
            'images'     => ['nullable', 'file', 'max:3000', 'mimes:webp,png,jpg,jpeg']
        ]);

        // Store image if exists
        $path = null;
        if ($request->hasFile('images')) {
            $path = Storage::disk('public')->put('promo_images', $request->images);
        }

        $kode = MyHelper::auto_kode_promo();
        // Create a post
        Promo::create([
            'promo_uuid'  => Str::uuid()->toString(),
            'promo_kode'  => $kode,
            'promo_judul' => $request->promo_judul,
            'promo_slug'  => Str::slug($request->promo_judul),
            'promo_deskripsi' => $request->promo_deskripsi,
            'promo_author' => auth('user')->user()->kode,
            'promo_tanggal_mulai' => $request->promo_tanggal_mulai,
            'promo_tanggal_selesai' => $request->promo_tanggal_selesai,
            'promo_status' => $request->promo_status,
            'promo_foto'  => $path
        ]);

        // Redirect back to dashboard
        return back()->with('success', 'Okay.. Data promo telah di tambahakan..');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $uuid)
    {
        $getPromo = Promo::where('promo_uuid', $uuid)->get();
        $data = [
            'title'     => 'Promo',
            'subtitle'  => 'Edit Promo',
            'getPromo' => $getPromo
        ];

        return view('publisher.promo.edit', $data);
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
            'promo_judul'     => ['required', 'max:255'],
            'promo_deskripsi' => ['required'],
            'promo_tanggal_mulai'   => ['required'],
            'promo_tanggal_selesai' => ['required'],
            'promo_status'    => ['required'],
            'images'     => ['nullable', 'file', 'max:3000', 'mimes:webp,png,jpg,jpeg']
        ]);

        // Store image if exists
        $getArt = Promo::where('promo_uuid', $uuid)->get();
        foreach ($getArt as $x) {
            $fotoLama = $x->promo_foto;
            $judulLama = $x->promo_judul;
            $slugLama = $x->promo_slug;
        }
        $path = $fotoLama ?? null;
        if ($request->hasFile('images')) {
            if ($fotoLama) {
                Storage::disk('public')->delete($fotoLama);
            }
            $path = Storage::disk('public')->put('promo_images', $request->images);
        }

        $slug = Str::slug($request->promo_judul);
        if ($slugLama != $slug) {
            $count = Promo::whereRaw("promo_slug RLIKE '^{$slug}(-[0-9]+)?$'")->count();
            if ($count > 1) {
                if ($judulLama == $request->promo_judul) {
                    $promo_slug = $slugLama;
                } else {
                    $promo_slug = $count ? "{$slug}-{$count}" : $slug;
                }
            } else {
                $promo_slug = $slug;
            }
        } else {
            $promo_slug = $slug;
        }

        // Update the post
        Promo::where('promo_uuid', $uuid)->update([
            'promo_judul' => $request->promo_judul,
            'promo_slug'  => $promo_slug,
            'promo_deskripsi' => $request->promo_deskripsi,
            'promo_tanggal_mulai' => $request->promo_tanggal_mulai,
            'promo_tanggal_selesai' => $request->promo_tanggal_selesai,
            'promo_status' => $request->promo_status,
            'promo_foto'  => $path
        ]);

        // Redirect to dashboard
        return redirect()->route('publisherpromo.index')->with('success', 'Data promo telah di perbaharui..');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $uuid)
    {
        $getArt = Promo::where('promo_uuid', $uuid)->get();
        foreach ($getArt as $x) {
            $fotoLama = $x->promo_foto;
        }

        if ($fotoLama) {
            Storage::disk('public')->delete($fotoLama);
        }

        // Delete the post
        Promo::where('promo_uuid', $uuid)->delete();

        // Redirect back to dashboard
        return back()->with('delete', 'Data Telah di Hapus dari Database..');
    }
}
