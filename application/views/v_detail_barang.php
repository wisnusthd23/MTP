<section class="ftco-section">
	<div class="container">
		<div class="row">

			<div class="col-lg-6 mb-5 ftco-animate">
				<a href="<?= base_url('assets/gambar/' . $barang->gambar) ?>" class="image-popup"><img src="<?= base_url('assets/gambar/' . $barang->gambar) ?>" class="img-fluid"></a>
			</div>
			<div class="col-lg-6 product-details pl-md-5 ftco-animate">
				<h3><?= $barang->nama_barang ?></h3>
				<p class="price">Rp.<span><?= number_format($barang->harga, 0) ?></span></p>
				<p><?= $barang->deskripsi ?></p>


				<hr>
				<div class="row">
					<div class="col-lg-6">
						<h5 class="heading">Indikasi / Manfaat / Kegunaan :</h5>
						<p><?= $barang->manfaat ?></p>
					</div>
					<div class="col-lg-6">
						<h5 class="heading">Komposisi :</h5>
						<p><?= $barang->komposisi ?></p>
					</div>
				</div>

				<hr>
				<?php
				echo form_open('belanja/add');
				echo form_hidden('id', $barang->id_barang);
				echo form_hidden('price', $barang->harga);
				echo form_hidden('name', $barang->nama_barang);
				echo form_hidden('redirect_page', str_replace('index.php/', '', current_url()));
				?>
				<div class="w-100"></div>
				<div class="input-group col-md-6 d-flex mb-3">
					<input type="number" class="form-control" value="1" min="1" name="qty">
				</div>

				<hr>
				<button type="submit" class="btn-success swalDefaultSuccess">Add to Cart</button>

				<?php echo form_close(); ?>
			</div>
		</div>
	</div>
</section>