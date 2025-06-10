<?php

namespace App\Http\Controllers\User;

use App\Helpers\MyHelper;
use App\Models\Listproses;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ListprosesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $listProses = Listproses::orderBy('lp_no_urut', 'ASC')->get();
        $data = [
            'title'     => 'List Proses',
            'subtitle'  => 'Data List Proses',
            'listProses' => $listProses
        ];

        return view('user.list-proses.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = [
            'title'     => 'List Proses',
            'subtitle'  => 'Tambah List Proses'
        ];

        return view('user.list-proses.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate
        $request->validate([
            'lp_nama'  => ['required', 'max:255', 'unique:list_proses'],
            'lp_no_urut' => ['required']
        ]);

        $kode = MyHelper::auto_kode_lp(); 
        // Create a post
        Listproses::create([
            'lp_uuid' => Str::uuid()->toString(),
            'lp_kode' => $kode,
            'lp_nama' => $request->lp_nama,
            'lp_no_urut' => $request->lp_no_urut
        ]);

        // Redirect back to dashboard
        return back()->with('success', 'Okay.. Data List Proses telah di tambahakan..');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $uuid)
    {
        $listProses = Listproses::where('lp_uuid', $uuid)->get();
        $data = [
            'title'     => 'List Proses',
            'subtitle'  => 'Edit List Proses',
            'listProses'    => $listProses
        ];

        return view('user.list-proses.edit', $data);
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
            'lp_nama'  => ['required', 'max:255'],
            'lp_no_urut' => ['required']
        ]); 

        // Update the post
        Listproses::where('lp_uuid', $uuid)->update([
            'lp_nama' => $request->lp_nama,
            'lp_no_urut' => $request->lp_no_urut
        ]);

        // Redirect to dashboard
        return redirect()->route('listproses.index')->with('success', 'Data List Proses telah di perbaharui..');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $uuid)
    {
        // Delete the post
        Listproses::where('lp_uuid',$uuid)->delete();

        // Redirect back to dashboard
        return back()->with('delete', 'Data Telah di Hapus dari Database..');
    }
}
