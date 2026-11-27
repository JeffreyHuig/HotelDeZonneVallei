<?php

namespace App\Http\Controllers;

use App\Models\HotelKamer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HotelKamerController extends Controller
{
    public function index(HotelKamer $hotelKamers){
        $hotelKamers = HotelKamer::all();
        $kamertypes = DB::table('bezettings')->get();
        return view('hotelkamers', [
            'hotelkamers' => $hotelKamers,
            'kamertypes' => $kamertypes,
        ]);
    }
}
