<?php

namespace App\Http\Controllers\Ops;

use App\Models\Checking;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CheckingopsController extends Controller
{
    public function index()
    {
        $checkingGet = Checking::orderBy('created_at', 'DESC')->get();
        $data = [
            'title'     => 'Checking List',
            'subtitle'  => 'Data Checking List',
            'checkingGet' => $checkingGet
        ];

        return view('ops.checking.index', $data);
    }

    public function show(string $uuid)
    {
        Checking::where('chk_uuid', $uuid)->update(['chk_status'    => '0']);
        $checkingGet = Checking::where('chk_uuid', $uuid)->get();
        $data = [
            'title'     => 'Checking List',
            'subtitle'  => 'Detail Checking List',
            'checkingGet'    => $checkingGet
        ];

        return view('ops.checking.edit', $data);
    }

    public function chats(Request $request)
    {
        return redirect('https://wa.me/' . $request->chk_hp_chats);
    }
}
