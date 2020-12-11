@extends('layouts.main')
@section('title', 'Bengkel')
@section('content')

<!--===================================
=            Store Section            =
====================================-->
<section class="section bg-gray" style="padding-top:20px">
	<!-- Container Start -->
	<div class="container pb-5">
		<div class="product-details">
			<h1 class="product-title">{{$bengkel->nama_bengkel}}</h1>
			<div class="product-meta">
				<ul class="list-inline">
					<li class="list-inline-item"><i class="fa fa-user-o"></i> By <a href="">{{$bengkel->id_pemilik}}</a></li>
					<li class="list-inline-item"><i class="fa fa-location-arrow"></i> <a href="">{{$bengkel->daerah}}, {{$bengkel->kota}}</a></li>
				</ul>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div id="carouselExampleIndicators" class="product-slider carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
						<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
						<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
					</ol>
					<div class="carousel-inner" style="background: #8c8c8c; box-shadow:1px 1px 10px #808080;">
						<div class="carousel-item active">
							<img class="d-block carousel-bengkel-img" src="http://www.reachautoerp.sg/wp-content/uploads/2019/04/car-workshop.jpg" alt="First slide">
						</div>
						<div class="carousel-item">
							<img class="d-block carousel-bengkel-img" src="https://images.allaboutwhitianga.co.nz/thumbnail/1500x500s/52/79/93/charlies-workshop-85-1499398020.jpg" alt="Second slide">
						</div>
						<div class="carousel-item">
							<img class="d-block carousel-bengkel-img" src="https://op-jacaranda.s3.amazonaws.com/uploads/listing/images/3694/1st_Automobile_Services.jpg" alt="Third slide">
						</div>
					</div>
					<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="product-details">
					<div class="content">
						<ul class="nav nav-pills " id="pills-tab" role="tablist">
							<li class="nav-item">
								<a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Overview</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="pills-sparepart-tab" data-toggle="pill" href="#pills-sparepart" role="tab" aria-controls="pills-sparepart" aria-selected="false">Sparepart</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Reviews</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<!-- Left sidebar -->
			<div class="col-md-8">
				<div class="product-details">
					<div class="content" style="padding:0">
						<div class="tab-content" id="pills-tabContent">
							<div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
								<h3 class="tab-title">Detail</h3>
								<p class="mb-2" style="font-size:17px">Melayani Service :</p>
								<div class="row mb-3">
									<div class="col-md-3">
										<span style="font-size: 23px"><i class="fas fa-car"></i> Mobil</span>
									</div>
									<div class="col-md-3">
										<span style="font-size: 23px"><i class="fas fa-motorcycle"></i> Motor</span>
									</div>
								</div>
								<p style="font-size:17px">Support :</p>
								<p class="mb-5" style="font-size: 23px; color:black">
									@for($i = 0;$i < 15 && $bengkel->{'specialties'.$i} != NULL; $i++)
										{{ $bengkel->{'specialties'.$i} }}, 
									@endfor
								</p>

								<h3 class="tab-title">Lokasi</h3>
								<p class="mb-3" style="font-size:17px">Alamat :</p>
								<p style="font-size: 20px; color:black" class="mb-2">{{$bengkel->alamat}}</p>
								<p class="mb-5" style="font-size: 20px; color:black">{{$bengkel->daerah}}, {{$bengkel->kota}}</p>

								<h3 class="tab-title">Produk</h3>
								<div class="row">
								<?php $count = 0; ?>
								@foreach($products->take(3) as $product)
									<div class="col-md-12">
										<div class="card mb-4">
											<div class="row no-gutters">
												<div class="col-md-3">
													<img src="https://teknisimobil.com/wp-content/uploads/2019/07/Komponen-chasis-mobil.jpg" class="img-fluid mx-auto d-block" alt="">
												</div>
												<div class="col-md-8" style="border-left: 1px solid #aaaaaa">
													<div class="card-block pl-3 pt-3">
														<h4 class="card-title">{{$product->nama_product}}</h4>
														<h5 class="card-text" style="font-size:17px">Rp. {{ number_format($product->harga,0,',','.')}}</h5>
														<div class="row mb-2">
															<div class="col-md-4 col-6">
																<p class="card-text mb-0" style="color:black">Kategori : </p>
																<p class="card-text">{{$product->nama_kategori}}</p>
																<p class="card-text mb-0" style="color:black">Stock : </p>
																<p class="card-text">x{{$product->quantity}}</p>
															</div>
															<div class="col-md-4 col-6">
																<p class="card-text mb-0" style="color:black">Brand : </p>
																<p class="card-text ">{{$product->nama_brand}}</p>
															</div>
														</div>
														
													</div>
												</div>
											</div>
										</div>
									</div>
								@endforeach
								</div>
								<div class=row>
									<a class="nav-link" id="pills-sparepart-tab" data-toggle="pill" href="#pills-sparepart" role="tab" aria-controls="pills-sparepart" aria-selected="false">Lihat Semua</a>
								</div>
							</div>
							<div class="tab-pane fade" id="pills-sparepart" role="tabpanel" aria-labelledby="pills-sparepart-tab">
								<h3 class="tab-title">Produk Sparepart</h3>
								<div class="row">
								@foreach($products as $product)
									<div class="col-md-12">
										<div class="card mb-4">
											<div class="row no-gutters">
												<div class="col-md-3">
													<img src="https://teknisimobil.com/wp-content/uploads/2019/07/Komponen-chasis-mobil.jpg" class="img-fluid mx-auto d-block" alt="">
												</div>
												<div class="col-md-8" style="border-left: 1px solid #aaaaaa">
													<div class="card-block pl-3 pt-3">
														<h4 class="card-title">{{$product->nama_product}}</h4>
														<h5 class="card-text" style="font-size:17px">Rp. {{ number_format($product->harga,0,',','.')}}</h5>
														<div class="row mb-2">
															<div class="col-md-4 col-6">
																<p class="card-text mb-0" style="color:black">Kategori : </p>
																<p class="card-text">{{$product->nama_kategori}}</p>
																<p class="card-text mb-0" style="color:black">Stock : </p>
																<p class="card-text">x{{$product->quantity}}</p>
															</div>
															<div class="col-md-4 col-6">
																<p class="card-text mb-0" style="color:black">Brand : </p>
																<p class="card-text ">{{$product->nama_brand}}</p>
															</div>
														</div>
														
													</div>
												</div>
											</div>
										</div>
									</div>
								@endforeach
								</div>
							</div>
							<div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
								<h3 class="tab-title">Product Review</h3>
								<div class="product-review">
							  		<div class="media">
							  			<!-- Avater -->
							  			<img src="/main/images/user/user-thumb.jpg" alt="avater">
							  			<div class="media-body">
							  				<!-- Ratings -->
							  				<div class="ratings">
							  					<ul class="list-inline">
							  						<li class="list-inline-item">
							  							<i class="fa fa-star"></i>
							  						</li>
							  						<li class="list-inline-item">
							  							<i class="fa fa-star"></i>
							  						</li>
							  						<li class="list-inline-item">
							  							<i class="fa fa-star"></i>
							  						</li>
							  						<li class="list-inline-item">
							  							<i class="fa fa-star"></i>
							  						</li>
							  						<li class="list-inline-item">
							  							<i class="fa fa-star"></i>
							  						</li>
							  					</ul>
							  				</div>
							  				<div class="name">
							  					<h5>Jessica Brown</h5>
							  				</div>
							  				<div class="date">
							  					<p>Mar 20, 2018</p>
							  				</div>
							  				<div class="review-comment">
							  					<p>
							  						Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremqe laudant tota rem ape riamipsa eaque.
							  					</p>
							  				</div>
							  			</div>
							  		</div>
							  		<div class="review-submission">
							  			<h3 class="tab-title">Submit your review</h3>
						  				<!-- Rate -->
						  				<div class="rate">
						  					<div class="starrr"></div>
						  				</div>
						  				<div class="review-submit">
						  					<form action="#" class="row">
						  						<div class="col-lg-6">
						  							<input type="text" name="name" id="name" class="form-control" placeholder="Name">
						  						</div>
						  						<div class="col-lg-6">
						  							<input type="email" name="email" id="email" class="form-control" placeholder="Email">
						  						</div>
						  						<div class="col-12">
						  							<textarea name="review" id="review" rows="10" class="form-control" placeholder="Message"></textarea>
						  						</div>
						  						<div class="col-12">
						  							<button type="submit" class="btn btn-main">Sumbit</button>
						  						</div>
						  					</form>
						  				</div>
							  		</div>
							  	</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="sidebar">
					<!-- User Profile widget -->
					<div class="widget user">
						<h4><a href="">Jonathon Andrew</a></h4>
						<p class="member-time">Member Since Jun 27, 2017</p>
						<a href="">See all ads</a>
						<ul class="list-inline mt-20">
							<li class="list-inline-item"><a href="" class="btn btn-contact">Contact</a></li>
							<li class="list-inline-item"><a href="" class="btn btn-offer">Make an offer</a></li>
						</ul>
					</div>
					<!-- Map Widget -->
					<div class="widget map">
						<div class="map">
							<div id="map"></div>
						</div>
					</div>
					<!-- Rate Widget -->
					<div class="widget rate">
						<!-- Heading -->
						<h5 class="widget-header text-center">What would you rate
						<br>
						this product</h5>
						<!-- Rate -->
						<div class="starrr"></div>
					</div>
					<!-- Safety tips widget -->
					<div class="widget disclaimer">
						<h5 class="widget-header">Safety Tips</h5>
						<ul>
							<li>Meet seller at a public place</li>
							<li>Check the item before you buy</li>
							<li>Pay only after collecting the item</li>
							<li>Pay only after collecting the item</li>
						</ul>
					</div>
					<!-- Coupon Widget -->
					<div class="widget coupon text-center">
						<!-- Coupon description -->
						<p>Have a great product to post ? Share it with
							your fellow users.
						</p>
						<!-- Submii button -->
						<a href="" class="btn btn-transparent-white">Submit Listing</a>
					</div>
					
				</div>
			</div>
			
		</div>
	</div>
	<!-- Container End -->
</section>
@endsection