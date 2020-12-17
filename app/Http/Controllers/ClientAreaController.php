<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserWishlist;
use App\UserBengkelFav;
use App\BengkelProduct;
use Auth;

class ClientAreaController extends Controller
{
    public function wishlist(){
        $wishlist = UserWishlist::where('id_user', Auth::id())->get();
       
        foreach($wishlist as $wish){
            $product = BengkelProduct::where('bengkel_products.id', '=', $wish->id_product)
            ->join('bengkels', 'bengkels.id', 'bengkel_products.id_bengkel')
            ->select('bengkels.nama_bengkel', 'bengkel_products.*')
            ->first();

            $wish->harga = $product->harga;
            $wish->nama_bengkel = $product->nama_bengkel;
            $wish->id_bengkel = $product->id_bengkel;
            $wish->quantity = $product->quantity;
            $wish->nama_product = $product->nama_product;
            $wish->picUrl = $product->picUrl;
        }
        
        return view('client_area.wishlist', ['wishlists' => $wishlist]);
    }

    public function addWishlist($id_product){
        $wishlist = new UserWishlist;
        $wishlist->id_user = Auth::id();
        $wishlist->id_product = $id_product;

        $wishlist->save();

        return redirect()->back();

    }
}
