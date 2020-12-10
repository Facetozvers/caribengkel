<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Bengkel;
use App\BengkelSpecialties;

class SearchController extends Controller
{
    public function index(){
        $bengkels = Bengkel::all();
        foreach($bengkels as $bengkel){
            $specialities = DB::table('bengkel_specialties')->where('id_bengkel','=', $bengkel->id)
            ->join('brands', 'brands.id', '=', 'bengkel_specialties.id_brand')
            ->select('brands.nama')
            ->get();
            foreach($specialities as $key => $value){
                $bengkel->{'specialties'. $key} = $value->nama;
            }
        }
        
        return view('search.index', ['bengkels' => $bengkels]);
    }
}
