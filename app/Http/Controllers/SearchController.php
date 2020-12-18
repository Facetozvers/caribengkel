<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Bengkel;
use App\BengkelSpecialties;
use App\BengkelProduct;

class SearchController extends Controller
{
    public function bengkel(Request $request){
        
        $bengkels = Bengkel::where('nama_bengkel','like', '%' . $request->cari . '%')
        ->orWhere('kota','like', '%' . $request->cari . '%')
        ->orWhere('alamat','like', '%' . $request->cari . '%')
        ->orWhere('daerah','like', '%' . $request->cari . '%')
        ->get();
        foreach($bengkels as $bengkel){
            $specialities = DB::table('bengkel_specialties')->where('id_bengkel','=', $bengkel->id)
            ->join('brands', 'brands.id', '=', 'bengkel_specialties.id_brand')
            ->select('brands.nama')
            ->get();
            foreach($specialities as $key => $value){
                $bengkel->{'specialties'. $key} = $value->nama;
            }
        }

        $products = DB::table('bengkel_products')
                    ->join('sparepart_categories', 'bengkel_products.id_categories', '=', 'sparepart_categories.id')
                    ->join('brands', 'brands.id','=','sparepart_categories.id_brand')
                    ->join('bengkels', 'bengkels.id','bengkel_products.id_bengkel')
                    ->where('nama_product','like', '%' . $request->cari . '%')
                    ->select(DB::raw('brands.nama as nama_brand'), DB::raw('sparepart_categories.nama as nama_kategori'), 'bengkels.nama_bengkel','bengkel_products.*')
                    ->get();
        
        
        return view('search.bengkel', ['bengkels' => $bengkels, 'products' => $products]);
    }

    public function sparepart(Request $request){

        $products = DB::table('bengkel_products')
                    ->join('sparepart_categories', 'bengkel_products.id_categories', '=', 'sparepart_categories.id')
                    ->join('brands', 'brands.id','=','sparepart_categories.id_brand')
                    ->join('bengkels', 'bengkels.id','bengkel_products.id_bengkel')
                    ->where('nama_product','like', '%' . $request->cari . '%')
                    ->orWhere('brands.nama','like', '%' . $request->cari . '%')
                    ->orWhere('sparepart_categories.nama','like', '%' . $request->cari . '%')
                    ->orWhere('bengkels.nama_bengkel','like', '%' . $request->cari . '%')
                    ->select(DB::raw('brands.nama as nama_brand'), DB::raw('sparepart_categories.nama as nama_kategori'), 'bengkels.nama_bengkel','bengkel_products.*')
                    ->get();
        
        return view('search.sparepart', ['products' => $products]);
    }
}
