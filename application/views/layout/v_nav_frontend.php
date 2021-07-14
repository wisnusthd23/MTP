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
				<li class="nav-item"><a href="<?= base_url('resep') ?>" class="nav-link">Resep Obat</a></li>
				<?php $keranjang = $this->cart->contents();
				$jml_item = 0;
				foreach ($keranjang as $key => $value) {
					$jml_item = $jml_item + $value['qty'];
				}
				?>
				<li class="nav-item cta cta-colored"><a href="<?= base_url('belanja') ?>" class="nav-link"><span class="icon-shopping_cart"></span>[<?= $jml_item ?>]</a></li>

				<?php if ($this->session->userdata('email') == "") { ?>
					<li style="margin-top: 18px; margin-left: 10px;" class="nav-item">
						<a href="<?= base_url('pelanggan') ?>" class="badge">Login</a> |
						<a href="<?= base_url('pelanggan/register') ?>" class="badge">Register</a>
					</li>
				<?php } else { ?>
					<li style="background-color: darkseagreen;margin-left: 5px;" class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" id="dropdown04" data-toggle="dropdown"><?= $user['name']; ?></a>
						<div class="dropdown-menu" aria-labelledby="dropdown04">
							<a class="dropdown-item" href="<?= base_url('pelanggan/profile') ?>">Profile</a>
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