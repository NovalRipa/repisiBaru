<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">

	<!-- title -->
	<title></title>

	<!-- favicon -->
	<link rel="shortcut icon" type="image/png" href="">
	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
	<!-- fontawesome -->
	<link rel="stylesheet" href="{{asset('frontend/assets/css/all.min.css')}}">
	<!-- bootstrap -->
	<link rel="stylesheet" href="{{asset('frontend/assets/bootstrap/css/bootstrap.min.css')}}">
	<!-- owl carousel -->
	<link rel="stylesheet" href="{{asset('frontend/assets/css/owl.carousel.css')}}">
	<!-- magnific popup -->
	<link rel="stylesheet" href="{{asset('frontend/assets/css/magnific-popup.css')}}">
	<!-- animate css -->
	<link rel="stylesheet" href="{{asset('frontend/assets/css/animate.css')}}">
	<!-- mean menu css -->
	<link rel="stylesheet" href="{{asset('frontend/assets/css/meanmenu.min.css')}}">
	<!-- main style -->
	<link rel="stylesheet" href="{{asset('frontend/assets/css/main.css')}}">
	<!-- responsive -->
	<link rel="stylesheet" href="{{asset('frontend/assets/css/responsive.css')}}">

</head>
<body>
	<!--PreLoader-->
    <div class="loader">
        <div class="loader-inner">

        </div>
    </div>
    <!--PreLoader Ends-->

	<!-- header -->
	<div class="top-header-area" id="sticker">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-sm-12 text-center">
					<div class="main-menu-wrap">
						<!-- logo -->
						<div class="site-logo">
							<a href="index.html">

							</a>
						</div>
						<!-- logo -->

						<!-- menu start -->
                         @include('layouts.partials.nav')
						<a class="mobile-show search-bar-icon" href="#"><i class="fas fa-search"></i></a>
						<div class="mobile-menu"></div>
						<!-- menu end -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end header -->

	<!-- search area -->
	<div class="search-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<span class="close-btn"><i class="fas fa-window-close"></i></span>
					<div class="search-bar">
						<div class="search-bar-tablecell">
							<h3>Search For:</h3>
							<input type="text" placeholder="Keywords">
							<button type="submit">Search <i class="fas fa-search"></i></button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end search area -->
    <!-- home page slider -->
	<div class="homepage-slider">
		<!-- single home slider -->
		<div class="single-homepage-slider homepage-bg-1">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-lg-7 offset-lg-1 offset-xl-0">
						<div class="hero-text">
							<div class="hero-text-tablecell">
								<p class="subtitle">Gamis</p>
								<h1>Gamis Terbaru</h1>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- single home slider -->
		<div class="single-homepage-slider homepage-bg-2">
			<div class="container">
				<div class="row">
					<div class="col-lg-10 offset-lg-1 text-center">
						<div class="hero-text">
							<div class="hero-text-tablecell">
								<p class="subtitle">Produk Baru</p>
								<h1>100% Produk Original</h1>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
        <div class="single-homepage-slider homepage-bg-3">
			<div class="container">
				<div class="row">
					<div class="col-lg-10 offset-lg-1 text-center">
						<div class="hero-text">
							<div class="hero-text-tablecell">
								<p class="subtitle">Produk</p>
								<h1>Produk Di Jamin Baru</h1>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end home page slider -->

	</div>
	<!-- end features list section -->

	<!-- product section -->
	<div class="product-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="section-title">
						<h3>Produk Mungkin yang anda suka</h3>
                        <p style='color: #ffffff'>Produk</p>
					</div>
				</div>
			</div>
			<div class="container ">
				<div class="row justify-content-center">
					<div class="col-md-12 mb-3">
						<img src="{{ url('images/logo.png') }}" class="rounded mx-auto d-block" width="700" alt="">
					</div>
						@foreach($barang as $data)
						<div class="col-md-4">
							<div class="card">
							<center><img src="{{$data->image()}}" alt=""  class="card-img-top" style="width:100px; height:100px;" alt="cover"></center>
							  <div class="card-body">
								<h5 class="card-title">{{ $data->nama_barang }}</h5>
								<p class="card-text">
									<strong>Harga :
									</strong>Rp. {{ number_format($data->harga, 0, ',', '.') }} <br>
									<Strong>Stok :
									</strong>{{ number_format ($data->stok, 0, ',', '.') }} Unit <br>
									<hr>
                                    <Strong>Deskripsi :
									</strong>{{ $data->deskripsi }}<br>
								</p>
								<a href="{{ url('pesan') }}/{{ $data->id }}" class="btn btn-warning"><i class="fa fa-shopping-cart"></i> Pesan</a>
							  </div>
							</div>
                            <br>
                            <br>
							</div>
						@endforeach
				</div>
			</div>
		</div>
	</div>
	<!-- latest news -->
	<div class="latest-news pt-150 pb-150">
		<div class="container">

			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="section-title">
						<h3>Produk Baru</h3>
						<p style='color: #ffffff'>Ini Hiasan Saja.</p>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-4 col-md-6">
					<div class="single-latest-news">
						<a href="{{url('/')}}"><div class="latest-news-bg news-bg-1 "></div></a>
						<div class="news-text-box">
							<h3>Baju Gamis</h3>
							<p class="blog-meta">
								<span class="date"><i class="fas fa-calendar"></i> 27 Maret, 2022</span>
							</p>
							<p class="excerpt" style='color: #000000'>
                                1. Kondisi: Baru <br>
                                2. Berat: 400 Gram<br>
                                3. Kategori: Gamis Wanita<br>
                                4. Etalase: Baju Gamis Syari Wanita<br>
                                5. BEIBE OLIVE SET SYARI + HIJAB<br>

                                6. Baju Setelan Muslim Wanita - Fendi Set - <br>
                                   Baju Gamis Wanita Terbaru Set<br>

                                7. KETERANGAN<br>
                                => Bahan Moscrepe<br>
                                => Kancing Hidup (Busui)<br>
                                => Aplikasi Tali Pinggang<br>
                                => LD 102 PB 138<br>
                                => FREE Pashmina<br>
                                => Lebar 78 Panjang 135</p>
						</div>
					</div>
				</div>
                <div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0">
					<div class="single-latest-news">
						<a href="{{url('/')}}"><div class="latest-news-bg news-bg-2"></div></a>
						<div class="news-text-box">
							<h3>Baju Koko Pria</h3>
							<p class="blog-meta">
								<span class="date"><i class="fas fa-calendar"></i> 29 Maret, 2022</span>
							</p>
							<p class="excerpt" style='color: #000000'>
                                1. Kondisi: Baru <br>
                                2. Berat: 350 Gram<br>
                                3. Kategori: Baju Koko Pria<br>
                                4. Etalase: Koko Al-amwa<br>
                                5. PENTING. MOHON DIBACA.<br>

                                6. Ketika order, tanya terlebih dahulu stoknya..<br>
                                7. Jangan lupa untuk mencantumkan warna dan ukuran.<br>

                                8. Transfer diatas jam 14.00 WIB barang dikirim hari berikutnya..</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single-latest-news">
						<a href="{{url('/')}}"><div class="latest-news-bg news-bg-3"></div></a>
						<div class="news-text-box">
							<h3>Gamis Anak NANDIA kids</h3>
							<p class="blog-meta">
								<span class="date"><i class="fas fa-calendar"></i> 28 Maret, 2022</span>
							</p>
							<p class="excerpt" style='color: #000000'>
                                1. Kondisi: Baru <br>
                                2. Berat: 600 Gram<br>
                                4. Kategori: Busana Muslim Set Anak<br>
                                5. Etalase: baju anak<br>
                                6. Baju anak perempuan Set baju anak gamis indah maxi toska<br>

                                7. bahan wallycreep<br>
                                8. ld 84 pjg 105 lebar rok 2,25meter + pinggang ada ada renda cantik + bergo.</p>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
	<center><div class="copyright">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-12">
					<p>Copyrights &copy; 2022 - <a href="">Ripa Noval Kh</a>,  All Rights Reserved.<br>
					</p>
				</div>
				{{-- <div class="col-lg-6 text-right col-md-12">
					<div class="social-icons">
						<ul>
							<li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-linkedin"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-dribbble"></i></a></li>
						</ul>
					</div>
				</div> --}}
			</div>
		</div>
	</div></center>
	<!-- end copyright -->

	<!-- jquery -->
	<script src="{{asset('frontend/assets/js/jquery-1.11.3.min.js')}}"></script>
	<!-- bootstrap -->
	<script src="{{asset('frontend/assets/bootstrap/js/bootstrap.min.js')}}"></script>
	<!-- count down -->
	<script src="{{asset('frontend/assets/js/jquery.countdown.js')}}"></script>
	<!-- isotope -->
	<script src="{{asset('frontend/assets/js/jquery.isotope-3.0.6.min.js')}}"></script>
	<!-- waypoints -->
	<script src="{{asset('frontend/assets/js/waypoints.js')}}"></script>
	<!-- owl carousel -->
	<script src="{{asset('frontend/assets/js/owl.carousel.min.js')}}"></script>
	<!-- magnific popup -->
	<script src="{{asset('frontend/assets/js/jquery.magnific-popup.min.js')}}"></script>
	<!-- mean menu -->
	<script src="{{asset('frontend/assets/js/jquery.meanmenu.min.js')}}"></script>
	<!-- sticker js -->
	<script src="{{asset('frontend/assets/js/sticker.js')}}"></script>
	<!-- main js -->
	<script src="{{asset('frontend/assets/js/main.js')}}"></script>

     @include('sweetalert::alert')
     <script src="{{asset('js/sweetalert2.js')}}"></script>
     <script src="{{asset('js/delete.js')}}"></script>

</body>
</html>
