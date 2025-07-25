<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>MyBlog</title>

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>" />
</head>

<body>

	<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
		<div class="container">
			<a class="navbar-brand" href="<?= base_url() ?>">MyBlog</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link active" aria-current="page" href="<?= base_url() ?>">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?= base_url('about') ?>">About</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?= base_url('post') ?>">Blog</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?= base_url('contact') ?>">Contact</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?= base_url('faqs') ?>">FAQ</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<div class="p-5 mb-4 bg-light rounded-3">
      <div class="container py-5">
        <h1 class="display-5 fw-bold">Selamat Datang</h1>
        <!-- <p class="col-md-8 fs-4">di laman portal berita</p> -->
        <!-- <button class="btn btn-primary btn-sm" type="button">Read more</button> -->
      </div>
    </div>

	<div class="container">
		<div class="row">
			<div class="col-md-12 my-2 card">
				<div class="card-body">
					<h5 class="h5">Mulai ngoding PHP nich</h5>
					<p>Waktunya masuk ke dunia di mana setiap baris kode punya kekuatan untuk menciptakan sesuatu yang luar biasa. Jangan takut sama error, karena dari situ kamu belajar jadi lebih jago. Buka laptop, siapkan kopi, dan biarkan imajinasi bertemu logika—karena hari ini, kamu bukan cuma ngetik, kamu sedang membangun masa depan satu baris kode dalam satu waktu. Let's code! 🚀</p>
				</div>
			</div>
			<div class="col-md-12 my-2 card">
				<div class="card-body">
					<h5 class="h5">Jadi paham CSS dan JS</h5>
					<p>Jangan takut sama kurung kurawal dan titik koma—semua master JavaScript juga pernah bingung bedain == dan ===. Jangan minder kalau layout CSS-mu berantakan, karena semua developer pasti pernah bertarung lawan margin dan flexbox. Terus aja coba, oprek, dan bikin error, karena dari situ kamu belajar. Setiap style yang rapi dan animasi yang hidup itu hasil dari ribuan inspect element. Hari ini kamu belajar, besok kamu bikin keajaiban di browser. Gas terus, web dev warrior! 🔥💻</p>
				</div>
			</div>
			<div class="col-md-12 my-2 card">
				<div class="card-body">
					<h5 class="h5">Codeigniter asyik juga kok</h5>
					<p>CodeIgniter itu asyik kok—ringan, cepat, dan nggak banyak drama. Gak perlu ribet mikirin terlalu banyak hal, tinggal load library, panggil model, dan jalankan controller, langsung bisa bangun web dinamis dengan gaya kamu sendiri. Mau bikin aplikasi kecil atau proyek gede, CI siap jadi sahabat setia di balik layar. Teruslah eksplorasi, utak-atik routing, main-main di view, dan rasakan nikmatnya bikin fitur tanpa pusing mikirin ribuan konfigurasi. Yuk, buktikan kalau CodeIgniter bukan cuma simpel, tapi juga powerful! 💥🔥</p>
				</div>
			</div>
			
		</div>
	</div>
	<div class="container py-4">
		<footer class="pt-3 mt-4 text-muted border-top">
			<div class="container">
				&copy; <?= Date('Y') ?>
			</div>
		</footer>
	</div>

	<!-- Jquery dan Bootsrap JS -->
	<script src="<?= base_url('js/jquery.min.js') ?>"></script>
	<script src="<?= base_url('js/bootstrap.min.js') ?>"></script>

</body>

</html>