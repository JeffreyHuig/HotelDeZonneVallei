<?php

namespace App\Http\Controllers;

use App\Models\HotelKamer;
use Illuminate\Http\Request;

class HotelKamerController extends Controller
{
    public function index(HotelKamer $hotelKamers){
        $hotelKamers = HotelKamer::all();
        return view('hotelkamers', [
            'hotelkamers' => $hotelKamers
        ]);
    }
}
