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
						<a class="nav-link" href="<?= base_url() ?>">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link active" aria-current="page" href="<?= base_url('about') ?>">About</a>
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
        <h1 class="display-5 fw-bold">About</h1>
        
      </div>
    </div>

	<div class="container">
		<div class="row">
			<div class="col-md-12 my-2 card">
				<div class="card-body">
					<h5 class="h5">About me</h5>
					<p>Saya Amin Maulana Arrosyid, mahasiswa Universitas Nahdlatul Ulama Indonesia. Saya berasal dari Palembang atau kota yang biasa disebut dengan kota pempek, tapi sekarang tinggal di Bogor. Sekarang lagi fokus kuliah sambil terus belajar hal-hal baru, terutama di dunia pemrograman dan teknologi. Masih dalam proses, tapi pelan-pelan mulai ngerti dan makin tertarik buat ngembangin diri di bidang ini.</p>
				</div>
			</div>
			<div class="col-md-12 my-2 card">
				<div class="card-body">
					<h5 class="h5">Bisa Apa Aku</h5>
					<p>Saya cukup terbiasa dengan dunia pemrograman, khususnya web development. Saat ini saya sedang mendalami PHP dengan CodeIgniter, serta memperkuat dasar-dasar HTML, CSS, dan JavaScript. Selain itu, saya sedang mencoba menerapkan clean code sebisa mungkin. Masih terus belajar, tapi saya suka ngulik dan gak mudah nyerah kalau ketemu error.</p>
				</div>
			</div>
			<div class="col-md-12 my-2 card">
				<div class="card-body">
					<h5 class="h5">Bagaimana Aku</h5>
					<p>Saya orangnya cukup tenang, suka belajar hal baru, dan kalau sudah tertarik sama sesuatu, biasanya saya akan terus ngulik sampai paham. Meski kadang butuh waktu, saya lebih suka pelan-pelan tapi paham daripada buru-buru tapi bingung. Saya juga tipe yang kalau dapet masalah atau error, lebih milih nyari tahu dulu sendiri sebelum nanya—karena dari situ justru jadi lebih ngerti. Intinya, saya bukan orang yang cepat puas, dan selalu ingin berkembang.</p>
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