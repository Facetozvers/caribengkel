@extends('layouts.main')
@section('title', 'caribengkel.id | Portal Bengkel Otomotif se-Indonesia!')
@section('content')

<!--===============================
=            Hero Area            =
================================-->

<section class="hero-area bg-1 text-center overly hero-search">
	<!-- Container Start -->
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<!-- Header Contetnt -->
				<div class="content-block">
					<h1>PORTAL BENGKEL OTOMOTIF<br>SE-JAKARTA!</h1>
					<p>Temukan bengkel terbaik untuk mobil dan motor kamu hanya di caribengkel.id</p>
					<!-- search bar -->
					<form action="/search/bengkel">
						<div class="input-group md-form form-sm form-2 pl-0 pb-2" style="width:60%;margin:auto">
							<input class="form-control my-0 py-1 lime-border" style="background:white" name="cari" type="text" placeholder="Cari bengkel, sparepart.." aria-label="Search">
							<div class="input-group-append">
								<button type="submit" class="input-group-text lime lighten-2" id="basic-text1"><i class="fas fa-search text-grey" aria-hidden="true"></i></button>
							</div>
						</div>
					</form>
					
				</div>
				
			</div>
		</div>
	</div>
	<div class="container">
	
	</div>
	<!-- Container End -->
</section>

<!--===================================
=            Client Slider            =
====================================-->


<!--===========================================
=            Popular deals section            =
============================================-->

<section class="popular-deals section" style="padding-top:50px">
	<div class="container">
		<div class="section-title">
			<h2>Cari Bengkel</h2>
		</div>
		<div class="row justify-content-center">
			<div class="col-md-4">
				<a href="/cari-bengkel/mobil">
				<div class="card category-otomotif zoom" style="background:#26abff">
					<img class="card-img-top" src="/fontawesome/svgs/solid/car.svg" alt="Card image cap" style="width:250px;height:250px;margin:auto">
					<div class="card-body">
						<h5 class="card-title" style="text-align:center;color:white">Mobil</h5>
					</div>
				</div>
				</a>
			</div>
			<div class="col-md-4">
				<div class="card category-otomotif zoom" style="background:#26abff">
					<img class="card-img-top" src="/fontawesome/svgs/solid/motorcycle.svg" alt="Card image cap" style="width:250px;height:250px;margin:auto">
					<div class="card-body">
						<h5 class="card-title" style="text-align:center;color:white">Motor</h5>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container pt-5">
		<div class="row">
			<div class="col-md-12">
				<div class="section-title">
					<h2>Rekomendasi</h2>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
				<div class="carousel-inner pl-1 pr-1">
					<div class="carousel-item active">
						<div class="row">
							<div class="col-sm-4 col-4 col-lg-4">
								<!-- product card -->
								<div class="product-item bg-light">
									<a href="/bengkel">
									<div class="card category-otomotif">
										<div class="thumb-content">
											<!-- <div class="price">$200</div> -->
											<img class="card-img-top img-fluid bengkel-img" src="https://cdn-2.tstatic.net/tribunnews/foto/bank/images/bengkel-terbesar-yamaha.jpg" alt="Bengkel Bos">
										</div>
										<div class="card-body">
											<h4 class="card-title">Bengkel BOS</h4>
											<p class="card-text mb-2"><i class="fas fa-map-marker-alt mr-1"></i>Kebon Jeruk, Jakarta Barat</p>
											<ul class="list-inline product-meta">
												<p class="mb-0">Melayani :</p>
												<li class="list-inline-item">
													<a href=""><i class="fas fa-car"></i>Mobil</a>
												</li>
												<li class="list-inline-item">
													<a href=""><i class="fas fa-motorcycle"></i>Motor</a>
												</li>
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
									</a>
								</div>
							</div>
							<div class="col-sm-4 col-4 col-lg-4">
								<!-- product card -->
								<div class="product-item bg-light">
									<div class="card category-otomotif">
										<div class="thumb-content">
											<!-- <div class="price">$200</div> -->
											<a href="">
												<img class="card-img-top img-fluid bengkel-img" src="https://vivaautorepairs.com.au/wp-content/uploads/2018/11/Car-workshop-near-me.jpg" alt="Card image cap">
											</a>
										</div>
										<div class="card-body">
											<h4 class="card-title"><a href="">Bengkel Amanah Jaya</a></h4>
											<p class="card-text mb-2"><i class="fas fa-map-marker-alt mr-1"></i>Kebon Jeruk, Jakarta Barat</p>
											<ul class="list-inline product-meta">
											<p class="mb-0">Melayani :</p>
												<li class="list-inline-item">
													<a href=""><i class="fas fa-car"></i>Mobil</a>
												</li>
												<li class="list-inline-item">
													<a href=""><i class="fas fa-motorcycle"></i>Motor</a>
												</li>
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
							</div>
							<div class="col-sm-4 col-4 col-lg-4">
								<!-- product card -->
								<div class="product-item bg-light">
									<div class="card category-otomotif">
										<div class="thumb-content">
											<!-- <div class="price">$200</div> -->
											<a href="">
												<img class="card-img-top img-fluid bengkel-img" src="https://moto-champ.net/wp-content/uploads/2018/10/800px_COLOURBOX4906548-750x430.jpg" alt="Card image cap">
											</a>
										</div>
										<div class="card-body">
											<h4 class="card-title"><a href="">Bengkel Aryo</a></h4>
											<p class="card-text mb-2"><i class="fas fa-map-marker-alt mr-1"></i>Kebon Jeruk, Jakarta Barat</p>
											<ul class="list-inline product-meta">
											<p class="mb-0">Melayani :</p>
												<li class="list-inline-item">
													<a href=""><i class="fas fa-car"></i>Mobil</a>
												</li>
												<li class="list-inline-item">
													<a href=""><i class="fas fa-motorcycle"></i>Motor</a>
												</li>
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
							</div>	
						</div>
					</div>
					<div class="carousel-item">
						<div class="row">
							<div class="col-sm-4 col-4 col-lg-4">
								<!-- product card -->
								<div class="product-item bg-light">
									<div class="card category-otomotif">
										<div class="thumb-content">
											<!-- <div class="price">$200</div> -->
											<a href="">
												<img class="card-img-top img-fluid bengkel-img" src="https://us.123rf.com/450wm/rh2010/rh20101812/rh2010181200647/114132649-auto-mechanic-in-red-uniform-servicing-sports-car-checking-front-brakes-in-the-car-service.jpg?ver=6" alt="Card image cap">
											</a>
										</div>
										<div class="card-body">
											<h4 class="card-title"><a href="">Bengkel Motor Joni</a></h4>
											<p class="card-text mb-2"><i class="fas fa-map-marker-alt mr-1"></i>Kebon Jeruk, Jakarta Barat</p>
											<ul class="list-inline product-meta">
											<p class="mb-0">Melayani :</p>
												<li class="list-inline-item">
													<a href=""><i class="fas fa-car"></i>Mobil</a>
												</li>
												<li class="list-inline-item">
													<a href=""><i class="fas fa-motorcycle"></i>Motor</a>
												</li>
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
							</div>
							<div class="col-sm-4 col-4 col-lg-4">
								<!-- product card -->
								<div class="product-item bg-light">
									<div class="card category-otomotif">
										<div class="thumb-content">
											<!-- <div class="price">$200</div> -->
											<a href="">
												<img class="card-img-top img-fluid bengkel-img" src="https://miro.medium.com/max/1140/0*N0CTJji2zmNtlfXo.png" alt="Card image cap">
											</a>
										</div>
										<div class="card-body">
											<h4 class="card-title"><a href="">AHASS Motor Kelapa Gading</a></h4>
											<p class="card-text mb-2"><i class="fas fa-map-marker-alt mr-1"></i>Kebon Jeruk, Jakarta Barat</p>
											<ul class="list-inline product-meta">
											<p class="mb-0">Melayani :</p>
												<li class="list-inline-item">
													<a href=""><i class="fas fa-motorcycle"></i>Motor</a>
												</li>
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
							</div>
							<div class="col-sm-4 col-4 col-lg-4">
								<!-- product card -->
								<div class="product-item bg-light">
									<div class="card category-otomotif">
										<div class="thumb-content">
											<!-- <div class="price">$200</div> -->
											<a href="">
												<img class="card-img-top img-fluid bengkel-img" src="https://op-jacaranda.s3.amazonaws.com/uploads/listing/images/3694/1st_Automobile_Services.jpg" alt="Card image cap">
											</a>
										</div>
										<div class="card-body">
											<h4 class="card-title"><a href="">BMW Workshop Pondok Indah</a></h4>
											<p class="card-text mb-2"><i class="fas fa-map-marker-alt mr-1"></i>Kebon Jeruk, Jakarta Barat</p>
											<ul class="list-inline product-meta">
												<p class="mb-0">Melayani :</p>
												<li class="list-inline-item">
													<a href=""><i class="fas fa-car"></i>Mobil</a>
												</li>
												<li class="list-inline-item">
													<a href=""><i class="fas fa-motorcycle"></i>Motor</a>
												</li>
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
							</div>	
						</div>
					</div>
					<div class="carousel-item">
						<div class="row">
							<div class="col-sm-4 col-4 col-lg-4">
								<!-- product card -->
								<div class="product-item bg-light">
									<div class="card category-otomotif">
										<div class="thumb-content">
											<!-- <div class="price">$200</div> -->
											<a href="">
												<img class="card-img-top img-fluid bengkel-img" src="https://images.allaboutwhitianga.co.nz/thumbnail/1500x500s/52/79/93/charlies-workshop-85-1499398020.jpg" alt="Card image cap">
											</a>
										</div>
										<div class="card-body">
											<h4 class="card-title"><a href="">Bengkel Jaya Abadi</a></h4>
											<p class="card-text mb-2"><i class="fas fa-map-marker-alt mr-1"></i>Kebon Jeruk, Jakarta Barat</p>
											<ul class="list-inline product-meta">
												<p class="mb-0">Melayani :</p>
												<li class="list-inline-item">
													<a href=""><i class="fas fa-car"></i>Mobil</a>
												</li>
												<li class="list-inline-item">
													<a href=""><i class="fas fa-motorcycle"></i>Motor</a>
												</li>
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
							</div>
							<div class="col-sm-4 col-4 col-lg-4">
								<!-- product card -->
								<div class="product-item bg-light">
									<div class="card category-otomotif">
										<div class="thumb-content">
											<!-- <div class="price">$200</div> -->
											<a href="">
												<img class="card-img-top img-fluid bengkel-img" src="http://www.reachautoerp.sg/wp-content/uploads/2019/04/car-workshop.jpg" alt="Card image cap">
											</a>
										</div>
										<div class="card-body">
											<h4 class="card-title"><a href="">Honda Kalimalang</a></h4>
											<p class="card-text mb-2"><i class="fas fa-map-marker-alt mr-1"></i>Kebon Jeruk, Jakarta Barat</p>
											<ul class="list-inline product-meta">
											<p class="mb-0">Melayani :</p>
												<li class="list-inline-item">
													<a href=""><i class="fas fa-car"></i>Mobil</a>
												</li>
												<li class="list-inline-item">
													<a href=""><i class="fas fa-motorcycle"></i>Motor</a>
												</li>
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
							</div>
							<div class="col-sm-4 col-4 col-lg-4">
								<!-- product card -->
								<div class="product-item bg-light">
									<div class="card category-otomotif">
										<div class="thumb-content">
											<!-- <div class="price">$200</div> -->
											<a href="">
												<img class="card-img-top img-fluid bengkel-img" src="https://moto-champ.net/wp-content/uploads/2018/10/800px_COLOURBOX4906548-750x430.jpg" alt="Card image cap">
											</a>
										</div>
										<div class="card-body">
											<h4 class="card-title"><a href="">Bengkel Roni Pondok Gede</a></h4>
											<p class="card-text mb-2"><i class="fas fa-map-marker-alt mr-1"></i>Kebon Jeruk, Jakarta Barat</p>
											<ul class="list-inline product-meta">
												<p class="mb-0">Melayani :</p>
												<li class="list-inline-item">
													<a href=""><i class="fas fa-car"></i>Mobil</a>
												</li>
												<li class="list-inline-item">
													<a href=""><i class="fas fa-motorcycle"></i>Motor</a>
												</li>
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
							</div>	
						</div>
					</div>
				</div>
				<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
				</div>
			</div>
		</div>
	</div>
</section>



<!--==========================================
=            Brands Section            =
===========================================-->

<section class="section bg-light">
	<!-- Container Start -->
	<div class="container">
		<div class="row">
			<div class="col-12">
				<!-- Section title -->
				<div class="section-title">
					<h2>Sparepart</h2>
					<p>Temukan sparepart untuk berbagai macam brand!</p>
				</div>
				<div class="row">
					<!-- brand -->
					<div class="col-md-4">
						<div class="card card-brand zoom">
							<img class="card-img-top brand-img" src="/brand-img/001-kia.png" alt="Card image cap">
							<h1 class="m-0 mb-1" style="text-align:center">KIA</h1>
						</div>					
					</div>
					<div class="col-md-4">
						<div class="card card-brand zoom">
							<img class="card-img-top brand-img" src="/brand-img/068-lexus.png" alt="Card image cap">
							<h1 class="m-0 mb-1" style="text-align:center">Lexus</h1>
						</div>					
					</div>
					<div class="col-md-4">
						<div class="card card-brand zoom">
							<img class="card-img-top brand-img" src="/brand-img/029-yamaha.png" alt="Card image cap">
							<h1 class="m-0 mb-1" style="text-align:center">Yamaha</h1>
						</div>					
					</div>
					<div class="col-md-4">
						<div class="card card-brand zoom">
							<img class="card-img-top brand-img" src="/brand-img/060-suzuki.png" alt="Card image cap">
							<h1 class="m-0 mb-1" style="text-align:center">Suzuki</h1>
						</div>					
					</div>
					<div class="col-md-4">
						<div class="card card-brand zoom">
							<img class="card-img-top brand-img" src="/brand-img/069-honda.png" alt="Card image cap">
							<h1 class="m-0 mb-1" style="text-align:center">Honda</h1>
						</div>					
					</div>
					<div class="col-md-4">
						<div class="card card-brand zoom">
							<img class="card-img-top brand-img" src="/brand-img/077-mitsubishi.png" alt="Card image cap">
							<h1 class="m-0 mb-1" style="text-align:center">Mitsubishi</h1>
						</div>					
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Container End -->
</section>

@endsection

  



