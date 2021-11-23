<?= $this->extend('layouts/master.php') ?>

<?= $this->section('content') ?>
<div id="content">

	<!-- Topbar -->
	<?= $this->include('layouts/navbar.php') ?>
	<!-- Sidebar Toggle (Topbar) -->
	<button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
		<i class="fa fa-bars"></i>
	</button>

	<!-- Begin Page Content -->
	<div class="container-fluid">

		<!-- Page Heading -->
		<!-- <h1 class="h3 mb-4 text-gray-800">Blank Page</h1> -->
		<!-- ======= Portfolio Section ======= -->
		<section id="portfolio" class="portfolio section-bg">
			<div class="container">

				<div class="section-title">
					<h2>Portfolio</h2>
					<p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
				</div>

				<header class="container bg-primary text-white">
					<div class="row">
						<div class="col-12 py-4 text-center">
							<h1 class="display-2">Marton Bioskop</h1>
							<p class="lead">Nikmati film film yang tersedia</p>
						</div>
					</div>
				</header>

				<main class="container border p-md-5 p-2">
					<div class="row g-2 g-md-4">
						<div class="col-6 col-md-3">
							<img class="w-100" src="assets/img/portfolio/portfolio-1.jpg" alt="gambar alam">
							<br></br>
							<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>							
						</div>
						<div class="col-6 col-md-3">
							<img class="w-100" src="assets/img/portfolio/portfolio-2.jpg" alt="gambar alam">
							<br></br>
							<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>							
						</div>
						<div class="col-6 col-md-3">
							<img class="w-100" src="assets/img/portfolio/portfolio-3.jpg" alt="gambar alam">
							<br></br>
							<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>							
						</div>
						<div class="col-6 col-md-3">
							<img class="w-100" src="assets/img/portfolio/portfolio-4.jpg" alt="gambar alam">
							<br></br>
							<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>							
						</div>
						<div class="col-6 col-md-3">
							<img class="w-100" src="assets/img/portfolio/portfolio-5.jpg" alt="gambar alam">
							<br></br>
							<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>							
						</div>
						<div class="col-6 col-md-3">
							<img class="w-100" src="assets/img/portfolio/portfolio-6.jpg" alt="gambar alam">
							<br></br>
							<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>							
						</div>
						<div class="col-6 col-md-3">
							<img class="w-100" src="assets/img/portfolio/portfolio-7.jpg" alt="gambar alam">
							<br></br>
							<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>							
						</div>
						<div class="col-6 col-md-3">
							<img class="w-100" src="assets/img/portfolio/portfolio-8.jpg" alt="gambar alam">
							<br></br>
							<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>							
						</div>
					</div>
				</main>
			</div>
	</div>

</div>

</div>
</section><!-- End Portfolio Section -->


</div>
<!-- /.container-fluid -->

</div>

<?= $this->endSection('') ?>