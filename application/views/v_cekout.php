<!DOCTYPE html>
<html lang="en" style="	width: 100%;overflow-x: hidden;">

<head>
	<title><?= $title; ?></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="<?= base_url() ?>nu/css/open-iconic-bootstrap.min.css">
	<link rel="stylesheet" href="<?= base_url() ?>nu/css/animate.css">

	<link rel="stylesheet" href="<?= base_url() ?>nu/css/owl.carousel.min.css">
	<link rel="stylesheet" href="<?= base_url() ?>nu/css/owl.theme.default.min.css">
	<link rel="stylesheet" href="<?= base_url() ?>nu/css/magnific-popup.css">

	<link rel="stylesheet" href="<?= base_url() ?>nu/css/aos.css">

	<link rel="stylesheet" href="<?= base_url() ?>nu/css/ionicons.min.css">

	<link rel="stylesheet" href="<?= base_url() ?>nu/css/bootstrap-datepicker.css">
	<link rel="stylesheet" href="<?= base_url() ?>nu/css/jquery.timepicker.css">


	<link rel="stylesheet" href="<?= base_url() ?>nu/css/flaticon.css">
	<link rel="stylesheet" href="<?= base_url() ?>nu/css/icomoon.css">
	<link rel="stylesheet" href="<?= base_url() ?>nu/css/style.css">
	<link rel="stylesheet" href="<?= base_url() ?>nu/css/sweetalert2.min.css">
	<link rel="stylesheet" href="<?= base_url() ?>nu/css/bootstrap-4.min.css">
	<style>
		/* width */
		::-webkit-scrollbar {
			width: 20px;
		}

		/* Track */
		::-webkit-scrollbar-track {
			box-shadow: inset 0 0 5px grey;
			/* border-radius: 10px; */
		}

		/* Handle */
		::-webkit-scrollbar-thumb {
			background: #82ae46;
			border-radius: 10px;
		}

		/* Handle on hover */
		::-webkit-scrollbar-thumb:hover {
			background: #33cc33;
		}
	</style>
</head>

<body class="goto-here">
	<div class="wrapper">

		<!-- Navbar -->
		<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
			<div class="container">
				<a class="navbar-brand" href="index.html">Apotek Eisda</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="oi oi-menu"></span> Menu
				</button>

				<div class="collapse navbar-collapse" id="ftco-nav">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item active"><a href="<?= base_url() ?>" class="nav-link">Home</a></li>

						<?php $kategori = $this->m_home->get_all_data_kategori(); ?>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Kategori</a>
							<div class="dropdown-menu" aria-labelledby="dropdown04">
								<?php foreach ($kategori as $key => $value) { ?>
									<a class="dropdown-item" href="<?= base_url('home/kategori/' . $value->id_kategori) ?>"><?= $value->nama_kategori ?></a>
								<?php } ?>
							</div>
						</li>
						<!-- <li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
				<li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li> -->
						<li class="nav-item"><a href="<?= base_url('home/contact') ?>" class="nav-link">Contact</a></li>
						<?php $keranjang = $this->cart->contents();
						$jml_item = 0;
						foreach ($keranjang as $key => $value) {
							$jml_item = $jml_item + $value['qty'];
						}
						?>
						<li class="nav-item cta cta-colored"><a href="<?= base_url('belanja') ?>" class="nav-link"><span class="icon-shopping_cart"></span>[<?= $jml_item ?>]</a></li>

						<?php if ($this->session->userdata('email') == "") { ?>
							<li style="margin-top: 18px; margin-left: 10px;" class="nav-item">
								<a href="<?= base_url('pelanggan/login') ?>" class="badge">Login</a> |
								<a href="<?= base_url('pelanggan/register') ?>" class="badge">Register</a>
							</li>
						<?php } else { ?>
							<li style="background-color: darkseagreen;margin-left: 5px;" class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" id="dropdown04" data-toggle="dropdown"><?= $this->session->userdata('nama_pelanggan')  ?></a>
								<div class="dropdown-menu" aria-labelledby="dropdown04">
									<a class="dropdown-item" href="shop.html">Profile</a>
									<a class="dropdown-item" href="<?= base_url('pesanan_saya') ?>">Pesanan Saya</a>
									<a class="dropdown-item" href="<?= base_url('pelanggan/logout') ?>">Logout</a>
								</div>
							</li>
						<?php } ?>
					</ul>
				</div>
			</div>
		</nav>
		<!-- END nav -->
		<!-- /.navbar -->


		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			<!-- Content Header (Page header) -->
			<!-- /.content-header -->
			<!-- Main content -->
			<div class="content" style="margin-left: 50px;
										margin-right: 50px;
										margin-top: 50px;">
				<div class="container-fluid">
					<div class="row">

						<!-- Main content -->
						<div class="invoice p-3 mb-3">
							<!-- title row -->
							<div class="row">
								<div class="col-12">
									<h4>
										<i class="fas fa-shopping-cart"></i> Cekout.
										<small class="float-right">Date: <?= date('d-m-Y') ?></small>
									</h4>
								</div>
								<!-- /.col -->
							</div>
							<!-- info row -->

							<!-- /.row -->

							<!-- Table row -->
							<div class="row">

								<div class="col-12 table-responsive">
									<table class="table table-striped">
										<thead>
											<tr>
												<th>Qty</th>
												<th width="150px" class="text-center">Harga</th>
												<th>Barang</th>
												<th class="text-center">Total Harga</th>
												<th class="text-center">Berat</th>
											</tr>
										</thead>
										<tbody>
											<?php
											$i = 1;
											$tot_berat = 0;
											foreach ($this->cart->contents() as $items) {
												$barang = $this->m_home->detail_barang($items['id']);
												$berat = $items['qty'] * $barang->berat;

												$tot_berat = $tot_berat + $berat;
											?>
												<tr style="background-color: rgba(0, 0, 0, 0.05);">
													<td><?php echo $items['qty']; ?></td>
													<td class="text-center">Rp. <?php echo number_format($items['price'], 0); ?></td>
													<td><?php echo $items['name']; ?></td>
													<td class="text-center">Rp. <?php echo  number_format($items['subtotal'], 0); ?></td>
													<td class="text-center"><?= $berat  ?> Gr</td>
												</tr>
											<?php } ?>

										</tbody>
									</table>
								</div>
								<!-- /.col -->
							</div>
							<!-- /.row -->
							<?php
							echo validation_errors('<div class="alert alert-danger alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>', '</div>');
							?>
							<?php
							echo form_open('belanja/cekout');
							$no_order = date('Ymd') . strtoupper(random_string('alnum', 8));
							?>
							<div class="row">
								<!-- accepted payments column -->
								<div class="col-sm-8 invoice-col">
									Tujuan :
									<div class="row">
										<div class="col-sm-6">
											<div class="form-group">
												<label>Provinsi</label>
												<select name="provinsi" class="form-control"></select>
											</div>
										</div>

										<div class="col-sm-6">
											<div class="form-group">
												<label>Kota/Kabupaten</label>
												<select name="kota" class="form-control"></select>
											</div>
										</div>

										<div class="col-sm-6">
											<div class="form-group">
												<label>Expedisi</label>
												<select name="expedisi" class="form-control"></select>
											</div>
										</div>

										<div class="col-sm-6">
											<div class="form-group">
												<label>Paket</label>
												<select name="paket" class="form-control"></select>
											</div>
										</div>
										<div class="col-sm-8">
											<div class="form-group">
												<label>Alamat</label>
												<input name="alamat" class="form-control" required>
											</div>
										</div>
										<div class="col-sm-4">
											<div class="form-group">
												<label>Kode POS</label>
												<input name="kode_pos" class="form-control" required>
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label>Nama Penerima</label>
												<input name="nama_penerima" class="form-control" required>
											</div>
										</div>
										<div class="col-sm-6">
											<div class="form-group">
												<label>HP Penerima</label>
												<input name="hp_penerima" class="form-control" required>
											</div>
										</div>
									</div>
								</div>
								<!-- /.col -->
								<div class="col-4">
									<table class="table" style="min-width: auto !important; text-align: start;">
										<tr>
											<th style="width:50%">Grand Total:</th>
											<th>Rp. <?php echo number_format($this->cart->total(), 0); ?></th>
										</tr>
										<tr>
											<th>Berat:</th>
											<th><?= $tot_berat ?> Gr</th>
										</tr>
										<tr>
											<th>Ongkir:</th>
											<th><label id="ongkir"></label></th>
										</tr>
										<tr>
											<th>Total Bayar:</th>
											<th><label id="total_bayar"></label></th>
										</tr>
									</table>
								</div>
								<!-- /.col -->
							</div>
							<!-- /.row -->

							<!-- Simpan Transaksi -->
							<input name="no_order" value="<?= $no_order ?>" hidden>
							<input name="estimasi" hidden>
							<input name="ongkir" hidden>
							<input name="berat" value="<?= $tot_berat ?>" hidden><br>
							<input name="grand_total" value="<?= $this->cart->total() ?>" hidden>
							<input name="total_bayar" hidden>
							<!-- end Simpan Transaksi -->
							<!-- Simpan Rinci Transaksi -->
							<?php
							$i = 1;
							foreach ($this->cart->contents() as $items) {
								echo form_hidden('qty' . $i++, $items['qty']);
							}

							?>
							<!-- end Simpan Rinci Transaksi -->
							<div class="row no-print">
								<div class="col-12">
									<a href="<?= base_url('belanja')  ?>" class="btn btn-warning"><i class="fas fa-backward"></i> Kembali Ke Keranjang</a>
									<button type="submit" class="btn btn-primary float-right" style="margin-right: 5px;">
										<i class="fas fa-shopping-cart"></i> Proses Cekout
									</button>
								</div>
							</div>
							<?php echo form_close() ?>
						</div>




						<script>
							$(document).ready(function() {
								//masukkan data ke selec provinsi
								$.ajax({
									type: "POST",
									url: "<?= base_url('rajaongkir/provinsi') ?>",
									success: function(hasil_provinsi) {
										//console.log(hasil_provinsi);
										$("select[name=provinsi]").html(hasil_provinsi);
									}
								});

								//masukkan data ke selec kota
								$("select[name=provinsi]").on("change", function() {
									var id_provinsi_terpilih = $("option:selected", this).attr("id_provinsi");
									$.ajax({
										type: "POST",
										url: "<?= base_url('rajaongkir/kota') ?>",
										data: 'id_provinsi=' + id_provinsi_terpilih,
										success: function(hasil_kota) {
											$("select[name=kota]").html(hasil_kota);
										}
									});
								});

								$("select[name=kota]").on("change", function() {
									$.ajax({
										type: "POST",
										url: "<?= base_url('rajaongkir/expedisi') ?>",
										success: function(hasil_expedisi) {
											$("select[name=expedisi]").html(hasil_expedisi);
										}
									});
								});

								//mendapatkan data paket
								$("select[name=expedisi]").on("change", function() {
									//mendapatkan expedisi terpilih
									var expedisi_terpilih = $("select[name=expedisi]").val()
									// mendapatkan id kota tujuan terpilih
									var id_kota_tujuan_terpilih = $("option:selected", "select[name=kota]").attr('id_kota');
									//mengambil data ongkos kirim
									var total_berat = <?= $tot_berat ?>;

									$.ajax({
										type: "POST",
										url: "<?= base_url('rajaongkir/paket') ?>",
										data: 'expedisi=' + expedisi_terpilih + '&id_kota=' + id_kota_tujuan_terpilih + '&berat=' + total_berat,
										success: function(hasil_paket) {
											$("select[name=paket]").html(hasil_paket);
										}
									});
								});

								//
								$("select[name=paket]").on("change", function() {
									//menampilkan ongkir
									var dataongkir = $("option:selected", this).attr('ongkir');
									var reverse = dataongkir.toString().split('').reverse().join(''),
										ribuan_ongkir = reverse.match(/\d{1,3}/g);
									ribuan_ongkir = ribuan_ongkir.join(',').split('').reverse().join('');

									$("#ongkir").html("Rp. " + ribuan_ongkir)
									//menghitung totol Bayar
									var data_total_bayar = parseInt(dataongkir) + parseInt(<?= $this->cart->total() ?>);
									var reverse2 = data_total_bayar.toString().split('').reverse().join(''),
										ribuan_total_bayar = reverse2.match(/\d{1,3}/g);
									ribuan_total_bayar = ribuan_total_bayar.join(',').split('').reverse().join('');
									$("#total_bayar").html("Rp. " + ribuan_total_bayar);

									//estimasi dan ongkir
									var estimasi = $("option:selected", this).attr('estimasi');
									$("input[name=estimasi]").val(estimasi);
									$("input[name=ongkir]").val(dataongkir);
									$("input[name=total_bayar]").val(data_total_bayar);
								});




							});
						</script>
					</div>
					<!-- /.row -->
				</div><!-- /.container-fluid -->
			</div>
			<!-- /.content -->
		</div>
		<!-- /.content-wrapper -->

		<footer class="ftco-footer ftco-section">
			<div class="container">
				<div class="row">
					<div class="mouse">
						<a href="#" class="mouse-icon">
							<div class="mouse-wheel"><span class="ion-ios-arrow-up"></span></div>
						</a>
					</div>
				</div>
				<div class="row mb-5">
					<div class="col-md">
						<div class="ftco-footer-widget mb-4">
							<h2 class="ftco-heading-2">Vegefoods</h2>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
							<ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
								<li class="ftco-animate"><a href="https://www.instagram.com/inisaya24/"><span class="icon-twitter"></span></a></li>
								<li class="ftco-animate"><a href="https://twitter.com/inisaya24"><span class="icon-facebook"></span></a></li>
								<li class="ftco-animate"><a href="https://facebook.com/inisaya24"><span class="icon-instagram"></span></a></li>
							</ul>
						</div>
					</div>
					<div class="col-md">
						<div style="margin-left: 9rem !important;" class="ftco-footer-widget mb-4 ml-md-5">
							<h2 class="ftco-heading-2">Menu</h2>
							<ul class="list-unstyled">
								<li><a href="#" class="py-2 d-block">Shop</a></li>
								<li><a href="#" class="py-2 d-block">About</a></li>
								<li><a href="#" class="py-2 d-block">Journal</a></li>
								<li><a href="#" class="py-2 d-block">Contact Us</a></li>
							</ul>
						</div>
					</div>

					<div class="col-md">
						<div class="ftco-footer-widget ml-5 mb-4">
							<h2 class="ftco-heading-2">Have a Questions?</h2>
							<div class="block-23 mb-3">
								<ul>
									<li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
									<li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
									<li><a href="#"><span class="icon icon-envelope"></span><span class="text">apotekeisda24@gmail.com</span></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 text-center">

						<p>
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							Copyright &copy;<script>
								document.write(new Date().getFullYear());
							</script> All rights reserved <i class="icon-heart color-danger" aria-hidden="true"></i> by Apotek Eisda
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						</p>
					</div>
				</div>
			</div>
		</footer>



		<!-- loader -->
		<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
				<circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
				<circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" />
			</svg></div>


		<script src="  <?= base_url() ?>nu/js/jquery.min.js"></script>
		<script src="  <?= base_url() ?>nu/js/jquery-migrate-3.0.1.min.js"></script>
		<script src="  <?= base_url() ?>nu/js/popper.min.js"></script>
		<script src="  <?= base_url() ?>nu/js/bootstrap.min.js"></script>
		<script src="  <?= base_url() ?>nu/js/jquery.easing.1.3.js"></script>
		<script src="  <?= base_url() ?>nu/js/jquery.waypoints.min.js"></script>
		<script src="  <?= base_url() ?>nu/js/jquery.stellar.min.js"></script>
		<script src="  <?= base_url() ?>nu/js/owl.carousel.min.js"></script>
		<script src="  <?= base_url() ?>nu/js/jquery.magnific-popup.min.js"></script>
		<script src="  <?= base_url() ?>nu/js/aos.js"></script>
		<script src="  <?= base_url() ?>nu/js/jquery.animateNumber.min.js"></script>
		<script src="  <?= base_url() ?>nu/js/bootstrap-datepicker.js"></script>
		<script src="  <?= base_url() ?>nu/js/scrollax.min.js"></script>
		<script src="  <?= base_url() ?>nu/https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
		<script src="  <?= base_url() ?>nu/js/google-map.js"></script>
		<script src="  <?= base_url() ?>nu/js/main.js"></script>
		<script src="<?= base_url() ?>nu/js/sweetalert2.min.js"></script>

		<script>
			const scriptURL = 'https://script.google.com/macros/s/AKfycbzW0KGT4D4b_zH73TkP-qlwNckSwvCao8UeBHM5pv6GwCYlZmDQu7ExZw8wBJMxeLSqog/exec'
			const form = document.forms['submit-to-google-sheet']
			const btnKirim = document.querySelector('.btn-kirim');
			const btnLoading = document.querySelector('.btn-loading');
			const myAlert = document.querySelector('.my-alert');

			form.addEventListener('submit', e => {
				e.preventDefault();
				btnLoading.classList.toggle('d-none');
				btnKirim.classList.toggle('d-none');
				fetch(scriptURL, {
						method: 'POST',
						body: new FormData(form)
					})
					.then(response => {
						btnLoading.classList.toggle('d-none');
						btnKirim.classList.toggle('d-none');
						myAlert.classList.toggle('d-none');
						form.reset();
						console.log('Success!', response)
					})
					.catch(error => console.error('Error!', error.message));
			})
		</script>
		<script type="text/javascript">
			$(function() {
				const Toast = Swal.mixin({
					toast: true,
					position: 'top-end',
					showConfirmButton: false,
					timer: 3000
				});

				$('.swalDefaultSuccess').click(function() {
					Toast.fire({
						icon: 'success',
						title: 'Berhasil Ditambahkan ke Keranjang'
					})
				});
				$('.swalDefaultInfo').click(function() {
					Toast.fire({
						icon: 'info',
						title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
					})
				});
				$('.swalDefaultError').click(function() {
					Toast.fire({
						icon: 'error',
						title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
					})
				});
				$('.swalDefaultWarning').click(function() {
					Toast.fire({
						icon: 'warning',
						title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
					})
				});
				$('.swalDefaultQuestion').click(function() {
					Toast.fire({
						icon: 'question',
						title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
					})
				});

				$('.toastrDefaultSuccess').click(function() {
					toastr.success('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
				});
				$('.toastrDefaultInfo').click(function() {
					toastr.info('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
				});
				$('.toastrDefaultError').click(function() {
					toastr.error('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
				});
				$('.toastrDefaultWarning').click(function() {
					toastr.warning('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
				});

				$('.toastsDefaultDefault').click(function() {
					$(document).Toasts('create', {
						title: 'Toast Title',
						body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
					})
				});
				$('.toastsDefaultTopLeft').click(function() {
					$(document).Toasts('create', {
						title: 'Toast Title',
						position: 'topLeft',
						body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
					})
				});
				$('.toastsDefaultBottomRight').click(function() {
					$(document).Toasts('create', {
						title: 'Toast Title',
						position: 'bottomRight',
						body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
					})
				});
				$('.toastsDefaultBottomLeft').click(function() {
					$(document).Toasts('create', {
						title: 'Toast Title',
						position: 'bottomLeft',
						body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
					})
				});
				$('.toastsDefaultAutohide').click(function() {
					$(document).Toasts('create', {
						title: 'Toast Title',
						autohide: true,
						delay: 750,
						body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
					})
				});
				$('.toastsDefaultNotFixed').click(function() {
					$(document).Toasts('create', {
						title: 'Toast Title',
						fixed: false,
						body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
					})
				});
				$('.toastsDefaultFull').click(function() {
					$(document).Toasts('create', {
						body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.',
						title: 'Toast Title',
						subtitle: 'Subtitle',
						icon: 'fas fa-envelope fa-lg',
					})
				});
				$('.toastsDefaultFullImage').click(function() {
					$(document).Toasts('create', {
						body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.',
						title: 'Toast Title',
						subtitle: 'Subtitle',
						image: '../../dist/img/user3-128x128.jpg',
						imageAlt: 'User Picture',
					})
				});
				$('.toastsDefaultSuccess').click(function() {
					$(document).Toasts('create', {
						class: 'bg-success',
						title: 'Toast Title',
						subtitle: 'Subtitle',
						body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
					})
				});
				$('.toastsDefaultInfo').click(function() {
					$(document).Toasts('create', {
						class: 'bg-info',
						title: 'Toast Title',
						subtitle: 'Subtitle',
						body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
					})
				});
				$('.toastsDefaultWarning').click(function() {
					$(document).Toasts('create', {
						class: 'bg-warning',
						title: 'Toast Title',
						subtitle: 'Subtitle',
						body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
					})
				});
				$('.toastsDefaultDanger').click(function() {
					$(document).Toasts('create', {
						class: 'bg-danger',
						title: 'Toast Title',
						subtitle: 'Subtitle',
						body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
					})
				});
				$('.toastsDefaultMaroon').click(function() {
					$(document).Toasts('create', {
						class: 'bg-maroon',
						title: 'Toast Title',
						subtitle: 'Subtitle',
						body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
					})
				});
			});
		</script>
		<script>
			$(document).ready(function() {
				//masukkan data ke selec provinsi
				$.ajax({
					type: "POST",
					url: "<?= base_url('rajaongkir/provinsi') ?>",
					success: function(hasil_provinsi) {
						//console.log(hasil_provinsi);
						$("select[name=provinsi]").html(hasil_provinsi);
					}
				});

				//masukkan data ke selec kota
				$("select[name=provinsi]").on("change", function() {
					var id_provinsi_terpilih = $("option:selected", this).attr("id_provinsi");
					$.ajax({
						type: "POST",
						url: "<?= base_url('rajaongkir/kota') ?>",
						data: 'id_provinsi=' + id_provinsi_terpilih,
						success: function(hasil_kota) {
							$("select[name=kota]").html(hasil_kota);
						}
					});
				});

				$("select[name=kota]").on("change", function() {
					$.ajax({
						type: "POST",
						url: "<?= base_url('rajaongkir/expedisi') ?>",
						success: function(hasil_expedisi) {
							$("select[name=expedisi]").html(hasil_expedisi);
						}
					});
				});

				//mendapatkan data paket
				$("select[name=expedisi]").on("change", function() {
					//mendapatkan expedisi terpilih
					var expedisi_terpilih = $("select[name=expedisi]").val()
					// mendapatkan id kota tujuan terpilih
					var id_kota_tujuan_terpilih = $("option:selected", "select[name=kota]").attr('id_kota');
					//mengambil data ongkos kirim
					var total_berat = <?= $tot_berat ?>;

					$.ajax({
						type: "POST",
						url: "<?= base_url('rajaongkir/paket') ?>",
						data: 'expedisi=' + expedisi_terpilih + '&id_kota=' + id_kota_tujuan_terpilih + '&berat=' + total_berat,
						success: function(hasil_paket) {
							$("select[name=paket]").html(hasil_paket);
						}
					});
				});

				//
				$("select[name=paket]").on("change", function() {
					//menampilkan ongkir
					var dataongkir = $("option:selected", this).attr('ongkir');
					var reverse = dataongkir.toString().split('').reverse().join(''),
						ribuan_ongkir = reverse.match(/\d{1,3}/g);
					ribuan_ongkir = ribuan_ongkir.join(',').split('').reverse().join('');

					$("#ongkir").html("Rp. " + ribuan_ongkir)
					//menghitung totol Bayar
					var data_total_bayar = parseInt(dataongkir) + parseInt(<?= $this->cart->total() ?>);
					var reverse2 = data_total_bayar.toString().split('').reverse().join(''),
						ribuan_total_bayar = reverse2.match(/\d{1,3}/g);
					ribuan_total_bayar = ribuan_total_bayar.join(',').split('').reverse().join('');
					$("#total_bayar").html("Rp. " + ribuan_total_bayar);

					//estimasi dan ongkir
					var estimasi = $("option:selected", this).attr('estimasi');
					$("input[name=estimasi]").val(estimasi);
					$("input[name=ongkir]").val(dataongkir);
					$("input[name=total_bayar]").val(data_total_bayar);
				});




			});
		</script>
</body>

</html>