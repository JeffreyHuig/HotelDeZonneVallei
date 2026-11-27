<?php

namespace App\Http\Controllers;

use App\Models\HotelKamer;
use Illuminate\Support\Facades\DB;

class HotelKamerController extends Controller
{
    public function index()
    {
        $hotelKamers = HotelKamer::all();
        $kamertypes = DB::table('bezettings')->get();
        $beschikbaarheid = HotelKamer::query()
            ->select('bezetting_id')
            ->selectRaw('COUNT(*) as aantal')
            ->where('beschikbaarheid', true)
            ->groupBy('bezetting_id')
            ->pluck('aantal', 'bezetting_id');

        return view('hotelkamers', [
            'hotelkamers' => $hotelKamers,
            'kamertypes' => $kamertypes,
            'beschikbaarheid' => $beschikbaarheid,
        ]);
    }
}
