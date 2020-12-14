@extends('layouts.wsearch')
@section('title', 'Search | caribengkel.id')
@section('content')

<section class="section-sm">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="search-result bg-gray">
					<h2>Hasil untuk "Bengkel"</h2>
					<p>123 Hasil
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-3">
				<div class="category-sidebar">
					<div class="widget category-list">
                        <h4 class="widget-header">Kendaraan</h4>
                        <ul class="category-list">
                            <li><a href="category.html">Mobil <span>93</span></a></li>
                            <li><a href="category.html">Motor <span>233</span></a></li>
                        </ul>
                    </div>

                    <div class="widget category-list">
                        <h4 class="widget-header">Lokasi</h4>
                        <ul class="category-list">
                            <li><a href="category.html">Jakarta Pusat <span>93</span></a></li>
                            <li><a href="category.html">Jakarta Barat <span>233</span></a></li>
                            <li><a href="category.html">Jakarta Utara <span>183</span></a></li>
                            <li><a href="category.html">Jakarta Selatan <span>120</span></a></li>
                            <li><a href="category.html">Jakarta Timur <span>40</span></a></li>
                        </ul>
                    </div>

                    <div class="widget category-list">
                        <h4 class="widget-header">Supported Brand</h4>
                        <ul class="category-list">
                            <li><a href="category.html">Honda <span>93</span></a></li>
                            <li><a href="category.html">Yamaha <span>233</span></a></li>
                            <li><a href="category.html">Suzuki <span>183</span></a></li>
                            <li><a href="category.html">BMW <span>120</span></a></li>
                            <li><a href="category.html">Toyota <span>40</span></a></li>
                        </ul>
                    </div>
				</div>
			</div>
			<div class="col-md-9">
				<div class="category-search-filter">
					<div class="row">
						<div class="col-md-6">
							<h4><strong>Sort</strong></h4>
							<select class="custom-select">
								<option>Terbaru</option>
								<option value="2">Harga Terendah</option>
								<option value="4">Harga Tertinggi</option>
							</select>
						</div>
                    </div>
                </div>
				<div class="category-search-filter" style="background:white">
					<div class="row">
                        <ul class="nav nav-tabs">
                            <li class="nav-item">
                                <a class="nav-link active">Bengkel</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/search/sparepart">Sparepart</a>
                            </li>
                        </ul>
                    </div>
                </div>
				<div class="product-grid-list">
					<div class="row mt-30">
                        @foreach($bengkels as $bengkel)
						<div class="col-sm-12 col-lg-4 col-md-6">
                        <a href="/bengkel/{{$bengkel->id}}">
							<!-- product card -->
                            <div class="product-item bg-light">
                                <div class="card">
                                    <div class="thumb-content">
                                        
                                            <img class="card-img-top img-fluid product-img-small" src="https://cdn-2.tstatic.net/tribunnews/foto/bank/images/bengkel-terbesar-yamaha.jpg" alt="Card image cap">
                                       
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title">{{$bengkel->nama_bengkel}}</h4>
                                        <p class="card-text mb-2"><i class="fas fa-map-marker-alt mr-1"></i>{{$bengkel->daerah}}, {{$bengkel->kota}}</p>
                                        <ul class="list-inline product-meta">
                                            <p class="mb-0">Melayani :</p>
                                            @if($bengkel->mobil == 1)
                                            <li class="list-inline-item">
                                                <i class="fas fa-car"></i>Mobil
                                            </li>
                                            @endif
                                            @if($bengkel->motor == 1)
                                            <li class="list-inline-item">
                                                <i class="fas fa-motorcycle"></i>Motor
                                            </li>
                                            @endif
                                        </ul>
                                        <ul class="list-inline product-meta">
                                            <p class="mb-0">Support :</p>
                                            <p class="mb-0">
                                                @for($i = 0;$i < 3 && $bengkel->{'specialties'.$i} != NULL; $i++)
                                                    {{ $bengkel->{'specialties'.$i} }}, 
                                                @endfor
                                                @isset($bengkel->specialties3)
                                                    and more
                                                @endisset
                                            </p>
                                        </ul>
                                        <div class="product-ratings">
                                            <ul class="list-inline">
                                                <li class="list-inline-item selected"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item selected"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item selected"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item selected"><i class="fa fa-star"></i></li>
                                                <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        </div>
                        @endforeach
                    </div>
                </div>
				<div class="pagination justify-content-center">
					<nav aria-label="Page navigation example">
						<ul class="pagination">
							<li class="page-item">
								<a class="page-link" href="#" aria-label="Previous">
									<span aria-hidden="true">&laquo;</span>
									<span class="sr-only">Previous</span>
								</a>
							</li>
							<li class="page-item active"><a class="page-link" href="#">1</a></li>
							<li class="page-item"><a class="page-link" href="#">2</a></li>
							<li class="page-item"><a class="page-link" href="#">3</a></li>
							<li class="page-item">
								<a class="page-link" href="#" aria-label="Next">
									<span aria-hidden="true">&raquo;</span>
									<span class="sr-only">Next</span>
								</a>
							</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection