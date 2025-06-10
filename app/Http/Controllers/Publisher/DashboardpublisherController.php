<?php

namespace App\Http\Controllers\Publisher;

use App\Http\Controllers\Controller;
use App\Models\Artikel;
use App\Models\Promo;
use Illuminate\Http\Request;

class DashboardpublisherController extends Controller
{
    public function index()
    {
        $total_artikel  = Artikel::all();
        $total_artikel_public = Artikel::where('artikel_status', 'Public')->get();
        $total_artikel_private = Artikel::where('artikel_status', 'Private')->get();
        $total_promo    = Promo::all();
        $total_promo_public = Promo::where('promo_status', 'Public')->get();
        $total_promo_private = Promo::where('promo_status', 'Private')->get();
        $data = [
            'title' => 'Dashboard',
            'subtitle' => 'Dashboard Publisher',
            'total_artikel' => $total_artikel,
            'total_artikel_public' => $total_artikel_public,
            'total_artikel_private'=> $total_artikel_private,
            'total_promo' => $total_promo,
            'total_promo_public' => $total_promo_public,
            'total_promo_private' => $total_promo_private
        ];

        return view('publisher.publisher.dashboard', $data);
    }
}
