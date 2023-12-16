@extends('frontend.layout.app')

@section('content')
<!--about-us start -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
	<!-- Indicators -->
	<ol class="carousel-indicators">
	  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
	  <li data-target="#myCarousel" data-slide-to="1"></li>
	  <li data-target="#myCarousel" data-slide-to="2"></li>
	  <li data-target="#myCarousel" data-slide-to="3"></li>

	</ol>
  
	<!-- Wrapper for slides -->
	<div class="carousel-inner">
	  <div class="item active">
		<img src="/images/bannersmarttrip.png" width="3000" alt="">
		<h2><span></span></h2>
	  </div>
  
	  <div class="item">
		<img src="/images/bannerrevisi.png" width="3000" alt="">
	  </div>
  
	  <div class="item">
		<img src="/images/bannersmarttrip.png" width="3000" alt="">
	  </div>

	  <div class="item">
		<img src="/images/bannerrevisi.png" width="3000" alt="">
	  </div>
	</div>
  
	<!-- Left and right controls -->
	<a class="left carousel-control" href="#myCarousel" data-slide="prev">
	  <span class="glyphicon glyphicon-chevron-left"></span>
	  <span class="sr-only">Previous</span>
	</a>
	<a class="right carousel-control" href="#myCarousel" data-slide="next">
	  <span class="glyphicon glyphicon-chevron-right"></span>
	  <span class="sr-only">Next</span>
	</a>
  </div>
<!--about-us end -->

<!--travel-box start-->
<section id="slide">
	<div class="container" data-aos="fade-up">
	  <div class="section-title">
		<div class="text-center">
		<h3>SmartTrip</h3>
		<p>Selamat datang di pengalaman wisata yang tak tertandingi di Sumedang dengan Smart Trip. Dengan bimbingan kami, Anda akan menjelajahi keindahan tersembunyi, merencanakan perjalanan yang cerdas, dan menciptakan kenangan tak terlupakan di kota ini. Jangan lewatkan kesempatan ini untuk menjelajahi keajaiban alam dan budaya Sumedang, menjadikan setiap momen sebagai pengalaman berharga.</p>
	  </div>
	  </div>

	<section id="" class="">
	  <div class="row">
		<div class="text-center">
		<div class="col-lg-12">
			  <div id="desc-tabs" class="desc-tabs">

				<ul class="nav nav-tabs" role="tablist">

				  <li role="presentation" class="active">
					<a href="#silver" aria-controls="silver" role="tab" data-toggle="tab">
					  Silver

					</a>
				  </li> 
				

				<li role="presentation">
				  <a href="#gold" aria-controls="gold" role="tab" data-toggle="tab">
					Gold
				  </a>
				</li>

				<li role="presentation">
				  <a href="#platinum" aria-controls="platinum" role="tab" data-toggle="tab">
					Platinum
				  </a>
				</li>
			  </ul>
			  </div>
			</section>

			<!--TAB PANES-->
			  
			  <div class="tab-content">

				<div role="tabpanel" class="tab-pane active fade in" id="silver">
				  <div class="tab-para">

					<div class="row">
					  <div class="col-lg-12">
						<style>
						.card {
						  border:1cm;
						  padding: 10px 50px;
						}
					
						.card::after {
						  position: absolute;
						  z-index: -1;
						  opacity: 0;
						  -webkit-transition: all 0.6s cubic-bezier(0.165, 0.84, 0.44, 1);
						  transition: all 0.6s cubic-bezier(0.165, 0.84, 0.44, 1);
						}
					
						.card:hover {
					
					
						  transform: scale(1.02, 1.02);
						  -webkit-transform: scale(1.02, 1.02);
						  backface-visibility: hidden; 
						  will-change: transform;
						  box-shadow: 0 1rem 3rem rgba(0,0,0,.75) !important;
						}
					
						.card:hover::after {
						  opacity: 1;
						}
					
						.card:hover .btn-outline-primary{
						  color:white;
						  background:#007bff;
						}
					
					  </style>
					
					</head>
					<body>
					
						<div class="container p-5">
						  <div class="row">


						  </div>
						</div>

				<div role="tabpanel" class="tab-pane active fade in" id="gold">
				  <div class="tab-para">

					<div class="row">
					  <div class="col-lg-12">
						<style>
						.card {
						  border:none;
						  padding: 10px 50px;
						}
					
						.card::after {
						  position: absolute;
						  z-index: -1;
						  opacity: 0;
						  -webkit-transition: all 0.6s cubic-bezier(0.165, 0.84, 0.44, 1);
						  transition: all 0.6s cubic-bezier(0.165, 0.84, 0.44, 1);
						}
					
						.card:hover {
					
					
						  transform: scale(1.02, 1.02);
						  -webkit-transform: scale(1.02, 1.02);
						  backface-visibility: hidden; 
						  will-change: transform;
						  box-shadow: 0 1rem 3rem rgba(0,0,0,.75) !important;
						}
					
						.card:hover::after {
						  opacity: 1;
						}
					
						.card:hover .btn-outline-primary{
						  color:white;
						  background:#007bff;
						}
					
					  </style>
					
					</head>
					<body>
					
						<div class="container p-5">
							<div class="row">
  
							  @foreach($data_package as $data)
							  <div class="col-lg-4 col-md-12 mb-4">
								<div class="card h-100 shadow-lg">
								  <div class="card-body">
									<div class="text-center p-3">
									  <h5 class="card-title">PAKET SILVER</h5>
									  <br><br>
									  <span class="h3">{{$data->package_name}}</span>
									  <br><br>
									  <span class="h3">Rp {{$data->price}}</span>
									</div>
								  </div>
								  <ul class="list-group list-group-flush">
									<li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
									</svg>{{$data->description}}</li>
								  </ul>
								  <div class="card-body text-center">
									<button class="btn btn-outline-primary btn-lg" style="border-radius:50px"><a href="/detailpaket">Lihat Detail</a></button>
								  </div>
								</div>
							  </div>
							  @endforeach
  
							</div>
						  </div>
					
					  
						<div class="container p-5">
						  <div class="row">
							<div class="col-lg-4 col-md-12 mb-4">
							  <div class="card h-100 shadow-lg">
								<div class="card-body">
								  <div class="text-center p-3">
									<h5 class="card-title">PAKET GOLD</h5>
									<br><br>
									<span class="h3">Rp 16,750,000</span>
									<br><br>
								  </div>
								</div>
								<ul class="list-group list-group-flush">
								  <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
									<path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
								  </svg> Hotel</li>
								  <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
									<path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
								  </svg> Travel</li>
								  <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
									<path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
								  </svg> Tour Gate</li>
								</ul>
								<div class="card-body text-center">
								  <button class="btn btn-outline-primary btn-lg" style="border-radius:50px">Lihat Detail</button>
								</div>
							  </div>
							</div>
							<div class="col-lg-4 col-md-12 mb-4">
							  <div class="card h-100 shadow-lg">
								<div class="card-body">
								  <div class="text-center p-3">
									<h5 class="card-title">PAKET GOLD </h5>
									<br><br>
									<span class="h3">Rp 14,000,000</span>
									<br><br>
								  </div>
								</div>
								<ul class="list-group list-group-flush">
								  <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
									<path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
								  </svg> Hotel</li>
								  <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
									<path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
								  </svg> Travel</li>
								  <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
									<path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
								  </svg> Tour Gate</li>
								</ul>
								<div class="card-body text-center">
								  <button class="btn btn-outline-primary btn-lg" style="border-radius:50px">Lihat Detail</button>
								</div>
							  </div>
							</div>
							<div class="col-lg-4 col-md-12 mb-4">
							  <div class="card h-100 shadow-lg">
								<div class="card-body">
								  <div class="text-center p-3">
									<h5 class="card-title">PAKET GOLD</h5>
									<br><br>
									<span class="h3">Rp 20,500,000</span>
									<br><br>
								  </div>
								</div>
								<ul class="list-group list-group-flush">
								  <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
									<path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
								  </svg> Hotel</li>
								  <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
									<path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
								  </svg> Travel</li>
								  <li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
									<path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
								  </svg> Tour Gate</li>
								</ul>
								<div class="card-body text-center">
								  <button class="btn btn-outline-primary btn-lg" style="border-radius:50px">Lihat Detail</button>
								</div>
							  </div>
							</div>    
						</div>
					  </div>
				  </div>
				</div>
			  </div>
			</div>
				<div role="tabpanel" class="tab-pane active fade in" id="platinum">
				  <div class="tab-para">

					<div class="row">
					  <div class="row">
						<div class="col-lg-12">
						  <style>
						  .card {
							border:none;
							padding: 10px 50px;
						  }
					  
						  .card::after {
							position: absolute;
							z-index: -1;
							opacity: 0;
							-webkit-transition: all 0.6s cubic-bezier(0.165, 0.84, 0.44, 1);
							transition: all 0.6s cubic-bezier(0.165, 0.84, 0.44, 1);
						  }
					  
						  .card:hover {
					  
					  
							transform: scale(1.02, 1.02);
							-webkit-transform: scale(1.02, 1.02);
							backface-visibility: hidden; 
							will-change: transform;
							box-shadow: 0 1rem 3rem rgba(0,0,0,.75) !important;
						  }
					  
						  .card:hover::after {
							opacity: 1;
						  }
					  
						  .card:hover .btn-outline-primary{
							color:white;
							background:#007bff;
						  }
					  
						</style>
					  
					  </head>
					  <body>
					  
					  
						
						  <div class="container p-5">
							<div class="row">
							  <div class="col-lg-4 col-md-12 mb-4">
								<div class="card h-100 shadow-lg">
								  <div class="card-body">
									<div class="text-center p-3">
									  <h5 class="card-title">PAKET PLATINUM</h5>
									  <br><br>
									  <span class="h4">Rp 26,750,000</span>
									  <br><br>
									</div>
								  </div>
								  <ul class="list-group list-group-flush">
									<li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
									  <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
									</svg> Hotel</li>
									<li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
									  <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
									</svg> Travel</li>
									<li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
									  <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
									</svg> Tour Gate</li>
								  </ul>
								  <div class="card-body text-center">
									<button class="btn btn-outline-primary btn-lg" style="border-radius:50px">Lihat Detail</button>
								  </div>
								</div>
							  </div>
							  <div class="col-lg-4 col-md-12 mb-4">
								<div class="card h-100 shadow-lg">
								  <div class="card-body">
									<div class="text-center p-3">
									  <h5 class="card-title">PAKET PLATINUM</h5>
									  <br><br>
									  <span class="h4">Rp  24,000,000</span>
									  <br><br>
									</div>
								  </div>
								  <ul class="list-group list-group-flush">
									<li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
									  <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
									</svg> Hotel</li>
									<li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
									  <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
									</svg> Travel</li>
									<li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
									  <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
									</svg> Tour Gate</li>
								  </ul>
								  <div class="card-body text-center">
									<button class="btn btn-outline-primary btn-lg" style="border-radius:50px">Lihat Detail</button>
								  </div>
								</div>
							  </div>
							  <div class="col-lg-4 col-md-12 mb-4">
								<div class="card h-100 shadow-lg">
								  <div class="card-body">
									<div class="text-center p-3">
									  <h5 class="card-title">PAKET PLATINUM</h5>
									  <br><br>
									  <span class="h4">Rp 30,500,000</span>
									  <br><br>
									</div>
								  </div>
								  <ul class="list-group list-group-flush">
									<li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
									  <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
									</svg> Hotel</li>
									<li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
									  <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
									</svg> Travel</li>
									<li class="list-group-item"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
									  <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
									</svg> Tour Gate</li>
								  </ul>
								  <div class="card-body text-center">
									<button class="btn btn-outline-primary btn-lg" style="border-radius:50px">Lihat Detail</button>
								  </div>
								</div>
							  </div>    
						  </div>
						</div>
						
					  </div>
					</div>
				  </div>
				</div>
			  </div>
			  </div>

	  </div>

	  </div>

	</div>
  </section><!--/.travel-box-->
<!--travel-box end-->





<!-- testemonial Start -->
<section   class="slide">
	<div class="container">

		<div class="gallary-header text-center">
			<h2>
				Events
			</h2>

		</div><!--/.gallery-header-->

		<div class="owl-carousel owl-theme" id="testemonial-carousel">
			@foreach($data_event as $item)
			<div class="home1-testm item">
				
				<div class="home1-testm-single text-center">
					
					<div class="home1-testm-txt">
						</span>
						
						<h3>
							<a href="/">
								{{$item->event_name}}
							</a>
						</h3>
						<ul>
							Start Date {{$item->event_start_date}}
						</ul>
						<ul>
							End Date {{$item->event_end_date}}
						</ul>
						
						<h3>
							<a href="berita.html">
								{{$item->description}}
							</a>
						</h3>
					</div><!--/.home1-testm-txt-->	
					
				</div><!--/.home1-testm-single-->
				
			</div><!--/.item-->
			@endforeach
			
			</div><!--/.item-->

		</div><!--/.testemonial-carousel-->
	   
		
		
	</div><!--/.container-->
	

</section><!--/.testimonial-->	
<!-- testemonial End -->
@endsection