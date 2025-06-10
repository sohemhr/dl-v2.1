<?php

namespace App\Http\Controllers\User;

use App\Models\Layanan;
use App\Helpers\MyHelper;
use App\Models\Rolelayinc;
use App\Models\Includelist;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Jenis;
use Illuminate\Support\Facades\Response;

class LayananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $layanan = Layanan::orderBy('created_at', 'DESC')->get();
        $data = [
            'title'     => 'Layanan',
            'subtitle'  => 'Data Layanan',
            'layanan' => $layanan
        ];

        return view('user.layanan.index', $data); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = [
            'title'     => 'Layanan',
            'subtitle'  => 'Tambah Layanan'
        ];

        return view('user.layanan.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate
        $request->validate([
            'layanan_nama'  => ['required', 'max:255', 'unique:layanans'],
            'layanan_desk'  => ['required'],
            'layanan_status' => ['required'],
            'layanan_harga' => ['required', 'regex:/^[0-9\.,]+$/']
        ]);

        $kode = MyHelper::auto_kode_layanan(); 
        // Create a post
        Layanan::create([
            'layanan_uuid' => Str::uuid()->toString(),
            'layanan_kode' => $kode,
            'layanan_nama' => $request->layanan_nama,
            'layanan_slug' => Str::slug($request->layanan_nama),
            'layanan_harga' => str_replace(".", "", $request->layanan_harga),
            'layanan_desk' => $request->layanan_desk,
            'layanan_status' => $request->layanan_status
        ]);

        // Redirect back to dashboard
        return back()->with('success', 'Okay.. Data Layanan telah di tambahakan..');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $uuid)
    {
        $layanan = Layanan::where('layanan_uuid', $uuid)->get();
        $includeList = Includelist::orderBy('created_at', 'DESC')->get();
        foreach ($layanan as $val) {
            $kode = $val->layanan_kode;
        }
        $roleLayInc = DB::table('role_layincs')->where('rli_lay_kode', $kode)
                            ->join('include_lists', 'role_layincs.rli_inc_id', '=', 'include_lists.il_id')
                            ->orderBy('rli_kode', 'ASC')->get();
        $getJnsLay = Jenis::where('jenis_layanan_kode', $kode)
                            ->orderBy('jenis_kode', 'ASC')
                            ->get();
        $data = [
            'title'     => 'Layanan',
            'subtitle'  => 'Detail Layanan',
            'layanan'    => $layanan,
            'includeList' => $includeList,
            'roleLayInc' => $roleLayInc,
            'getJnsLay' => $getJnsLay
        ];

        return view('user.layanan.detail', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $uuid)
    {
        $layanan = Layanan::where('layanan_uuid', $uuid)->get();
        $data = [
            'title'     => 'Layanan',
            'subtitle'  => 'Edit Layanan',
            'layanan'    => $layanan
        ];

        return view('user.layanan.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $uuid)
    {
        // Validate
        $request->validate([
            'layanan_nama'  => ['required', 'max:255'],
            'layanan_desk'  => ['required'],
            'layanan_status' => ['required'],
            'layanan_harga' => ['required', 'regex:/^[0-9\.,]+$/']
        ]); 

        // Update the post
        Layanan::where('layanan_uuid', $uuid)->update([
            'layanan_nama' => $request->layanan_nama,
            'layanan_slug' => Str::slug($request->layanan_nama),
            'layanan_harga' => str_replace(".", "", $request->layanan_harga),
            'layanan_desk' => $request->layanan_desk,
            'layanan_status' => $request->layanan_status
        ]);

        // Redirect to dashboard
        return redirect()->route('layanan.index')->with('success', 'Data Layanan telah di perbaharui..');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $uuid)
    {
        // Delete the role layanan include
        $layanan = Layanan::where('layanan_uuid', $uuid)->get();
        foreach ($layanan as $val) {
            $kode = $val->layanan_kode;
        }
        Rolelayinc::where('rli_lay_kode',$kode)->delete();

        // Delete the post
        Layanan::where('layanan_uuid',$uuid)->delete();

        // Redirect back to dashboard
        return back()->with('delete', 'Data Telah di Hapus dari Database..');
    }

    // layanan include star
    
    public function addRoleLayInc(Request $request)
    {
        $kode_rli = MyHelper::auto_kode_rli();
        $timestamp = Carbon::now(); 
        $newPaket = [
            'rli_kode'     => $kode_rli,
            'rli_lay_kode' => $request->rli_lay_kode, 
            'rli_inc_id'   => $request->rli_inc_id,     
            'created_at'    => $timestamp,
            'updated_at'    => $timestamp
        ];        
        DB::table('role_layincs')->insert($newPaket);
        return response()->json(['success'=>'Data saved successfully.']);
    }

    public function destroyrolelayinc(String $id)
    {
        DB::table('role_layincs')->where('rli_kode', $id)->delete();
        return response()->json([
        'success' => 'Record deleted successfully!'
        ]);
    }

    public function updateRoleLayinc(Request $request)
    {
        // Update the post
        $getKode = $request->rli_kode;
        $post   = Rolelayinc::where('rli_kode', $getKode)->update([
            'rli_inc_id' => $request->rli_inc_id
        ]);
    
        return Response::json($post);
    }

    public function editRoleLayinc(String $id)
    {
        // get edit
        $where = array('rli_kode' => $id);
        $post  = Rolelayinc::where($where)
                                ->join('include_lists', 'role_layincs.rli_inc_id', '=', 'include_lists.il_id')->first();

        return Response::json($post);
    }

    // layanan include end


    // layanan jenis star

    // layanan jenis end

    public function getjenislayanan(Request $request){
        $where = array('jenis_layanan_kode' => $request->id);
        $post  = Jenis::where($where)->first();

        // return Response::json($post);
        return $post;
    }
}
