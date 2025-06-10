<?php

namespace App\Http\Controllers\Publisher;

use App\Models\Career;
use App\Helpers\MyHelper;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class CareerpublisherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $getCareer = Career::orderBy('career_kode', 'DESC')->get();
        $data = [
            'title'     => 'Career',
            'subtitle'  => 'Data Career',
            'getCareer' => $getCareer
        ];

        return view('publisher.career.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = [
            'title'     => 'Career',
            'subtitle'  => 'Tambah Career'
        ];

        return view('publisher.career.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate
        $request->validate([
            'career_judul'     => ['required', 'max:255'],
            'career_deskripsi' => ['required'],
            'career_status'    => ['required'],
            'career_tanggal_mulai'    => ['required'],
            'career_tanggal_selesai'    => ['required'],
            'images'     => ['nullable', 'file', 'max:3000', 'mimes:webp,png,jpg,jpeg']
        ]);

        // Store image if exists
        $path = null;
        if ($request->hasFile('images')) {
            $path = Storage::disk('public')->put('career_images', $request->images);
        }

        $kode = MyHelper::auto_kode_career();
        // Create a post
        Career::create([
            'career_uuid'  => Str::uuid()->toString(),
            'career_kode'  => $kode,
            'career_judul' => $request->career_judul,
            'career_slug'  => Str::slug($request->career_judul),
            'career_deskripsi' => $request->career_deskripsi,
            'career_author' => auth('user')->user()->kode,
            'career_tanggal_mulai' => $request->career_tanggal_mulai,
            'career_tanggal_selesai' => $request->career_tanggal_selesai,
            'career_status' => $request->career_status,
            'career_foto'  => $path
        ]);

        // Redirect back to dashboard
        return back()->with('success', 'Okay.. Data career telah di tambahakan..');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $uuid)
    {
        $getCareer = Career::where('career_uuid', $uuid)->get();
        $data = [
            'title'     => 'Career',
            'subtitle'  => 'Edit Career',
            'getCareer' => $getCareer
        ];

        return view('publisher.career.edit', $data);
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
            'career_judul'     => ['required', 'max:255'],
            'career_deskripsi' => ['required'],
            'career_tanggal_mulai'    => ['required'],
            'career_tanggal_selesai'    => ['required'],
            'career_status'    => ['required'],
            'images'     => ['nullable', 'file', 'max:3000', 'mimes:webp,png,jpg,jpeg']
        ]);

        // Store image if exists
        $getArt = Career::where('career_uuid', $uuid)->get();
        foreach ($getArt as $x) {
            $fotoLama = $x->career_foto;
            $judulLama = $x->career_judul;
            $slugLama = $x->career_slug;
        }
        $path = $fotoLama ?? null;
        if ($request->hasFile('images')) {
            if ($fotoLama) {
                Storage::disk('public')->delete($fotoLama);
            }
            $path = Storage::disk('public')->put('career_images', $request->images);
        }

        $slug = Str::slug($request->career_judul);
        if ($slugLama != $slug) {
            $count = Career::whereRaw("career_judul RLIKE '^{$slug}(-[0-9]+)?$'")->count();
            if ($count > 1) {
                if ($judulLama == $request->artikel_judul) {
                    $career_judul = $slugLama;
                } else {
                    $career_judul = $count ? "{$slug}-{$count}" : $slug;
                }
            } else {
                $career_judul = $slug;
            }
        } else {
            $career_judul = $slug;
        }

        // Update the post
        Career::where('career_uuid', $uuid)->update([
            'career_judul' => $request->career_judul,
            'career_slug'  => $career_judul,
            'career_deskripsi' => $request->career_deskripsi,
            'career_tanggal_mulai' => $request->career_tanggal_mulai,
            'career_tanggal_selesai' => $request->career_tanggal_selesai,
            'career_status' => $request->career_status,
            'career_foto'  => $path
        ]);

        // Redirect to dashboard
        return redirect()->route('publishercareer.index')->with('success', 'Data career telah di perbaharui..');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $uuid)
    {
        $getArt = Career::where('career_uuid', $uuid)->get();
        foreach ($getArt as $x) {
            $fotoLama = $x->career_foto;
        }

        if ($fotoLama) {
            Storage::disk('public')->delete($fotoLama);
        }

        // Delete the post
        Career::where('career_uuid', $uuid)->delete();

        // Redirect back to dashboard
        return back()->with('delete', 'Data Telah di Hapus dari Database..');
    }
}
