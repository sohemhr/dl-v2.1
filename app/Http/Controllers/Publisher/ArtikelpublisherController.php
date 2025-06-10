<?php

namespace App\Http\Controllers\Publisher;

use App\Models\Artikel;
use App\Models\Kategori;
use App\Helpers\MyHelper;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Keyword;
use Illuminate\Support\Facades\Storage;

class ArtikelpublisherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $getArtikel = Artikel::orderBy('artikel_kode', 'DESC')
                        ->join('kategoris', 'artikels.artikel_kategori_kode', '=', 'kategoris.kategori_kode')
                        ->get();
        $data = [
            'title'     => 'Artikel',
            'subtitle'  => 'Data Artikel',
            'getArtikel' => $getArtikel
        ];

        return view('publisher.artikel.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $getKategori = Kategori::orderBy('created_at', 'DESC')->get();
        $data = [
            'title'     => 'Artikel',
            'subtitle'  => 'Tambah Artikel',
            'getKategori' => $getKategori
        ];

        return view('publisher.artikel.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate
        $request->validate([
            'artikel_judul'     => ['required', 'max:255'],
            'artikel_kategori_kode'  => ['required'],
            'artikel_deskripsi' => ['required'],
            'artikel_tag'       => ['required'],
            'artikel_status'    => ['required'],
            'images'     => ['nullable', 'file', 'max:3000', 'mimes:webp,png,jpg,jpeg']
        ]);

        // Store image if exists
        $path = null;
        if ($request->hasFile('images')) {
            $path = Storage::disk('public')->put('artikel_images', $request->images);
        }

        $kode = MyHelper::auto_kode_artikel();
        // Create a post
        Artikel::create([
            'artikel_uuid'  => Str::uuid()->toString(),
            'artikel_kode'  => $kode,
            'artikel_kategori_kode' => $request->artikel_kategori_kode,
            'artikel_judul' => $request->artikel_judul,
            'artikel_slug'  => Str::slug($request->artikel_judul),
            'artikel_deskripsi' => $request->artikel_deskripsi,
            'artikel_tag'   => $request->artikel_tag,
            'artikel_author' => auth('user')->user()->kode,
            'artikel_tanggal' => date('Y-m-d'),
            'artikel_status' => $request->artikel_status,
            'artikel_foto'  => $path
        ]);

        $keyword = [];
        $keyword_id = $request['keyword'];
        if (isset($keyword_id[0])) {
            foreach ($keyword_id as $key => $value) {
                $keyword[] = [
                    'keyword_artikel_kode' => $kode,
                    'keyword_nama'   => $value,
                    'keyword_slug'   => Str::slug($value),
                ];
            }
            $timestamp = Carbon::now();
            foreach ($keyword as &$record) {
                $record['created_at'] = $timestamp;
                $record['updated_at'] = $timestamp;
            }

            $num = 0;
            $kode_keyword = MyHelper::auto_kode_keyword();
            foreach ($keyword as &$x) {
                $num++;
                $x['keyword_kode'] = $kode_keyword + $num;
            }
            DB::table('keywords')->insert($keyword);
        }

        // Redirect back to dashboard
        return back()->with('success', 'Okay.. Data Artikel telah di tambahakan..');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $uuid)
    {
        $getKategori = Kategori::orderBy('created_at', 'DESC')->get();
        $getArtikel = Artikel::where('artikel_uuid', $uuid)
            ->join('kategoris', 'artikels.artikel_kategori_kode', '=', 'kategoris.kategori_kode')
            ->get(); 
        foreach ($getArtikel as $key) {
            $kodeArt = $key->artikel_kode;
        }
        $getKeyword = Keyword::where('keyword_artikel_kode', $kodeArt)
            ->orderBy('keyword_kode', 'ASC')
            ->get();
        $data = [
            'title'     => 'Artikel',
            'subtitle'  => 'Edit Artikel',
            'getKategori' => $getKategori,
            'getArtikel' => $getArtikel,
            'getKeyword' => $getKeyword
        ];

        return view('publisher.artikel.edit', $data);
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
            'artikel_judul'     => ['required', 'max:255'],
            'artikel_kategori_kode'  => ['required'],
            'artikel_deskripsi' => ['required'],
            'artikel_tag'       => ['required'],
            'artikel_status'    => ['required'],
            'images'     => ['nullable', 'file', 'max:3000', 'mimes:webp,png,jpg,jpeg']
        ]);

        // Store image if exists
        $getArt = Artikel::where('artikel_uuid', $uuid)->get();
        foreach ($getArt as $x) {
            $fotoLama = $x->artikel_foto;
            $judulLama = $x->artikel_judul;
            $slugLama = $x->artikel_slug;
        }
        $path = $fotoLama ?? null;
        if ($request->hasFile('images')) {
            if ($fotoLama) {
                Storage::disk('public')->delete($fotoLama);
            }
            $path = Storage::disk('public')->put('artikel_images', $request->images);
        }

        $slug = Str::slug($request->artikel_judul);
        if ($slugLama != $slug) {
            $count = Artikel::whereRaw("artikel_slug RLIKE '^{$slug}(-[0-9]+)?$'")->count();
            if ($count > 1) {
                if ($judulLama == $request->artikel_judul) {
                    $artikel_slug = $slugLama;
                } else {
                    $artikel_slug = $count ? "{$slug}-{$count}" : $slug;
                }
            } else {
                 $artikel_slug = $slug;
            }
        } else {
             $artikel_slug = $slug;
        }
        
        // Update the post
        Artikel::where('artikel_uuid', $uuid)->update([
            'artikel_kategori_kode' => $request->artikel_kategori_kode,
            'artikel_judul' => $request->artikel_judul,
            'artikel_slug'  => $artikel_slug,
            'artikel_deskripsi' => $request->artikel_deskripsi,
            'artikel_tag'   => $request->artikel_tag,
            'artikel_status' => $request->artikel_status,
            'artikel_foto'  => $path
        ]);

        // Update batch
        $keywordKode = $request['keyword_kode'];
        $keywordArtKode = $request['keyword_artikel_kode'];
        $keywordNama = $request['keyword'];
        foreach ($keywordKode as $key => $value) {
            $data = array(
                'keyword_artikel_kode' => $keywordArtKode[$key],
                'keyword_nama' => $keywordNama[$key],
                'keyword_slug'   => Str::slug($keywordNama[$key]),
            );
            DB::table('keywords')->where('keyword_kode', $keywordKode[$key])
                ->update($data);
        }

        // Redirect to dashboard
        return redirect()->route('publisherartikel.index')->with('success', 'Data Artikel telah di perbaharui..');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $uuid)
    {
        $getArt = Artikel::where('artikel_uuid', $uuid)->get();
        foreach ($getArt as $x) {
            $kode = $x->artikel_kode;
            $fotoLama = $x->artikel_foto;
        }

        if ($fotoLama) {
            Storage::disk('public')->delete($fotoLama);
        }

        Keyword::where('keyword_artikel_kode', $kode)->delete();

        // Delete the post
        Artikel::where('artikel_uuid', $uuid)->delete();

        // Redirect back to dashboard
        return back()->with('delete', 'Data Telah di Hapus dari Database..');
    }

    public function addKeyword(Request $request)
    {
        $kodeKey = MyHelper::auto_kode_keyword();
        $timestamp = Carbon::now();
        $newKeyword = [
            'keyword_kode'      => $kodeKey,
            'keyword_artikel_kode' => $request->keyword_artikel_kode,
            'keyword_nama'   => $request->keyword_nama,
            'keyword_slug'   => Str::slug($request->keyword_nama),
            'created_at'    => $timestamp,
            'updated_at'    => $timestamp
        ];
        DB::table('keywords')->insert($newKeyword);
        return response()->json(['success' => 'Paket saved successfully.']);
    }

    public function destroyKeyword(String $id)
    {
        DB::table('keywords')->where('keyword_kode', $id)->delete();
        return response()->json([
            'success' => 'Record deleted successfully!'
        ]);
    }
}
