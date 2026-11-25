<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $kamertypes = DB::table('bezettings')->get();

        return view('home', [
            'kamertypes' => $kamertypes,
        ]);
    }
}
