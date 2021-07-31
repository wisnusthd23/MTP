<section id="home-section" class="hero">
	<div class="home-slider owl-carousel">
		<div class="slider-item" style="background-image: url(<?= base_url() ?>nu/images/background3.jpg);">
			<div class="overlay"></div>
			<div class="container">
				<div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

					<div class="col-md-12 ftco-animate text-center " data-aos="fade-up">
						<h1 class="mb-2">We serve Fresh Vegestables &amp; Fruits</h1>
						<h2 class="subheading mb-4">We deliver organic vegetables &amp; fruits</h2>
						<p><a href="#product" class="btn btn-primary">View Product</a></p>
					</div>

				</div>
			</div>
		</div>

		<div class="slider-item" style="background-image: url(<?= base_url() ?>nu/images/26363.jpg);">
			<div class="overlay"></div>
			<div class="container">
				<div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

					<div class="col-sm-12 ftco-animate text-center">
						<h1 class="mb-2">100% Fresh &amp; Organic Foods</h1>
						<h2 class="subheading mb-4">We deliver organic vegetables &amp; fruits</h2>
						<p><a href="#product" class="btn btn-primary">View Product</a></p>
					</div>

				</div>
			</div>
		</div>
		<div class="slider-item" style="background-image: url(<?= base_url() ?>nu/images/background2.jpg);">
			<div class="overlay"></div>
			<div class="container">
				<div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

					<div class="col-sm-12 ftco-animate text-center">
						<h1 class="mb-2">100% Fresh &amp; Organic Foods</h1>
						<h2 class="subheading mb-4">We deliver organic vegetables &amp; fruits</h2>
						<p><a href="#product" class="btn btn-primary">View Product</a></p>
					</div>

				</div>
			</div>
		</div>
	</div>
</section>

<section class="ftco-section">
	<div class="container">
		<div class="row no-gutters ftco-services">
			<div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
				<div class="media block-6 services mb-md-0 mb-4">
					<div class="icon bg-color-1 active d-flex justify-content-center align-items-center mb-2">
						<span class="flaticon-shipped"></span>
					</div>
					<div class="media-body">
						<h3 class="heading">Free Shipping</h3>
						<span>On order over $100</span>
					</div>
				</div>
			</div>
			<div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
				<div class="media block-6 services mb-md-0 mb-4">
					<div class="icon bg-color-2 d-flex justify-content-center align-items-center mb-2">
						<span class="flaticon-diet"></span>
					</div>
					<div class="media-body">
						<h3 class="heading">Always Fresh</h3>
						<span>Product well package</span>
					</div>
				</div>
			</div>
			<div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
				<div class="media block-6 services mb-md-0 mb-4">
					<div class="icon bg-color-3 d-flex justify-content-center align-items-center mb-2">
						<span class="flaticon-award"></span>
					</div>
					<div class="media-body">
						<h3 class="heading">Superior Quality</h3>
						<span>Quality Products</span>
					</div>
				</div>
			</div>
			<div class="col-md-3 text-center d-flex align-self-stretch ftco-animate">
				<div class="media block-6 services mb-md-0 mb-4">
					<div class="icon bg-color-4 d-flex justify-content-center align-items-center mb-2">
						<span class="flaticon-customer-service"></span>
					</div>
					<div class="media-body">
						<h3 class="heading">Support</h3>
						<span>24/7 Support</span>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<section class="ftco-section" id="product">
	<div class="container">
		<div class="row">
			<div class="col-md-5 ">
				<form action="<?= base_url('home') ?>" method="POST" class="search-form">
					<div class="form-group">
						<span class="icon ion-ios-search"></span>
						<input type="text" class="form-control" placeholder="Search..." name="submit" autofocus autocomplete="off">
					</div>
				</form>
			</div>
		</div>
		<div class="row justify-content-center pb-3">
			<div class="col-md-12 heading-section text-center ftco-animate">
				<h2 class="mb-4">Our Products</h2>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<?php foreach ($barang as $key => $value) { ?>
				<div class="col-md-6 col-lg-3 ftco-animate">
					<?php
					echo form_open('belanja/add');
					echo form_hidden('id', $value->id_barang);
					echo form_hidden('qty', 1);
					echo form_hidden('price', $value->harga);
					echo form_hidden('name', $value->nama_barang);
					echo form_hidden('redirect_page', str_replace('index.php/', '', current_url()));
					?>
					<div class="product">
						<a href="<?= base_url('home/detail_barang/' . $value->id_barang) ?>" class="img-prod"><img class="img-fluid" src="<?= base_url('assets/gambar/' . $value->gambar) ?>" alt="Colorlib Template">
							<div class="overlay"></div>
						</a>
						<div class="text py-3 pb-4 px-3 text-center">
							<h3><a href="<?= base_url('home/detail_barang/' . $value->id_barang) ?>"><?= $value->nama_barang ?></a></h3>
							<div class="d-flex">
								<div class="pricing">
									<p class="price">Rp.<span class="price-sale"><?= number_format($value->harga, 0) ?></span></p>
								</div>
							</div>
							<div class="bottom-area d-flex px-3">
								<div class="m-auto d-flex">
									<button class="btn-success  justify-content-center align-items-center text-center">
										<span><i class="ion-ios-menu"></i></span>
									</button>
									<button type="submit" class="btn-success swalDefaultSuccess buy-now d-flex justify-content-center align-items-center mx-1">
										<span><i class="ion-ios-cart"></i></span>
									</button>
								</div>
							</div>
						</div>
					</div>
					<?php echo form_close(); ?>
				</div>
			<?php } ?>
		</div>
	</div>
	<div class="row mt-5">
		<div class="col text-center">
			<div class="block-27">
				<ul>
					<?php
					if (isset($paginasi)) {
						echo $paginasi;
					} ?>
				</ul>
			</div>
		</div>
	</div>

	<section class="ftco-section img mt-3" style="background-image: url(<?= base_url() ?>nu/images/background3.jpg);">
		<div class="container">
			<div class="row justify-content-start">
				<div class="col-md-6 heading-section ftco-animate deal-of-the-day ftco-animate">
					<h2>Kirim Resep</h2>
					<p>Silahkan kirim resep dokter anda jika ada, klik tombol <strong>Resep Obat</strong> dibawah</p>
					<div class="form-group">
						<div class="form-group">
							<a href="" class="btn btn-primary">Resep Obat</a>
						</div>
					</div>
				</div>
			</div>
	</section>


</section>