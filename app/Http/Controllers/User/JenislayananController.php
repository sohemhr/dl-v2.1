<?php

namespace App\Http\Controllers\User;

use App\Models\Jenis;
use App\Models\Layanan;
use App\Helpers\MyHelper;
use App\Models\Rolelayinc;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Rolelayincjns;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Response;

class JenislayananController extends Controller
{
    public function index()
    {
        $layanan = Layanan::orderBy('created_at', 'DESC')->get();
        $data = [
            'title'     => 'Layanan',
            'subtitle'  => 'Data Jenis Layanan',
            'layanan' => $layanan
        ];

        return view('user.layanan-jenis.index', $data); 
    }

    public function create(string $uuid)
    {
        $layanan = Layanan::where('layanan_uuid', $uuid)->get();
        foreach ($layanan as $val) {
            $kode = $val->layanan_kode;
        }
        $getRolLayInc = Rolelayinc::where('rli_lay_kode', $kode)
                                        ->orderBy('rli_kode', 'ASC')
                                        ->get();
        $data = [
            'title'     => 'Layanan',
            'subtitle'  => 'Tambah Jenis Layanan',
            'getLayanan' => $layanan,
            'getRolLayInc' => $getRolLayInc
        ];

        return view('user.layanan-jenis.create', $data);
    }

    public function store(Request $request, string $uuid)
    {
        // Validate
        $request->validate([
            'jenis_nama'  => ['required', 'max:255', 'unique:jenis'],
            'jenis_harga'  => ['required', 'regex:/^[0-9\.,]+$/'],
            'jenis_diskon' => ['required', 'regex:/^[0-9\.,]+$/'],
            'jenis_final'  => ['required', 'regex:/^[0-9\.,]+$/'],
            'jenis_desk'  => ['required'],
            'jenis_status' => ['required']
        ]);

        $kode = MyHelper::auto_kode_jenis(); 
        // Create a post
        Jenis::create([
            'jenis_uuid' => Str::uuid()->toString(),
            'jenis_kode' => $kode,
            'jenis_layanan_kode' => $request->layanan_kode,
            'jenis_nama' => $request->jenis_nama,
            'jenis_slug' => Str::slug($request->jenis_nama),
            'jenis_harga' => str_replace(".", "", $request->jenis_harga),
            'jenis_diskon' => str_replace(".", "", $request->jenis_diskon),
            'jenis_final' => str_replace(".", "", $request->jenis_final),
            'jenis_desk' => $request->jenis_desk,
            'jenis_status' => $request->jenis_status
        ]);

        $rlij = [];
        $rli_id = $request['rli_kode'];  
        $inc_id = $request['inc_id'];
        $rlij_st = $request['rlij_status'];   
        $rlij_noUrut = $request['rlij_no_urut'];        
        if (isset($rli_id[0])) {
            foreach ($rli_id as $key => $value) {
                    $rlij[] = [
                        'rlij_jenis_kode' => $kode,
                        'rlij_rli_kode'   => $value,
                        'rlij_inc_id'   => $inc_id[$key],
                        'rlij_status'   => $rlij_st[$key],
                        'rlij_no_urut' => $rlij_noUrut[$key]
                    ];
            }
        $timestamp = Carbon::now();
        foreach ($rlij as &$record) {
            $record['created_at'] = $timestamp;
            $record['updated_at'] = $timestamp;
        }

        $num = 0;
        $kode_rlij = MyHelper::auto_kode_rlij(); 
        foreach ($rlij as &$x) {
            $num++;
            $x['rlij_kode'] = $kode_rlij+$num;
        }
        DB::table('role_layincjns')->insert($rlij);
        }  

        // Redirect back to dashboard
        return redirect()->route('layanan.show', $uuid)->with('success', 'Data Jenis Layanan telah di tambahkan..');
    }
    
    public function show(string $uuid, string $jnsuuid)
    {
        $layanan = Layanan::where('layanan_uuid', $uuid)->get();
        $jnsLayanan = Jenis::where('jenis_uuid', $jnsuuid)
                                ->join('layanans', 'jenis.jenis_layanan_kode', '=', 'layanans.layanan_kode')
                                ->get();
        foreach ($layanan as $val) {
            $lynKode = $val->layanan_kode;
        }

        foreach ($jnsLayanan as $x) {
            $jnsKode = $x->jenis_kode;
        }
        $getRolLayIncJns = Rolelayincjns::where('rlij_jenis_kode', $jnsKode)
                            ->join('include_lists', 'role_layincjns.rlij_inc_id', '=', 'include_lists.il_id')
                            ->orderBy('rlij_no_urut', 'ASC')
                            ->get();
        $getRolLayInc = Rolelayinc::where('rli_lay_kode', $lynKode)
                            ->join('include_lists', 'role_layincs.rli_inc_id', '=', 'include_lists.il_id')
                            ->orderBy('rli_kode', 'ASC')
                            ->get();
        $data = [
            'title'     => 'Layanan',
            'subtitle'  => 'Detail Layanan',
            'layananuuid' => $uuid,
            'jnslayuuid' => $jnsuuid,
            'getJnsLay' => $jnsLayanan,
            'getRolLayIncJns' => $getRolLayIncJns,
            'getRolLayInc' => $getRolLayInc
        ];

        return view('user.layanan-jenis.edit', $data);
    }

    public function update(Request $request, string $uuid, string $jnsuuid)
    {
        /// Validate
        $request->validate([
            'jenis_nama'  => ['required', 'max:255'],
            'jenis_harga'  => ['required', 'regex:/^[0-9\.,]+$/'],
            'jenis_diskon' => ['required', 'regex:/^[0-9\.,]+$/'],
            'jenis_final'  => ['required', 'regex:/^[0-9\.,]+$/'],
            'jenis_desk'  => ['required'],
            'jenis_status' => ['required']
        ]);

        // Update the post
        Jenis::where('jenis_uuid', $jnsuuid)->update([
            'jenis_nama' => $request->jenis_nama,
            'jenis_slug' => Str::slug($request->jenis_nama),
            'jenis_harga' => str_replace(".", "", $request->jenis_harga),
            'jenis_diskon' => str_replace(".", "", $request->jenis_diskon),
            'jenis_final' => str_replace(".", "", $request->jenis_final),
            'jenis_desk' => $request->jenis_desk,
            'jenis_status' => $request->jenis_status
        ]);

        // Redirect to dashboard
        return redirect()->intended('/admstr/layanan-jenis/show/'.$uuid.'/'.$jnsuuid)->with('success', 'Data Jenis Layanan telah di perbaharui..');
    }

    

    public function editRoleLayincjns($id)
    {
        // get edit
        $where = array('rlij_kode' => $id);
        $post  = Rolelayincjns::where($where)
                                ->join('include_lists', 'role_layincjns.rlij_inc_id', '=', 'include_lists.il_id')->first();

        return Response::json($post);
    }

    public function updateRoleLayincjns(Request $request)
    {
        // Update the post
        $getKode = $request->rlij_kode;
        $post   = Rolelayincjns::where('rlij_kode', $getKode)->update([
            'rlij_inc_id' => $request->rlij_inc_il_id_edit,
            'rlij_status' => $request->rlij_status,
            'rlij_no_urut' => $request->rlij_no_urut
        ]);
    
        return Response::json($post);
    }

    public function addRoleLayIncjns(Request $request)
    {
        $kode_rlij = MyHelper::auto_kode_rlij();
        $timestamp = Carbon::now(); 
        $newPaket = [
            'rlij_kode'     => $kode_rlij,
            'rlij_jenis_kode' => $request->rlij_jenis_kode, 
            'rlij_rli_kode' => $request->rlij_rli_kode,
            'rlij_inc_id'   => $request->rlij_inc_id,
            'rlij_status'   => 'No',
            'rlij_no_urut' => $request->rlij_no_urut,
            'created_at'    => $timestamp,
            'updated_at'    => $timestamp
        ];        
        DB::table('role_layincjns')->insert($newPaket);
        return response()->json(['success'=>'Data saved successfully.']);
    }

    public function destroyrolelayincjns($id)
    {
        DB::table('role_layincjns')->where('rlij_kode', $id)->delete();
        return response()->json([
        'success' => 'Record deleted successfully!'
        ]);
    }

    public function destroyJenis($id)
    {
        DB::table('role_layincjns')->where('rlij_jenis_kode', $id)->delete();


        Jenis::where('jenis_kode',$id)->delete();

        return response()->json([
        'success' => 'Record deleted successfully!'
        ]);
    }
}