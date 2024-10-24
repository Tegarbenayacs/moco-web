<!DOCTYPE html>
<html lang="en">

<head>
	<title>Moco Aplikasi Pendataan Perpustaakan</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="format-detection" content="telephone=no">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="author" content="">
	<meta name="keywords" content="">
	<meta name="description" content="">
	<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Lora:wght@400;700&display=swap" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/normalize.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/icomoon/icomoon.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendor.css') }}">

</head>

<body data-bs-spy="scroll" data-bs-target="#header" tabindex="0">

	<div id="header-wrap">
		<header id="header">
			<div class="container-fluid">
				<div class="rowr">

						@include('components/navbar')


				</div>
			</div>
		</header>

	</div><!--header-wrap-->

	<section id="hero" style="padding: 50px 0;">

		<div class="container">

			<div class="row">
				<div class="col-md-6">
					<div class="hero-content">
						<h2 class="uk" style="font-size: 2.5em; font-weight: bold;">Manajemen Buku Perpustakaan</h2> <!-- Ubah ukuran dan berat font -->
						<p>Aplikasi ini dirancang untuk mempermudah proses peminjaman buku di perpustakaan. Dengan fitur
							pencatatan buku yang detail, pengguna dapat meminjam, mengembalikan, serta melihat ketersediaan
							buku dengan mudah. Jelajahi berbagai koleksi buku yang tersedia dan nikmati pengalaman membaca yang
							lebih efisien.</p>
						<div class="btn-wrap">
							<a href="#" class="btn btn-outline-accent btn-accent-arrow">Pelajari Lebih Lanjut<i
									class="icon icon-ns-arrow-right"></i></a>
						</div>
					</div><!-- hero-content -->
				</div>
				<div class="col-md-6 text-center d-flex justify-content-end align-items-center">
					<img src="/assets/images/product-item1.jpg" alt="Gambar Buku" class="img-fluid mx-auto" style="width: 50%; height: auto;"> <!-- Ubah ukuran gambar -->
				</div>
			</div>
		</div>

	</section>

	<section class="fitur" style="margin-top: 50px;">
		<div class="container text-center">
			<div class="row align-items-center">
					<div class="col">
						<div class="card" style="background-color: #E5E3E1; border-color: #E5E3E1;"> <!-- Warna lebih gelap sedikit lagi -->
							<div class="card-body">
								<h2>Buku</h2>
								<p>Berbagai buku tersedia di Moco, kamu bisa membaca dan meminjamnya, namun pastikan untuk mengembalikannya.</p>
								<div class="btn-wrap">
									<a href="{{ url('/buku') }}" class="btn btn-outline-accent btn-accent-arrow">Lihat Buku<i class="icon icon-ns-arrow-right"></i></a>
								</div>
							</div>
						</div>
					</div>
					<div class="col">
						<div class="card" style="background-color: #E5E3E1; border-color: #E5E3E1;"> <!-- Warna lebih gelap sedikit lagi -->
							<div class="card-body">
								<h2>Peminjaman</h2>
								<p>Kamu dapat meminjam banyak buku yang disediakan, tetapi penting untuk mengembalikannya tepat waktu.</p>
								<div class="btn-wrap">
									<a href="{{ url('/peminjaman') }}" class="btn btn-outline-accent btn-accent-arrow">Lihat Peminjaman<i class="icon icon-ns-arrow-right"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

	</section>

	<section id="popular-books" class="py-5 my-5">
		<div class="container">
			<div class="row">
				<div class="col-md-12">

					<div class="section-header align-center">
						<div class="title">
							<span>Koleksi terbaik kami</span>
						</div>
						<h2 class="section-title">Buku Populer</h2>
					</div>

					<div class="product-list" data-aos="fade-up">
						<div class="row">

							<div class="col-md-3">
								<div class="product-item">
									<figure class="product-style">
										<img src="/assets/images/product-item1.jpg" alt="Books" class="product-item">

									</figure>
									<figcaption>
										<h3>Simple Way of Piece Life</h3>
										<span>Armor Ramsey</span>
									</figcaption>
								</div>
							</div>

							<div class="col-md-3">
								<div class="product-item">
									<figure class="product-style">
										<img src="/assets/images/product-item2.jpg" alt="Books" class="product-item">

									</figure>
									<figcaption>
										<h3>Great Travel at Desert</h3>
										<span>Sanchit Howdy</span>
									</figcaption>
								</div>
							</div>

							<div class="col-md-3">
								<div class="product-item">
									<figure class="product-style">
										<img src="/assets/images/product-item3.jpg" alt="Books" class="product-item">

									</figure>
									<figcaption>
										<h3>The Lady Beauty Scarlett</h3>
										<span>Arthur Doyle</span>
									</figcaption>
								</div>
							</div>

							<div class="col-md-3">
								<div class="product-item">
									<figure class="product-style">
										<img src="/assets/images/product-item4.jpg" alt="Books" class="product-item">
									</figure>
									<figcaption>
										<h3>Once Upon a Time</h3>
										<span>Klien Marry</span>
									</figcaption>
								</div>
							</div>

						</div><!--ft-books-slider-->
					</div><!--grid-->

				</div><!--inner-content-->
			</div>

			<div class="row">
				<div class="col-md-12">

				</div>
			</div>
		</div>
	</section>

	<section id="best-selling" class="leaf-pattern-overlay">
		<div class="corner-pattern-overlay"></div>
		<div class="container">
			<div class="row justify-content-center">

				<div class="col-md-8">

					<div class="row">

						<div class="col-md-6">
							<figure class="products-thumb">
								<img src="/assets/images/single-image.jpg" alt="book" class="single-image">
							</figure>
						</div>

						<div class="col-md-6">
							<div class="product-entry">
								<h2 class="section-title divider">Buku Terlaris</h2>

								<div class="products-content">
									<div class="author-name">Oleh Timbur Hood</div>
									<h3 class="item-title">Birds Gonna Be Happy</h3>
									<p>Petualangan penuh inspirasi yang mengajarkan kita bahwa kebahagiaan bisa datang dari hal-hal sederhana di sekitar kita.</p>
									<div class="btn-wrap">
										<a href="#" class="btn-accent-arrow">Pinjam<i class="icon icon-ns-arrow-right"></i></a>
									</div>
								</div>

							</div>
						</div>

					</div>
					<!-- / row -->

				</div>

			</div>
		</div>
	</section>

	<footer id="footer">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="footer-item">
						<div class="company-brand">
							<img src="/assets/images/MOCO.png" alt="MOCO Logo" class="footer-logo">
							<p>Perpustakaan ini berkomitmen untuk menyebarkan pengetahuan melalui buku-buku berkualitas, menjadikan dunia tempat yang lebih baik, satu buku pada satu waktu.</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="footer-menu">
						<h3>Perpustakaan</h3>
						<ul>
							<li><a href="/">Beranda</a></li>
							<li><a href="/buku">Buku</a></li>
							<li><a href="/peminjaman">Peminjaman</a></li>
							<li><a href="/tentang-kami">Tentang Kami</a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-4">
					<div class="footer-item">
						<h3>Kontak Kami</h3>
						<address>
							123 Jalan Buku, Jakarta, Indonesia<br>
							Email: support@booksaw.com<br>
							Telp: +62 123-4567-890
						</address>
					</div>
				</div>
			</div>
		</div>
	</footer>

	@include('components/footer')

	<script src="https://kit.fontawesome.com/61dd260dcf.js" crossorigin="anonymous"></script>
	<script src="{{ url('assets/js/jquery-1.11.0.min.js') }}"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
		crossorigin="anonymous"></script>
	<script src="{{ url('assets/js/plugins.js') }}"></script>
	<script src="{{ url('assets/js/script.js') }}"></script>


</body>

</html>
