@extends('layouts.main')
@section('title', 'Wishlist | caribengkel.id')
@section('content')
    <section class="section bg-light" style="padding-top:40px">
        <div class="container">
            <div class="row">
                <ul class="nav nav-tabs" style="width:100%">
                    <li class="nav-item">
                        <a class="nav-link active" href="/wishlist" style="font-size:20px">Wishlist</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/bengkel-favorit" style="font-size:20px">Bengkel Favorit</a>
                    </li>
                </ul>
            </div>
            <div class="row mt-5">
                @foreach($wishlists as $wish)
                <div class="col-md-3">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top bengkel-img" src="{{$wish->picUrl}}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">{{$wish->nama_product}}</h5>
                            <p class="card-title">{{$wish->nama_bengkel}}</p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item" style="border-top:solid rgba(0,0,0,.125) 1px">Harga : Rp. {{ number_format($wish->harga,0,',','.')}}</li>
                            <li class="list-group-item">Stock : x{{$wish->quantity}}</li>
                            <a href="/bengkel/{{$wish->id_bengkel}}"><li class="list-group-item" style="text-align:center;background:#cdeaf2">Kunjungi Bengkel</li></a>
                        </ul>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection