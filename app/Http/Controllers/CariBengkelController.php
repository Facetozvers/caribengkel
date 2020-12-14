<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Brand;

class CariBengkelController extends Controller
{
    public function mobil(){
        return view('cari-bengkel.mobil.kota');
    }

    public function daerah(){
        $brands = Brand::all();
        return view('cari-bengkel.mobil.brand', ['brands' => $brands]);
    }
}
