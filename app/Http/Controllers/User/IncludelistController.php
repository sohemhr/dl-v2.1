<?php

namespace App\Http\Controllers\User;

use App\Helpers\MyHelper;
use App\Models\Includelist;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IncludelistController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $includeList = Includelist::orderBy('created_at', 'DESC')->get();
        $data = [
            'title'     => 'Include List',
            'subtitle'  => 'Data Include List',
            'includeList' => $includeList
        ];

        return view('user.includelist.index', $data); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = [
            'title'     => 'Include List',
            'subtitle'  => 'Tambah Include List'
        ];

        return view('user.includelist.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate
        $request->validate([
            'il_nama'  => ['required', 'max:255', 'unique:include_lists']
        ]);

        $kode = MyHelper::auto_kode_il(); 
        // Create a post
        Includelist::create([
            'il_uuid' => Str::uuid()->toString(),
            'il_id' => $kode,
            'il_nama' => $request->il_nama
        ]);

        // Redirect back to dashboard
        return back()->with('success', 'Okay.. Data Include telah di tambahakan..');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $uuid)
    {
        $includeList = Includelist::where('il_uuid', $uuid)->get();
        $data = [
            'title'     => 'Include List',
            'subtitle'  => 'Edit Include List',
            'includeList'    => $includeList
        ];

        return view('user.includelist.edit', $data);
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
            'il_nama'  => ['required', 'max:255']
        ]); 

        // Update the post
        Includelist::where('il_uuid', $uuid)->update([
            'il_nama' => $request->il_nama
        ]);

        // Redirect to dashboard
        return redirect()->route('includelist.index')->with('success', 'Data Include telah di perbaharui..');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $uuid)
    {
        // Delete the post
        Includelist::where('il_uuid',$uuid)->delete();

        // Redirect back to dashboard
        return back()->with('delete', 'Data Telah di Hapus dari Database..');
    }
}
