<?php

namespace App\Http\Controllers\User;

use App\Models\Office;
use App\Helpers\MyHelper;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Contactnomor;
use Illuminate\Support\Facades\Storage;

class OfficeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $getOffice = Office::orderBy('office_kode', 'DESC')->get();
        $data = [
            'title'     => 'Office',
            'subtitle'  => 'Data Office',
            'getOffice' => $getOffice
        ];

        return view('user.office.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = [
            'title'     => 'Office',
            'subtitle'  => 'Tambah Office'
        ];

        return view('user.office.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate
        $request->validate([
            'office_nama'   => ['required', 'max:255'],
            'office_alamat' => ['required'],
            'office_email'  => ['required', 'email'],
            'office_telepon' => ['required'],
            'office_hp' => ['required'],
            'office_deskripsi' =>['required'],
            'office_status'    => ['required'],
            'office_lokasi'    => ['required'],
            'office_lokasi_url' => ['required'],
            'images'     => ['nullable', 'file', 'max:3000', 'mimes:webp,png,jpg,jpeg']
        ]);

        // Store image if exists
        $path = null;
        if ($request->hasFile('images')) {
            $path = Storage::disk('public')->put('office_images', $request->images);
        }

        $slug = Str::slug($request->office_nama);
        $date = date('His');
        $sm = mb_strlen($slug);
        $searchGet = Office::where('office_slug', 'LIKE', '%' . $slug . '%')->get();
        if ($searchGet->count() != 0) {
            foreach ($searchGet as $value) {
                if ($searchGet == '') {
                    $nama = $request->office_nama;
                } else if ($slug == $value->office_slug && $sm == mb_strlen($value->office_slug)) {
                    $nama = $request->office_nama . '-' . $date;
                } else {
                    $nama = $request->office_nama;
                }
            }
        } else {
            $nama = $request->office_nama;
        }

        $kode = MyHelper::auto_kode_office();
        // Create a post
        Office::create([
            'office_uuid' => Str::uuid()->toString(),
            'office_kode' => $kode,
            'office_nama' => $request->office_nama,
            'office_slug' => Str::slug($nama),
            'office_alamat' => $request->office_alamat,
            'office_email' => $request->office_email,
            'office_telepon' => $request->office_telepon,
            'office_hp' => $request->office_hp,
            'office_deskripsi' => $request->office_deskripsi,
            'office_lokasi' => $request->office_lokasi,
            'office_lokasi_url' => $request->office_lokasi_url,
            'office_status' => $request->office_status,
            'office_foto'   => $path
        ]);

        // Redirect back to dashboard
        return back()->with('success', 'Okay.. Data Office telah di tambahakan..');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $uuid)
    {
        $getOffice = Office::where('office_uuid', $uuid)->get();
        $data = [
            'title'     => 'Office',
            'subtitle'  => 'Edit Office',
            'getOffice' => $getOffice
        ];

        return view('user.office.edit', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function details(string $uuid)
    {
        $getOffice = Office::where('office_uuid', $uuid)->get();
        foreach ($getOffice as $x) {
            $kodeOffice = $x->office_kode;
        }
        $getContNumb = Contactnomor::where('cn_office_kode', $kodeOffice)
                                ->orderBy('created_at')
                                ->get();
        $data = [
            'title'     => 'Office',
            'subtitle'  => 'Details Office',
            'uuidOffice' => $uuid,
            'getOffice' => $getOffice,
            'getContNumb' => $getContNumb
        ];

        return view('user.office.detail', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $uuid)
    {
        // Validate
        $request->validate([
            'office_nama'   => ['required', 'max:255'],
            'office_alamat' => ['required'],
            'office_email'  => ['required', 'email'],
            'office_telepon' => ['required'],
            'office_hp' => ['required'],
            'office_deskripsi' => ['required'],
            'office_lokasi'    => ['required'],
            'office_lokasi_url' => ['required'],
            'office_status'    => ['required'],
            'images'     => ['nullable', 'file', 'max:3000', 'mimes:webp,png,jpg,jpeg']
        ]);

        // Store image if exists
        $getArt = Office::where('office_uuid', $uuid)->get();
        foreach ($getArt as $x) {
            $fotoLama = $x->office_foto;
            $judulLama = $x->office_nama;
            $slugLama = $x->office_slug;
        }
        $path = $fotoLama ?? null;
        if ($request->hasFile('images')) {
            if ($fotoLama) {
                Storage::disk('public')->delete($fotoLama);
            }
            $path = Storage::disk('public')->put('office_images', $request->images);
        }

        $slug = Str::slug($request->office_nama);
        if ($slugLama != $slug) {
            $count = Office::whereRaw("office_slug RLIKE '^{$slug}(-[0-9]+)?$'")->count();
            if ($count > 1) {
                if ($judulLama == $request->office_nama) {
                    $office_slug = $slugLama;
                } else {
                    $office_slug = $count ? "{$slug}-{$count}" : $slug;
                }
            } else {
                $office_slug = $slug;
            }
        } else {
            $office_slug = $slug;
        }

        // Update the post
        Office::where('office_uuid', $uuid)->update([
            'office_nama' => $request->office_nama,
            'office_slug'  => $office_slug,
            'office_alamat' => $request->office_alamat,
            'office_email' => $request->office_email,
            'office_telepon' => $request->office_telepon,
            'office_hp' => $request->office_hp,
            'office_deskripsi' => $request->office_deskripsi,
            'office_lokasi' => $request->office_lokasi,
            'office_lokasi_url' => $request->office_lokasi_url,
            'office_status' => $request->office_status,
            'office_foto'  => $path
        ]);

        // Redirect to dashboard
        return redirect()->route('office.index')->with('success', 'Data Office telah di perbaharui..');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $uuid)
    {
        $getArt = Office::where('office_uuid', $uuid)->get();
        foreach ($getArt as $x) {
            $fotoLama = $x->office_foto;
        }

        if ($fotoLama) {
            Storage::disk('public')->delete($fotoLama);
        }

        // Delete the post
        Office::where('office_uuid', $uuid)->delete();

        // Redirect back to dashboard
        return back()->with('delete', 'Data Telah di Hapus dari Database..');
    }

    public function createNomor(string $uuid)
    {
        $getOffice = Office::where('office_uuid', $uuid)->get();
        $data = [
            'title'     => 'Office',
            'subtitle'  => 'Tambah Nomor Office',
            'getOffice' => $getOffice
        ];

        return view('user.office.create-nomor', $data);
    }

    public function storeNomor(Request $request, string $uuid)
    {
        // Validate
        $request->validate([
            'cn_nama'   => ['required', 'max:255'],
            'cn_hp'     => ['required', 'numeric'],
            'images'    => ['nullable', 'file', 'max:3000', 'mimes:webp,png,jpg,jpeg']
        ]);

        // Store image if exists
        $path = null;
        if ($request->hasFile('images')) {
            $path = Storage::disk('public')->put('nomor_images', $request->images);
        }
        // Create a post
        Contactnomor::create([
            'cn_uuid'   => Str::uuid()->toString(),
            'cn_office_kode' => $request->cn_office_kode,
            'cn_nama'   => $request->cn_nama,
            'cn_hp'     => $request->cn_hp,
            'cn_foto'   => $path
        ]);

        // Redirect back to dashboard
        return redirect()->route('office.details', $uuid)->with('success', 'Data Office telah di perbaharui..');
    }

    public function showNomor(string $uuid, string $uuidnomor)
    {
        $getNomor = Contactnomor::where('cn_uuid', $uuidnomor)->get();
        $data = [
            'title'     => 'Office',
            'subtitle'  => 'Edit Nomor Office',
            'getNomor'  => $getNomor,
            'uuidOffice' => $uuid
        ];

        return view('user.office.edit-nomor', $data);
    }

    public function updateNomor(Request $request, string $uuid, string $uuidnomor)
    {
        // Validate
        $request->validate([
            'cn_nama'   => ['required', 'max:255'],
            'cn_hp'     => ['required', 'numeric'],
            'images'    => ['nullable', 'file', 'max:3000', 'mimes:webp,png,jpg,jpeg']
        ]);

        // Store image if exists
        $getArt = Contactnomor::where('cn_uuid', $uuidnomor)->get();
        foreach ($getArt as $x) {
            $fotoLama = $x->cn_foto;
        }
        $path = $fotoLama ?? null;
        if ($request->hasFile('images')) {
            if ($fotoLama) {
                Storage::disk('public')->delete($fotoLama);
            }
            $path = Storage::disk('public')->put('nomor_images', $request->images);
        }
        // Update the post
        Contactnomor::where('cn_uuid', $uuidnomor)->update([
            'cn_nama'   => $request->cn_nama,
            'cn_hp'     => $request->cn_hp,
            'cn_foto'   => $path
        ]);

        // Redirect to dashboard
        return redirect()->route('office.details', $uuid)->with('success', 'Data Office telah di perbaharui..');
    }

    public function destroyNomor(string $uuid, string $uuidnomor)
    {
        $getArt = Contactnomor::where('cn_uuid', $uuidnomor)->get();
        foreach ($getArt as $x) {
            $fotoLama = $x->cn_foto;
        }

        if ($fotoLama) {
            Storage::disk('public')->delete($fotoLama);
        }

        // Delete the post
        Contactnomor::where('cn_uuid', $uuidnomor)->delete();

        // Redirect back to dashboard
        return redirect()->route('office.details', $uuid)->with('success', 'Data Office telah di perbaharui..');
    }
}
