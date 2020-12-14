<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Bengkel;
use App\BengkelSpecialties;
use App\BengkelProduct;

class SearchController extends Controller
{
    public function bengkel(){
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
        
        return view('search.bengkel', ['bengkels' => $bengkels]);
    }

    public function sparepart(){

        $products = DB::table('bengkel_products')
                    ->join('sparepart_categories', 'bengkel_products.id_categories', '=', 'sparepart_categories.id')
                    ->join('brands', 'brands.id','=','sparepart_categories.id_brand')
                    ->join('bengkels', 'bengkels.id','bengkel_products.id_bengkel')
                    ->select(DB::raw('brands.nama as nama_brand'), DB::raw('sparepart_categories.nama as nama_kategori'), 'bengkels.nama_bengkel','bengkel_products.*')
                    ->get();
        
        return view('search.sparepart', ['products' => $products]);
    }
}
