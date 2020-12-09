<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CariBengkelController extends Controller
{
    public function mobil(){
        return view('cari-bengkel.mobil.kota');
    }
}
