<div class="hero-wrap hero-bread" style="background-image: url('<?= base_url() ?>nu/images/background4.jpg');">
	<div class="container">
		<div class="row no-gutters slider-text align-items-center justify-content-center">
			<div class="col-md-9 ftco-animate text-center">
				<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Cart</span></p>
				<h1 class="mb-0 bread">My Cart</h1>
			</div>
		</div>
	</div>
</div>

<section class="ftco-section ftco-cart">
	<div class="container">
		<div class="row">
			<div class="col-md-12 ftco-animate">
				<?php

				if ($this->session->flashdata('belanja')) {
					echo '<div class="alert alert-success alert-dismissible">
<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
<h5><i class="icon fas fa-check"></i>';
					echo $this->session->flashdata('belanja');
					echo '</h5>
</div>';
				}
				?>
				<div class="cart-list">
					<?php echo form_open('belanja/update'); ?>

					<table cellpadding="6" cellspacing="1" style="width:100%" border="1">

						<tr>
							<th style="width: 75px;">QTY</th>
							<th>Nama Barang</th>
							<th>Berat (mg)</th>
							<th style="text-align:right">Harga</th>
							<th style="text-align:right">Sub-Total</th>
							<th class="text-center">Action</th>
						</tr>

						<?php $i = 1; ?>

						<?php
						$totalbrt = 0;
						foreach ($this->cart->contents() as $items) {
							$barang = $this->m_home->detail_barang($items['id']);
							$berat = $items['qty'] * $barang->berat;
							$totalbrt = $totalbrt + $berat;
						?>

							<?php echo form_hidden($i . '[rowid]', $items['rowid']); ?>

							<tr>
								<td><?php echo form_input(array(
										'name' => $i . '[qty]',
										'value' => $items['qty'],
										'maxlength' => '3',
										'min' => '0',
										'size' => '5',
										'type' => 'number',
										'class' => 'form-control'
									)); ?></td>
								<td>
									<?php echo $items['name']; ?>
								</td>
								<td><?= $berat; ?></td>
								<td style="text-align:right">Rp.<?php echo $this->cart->format_number($items['price']); ?></td>
								<td style="text-align:right">Rp.<?php echo $this->cart->format_number($items['subtotal']); ?></td>
								<td class="text-center">
									<a href="<?= base_url('belanja/delete/' . $items['rowid']) ?>" class="badge badge-danger">Hapus</a>
								</td>
							</tr>

							<?php $i++; ?>

						<?php } ?>

						<tr>
							<td colspan="1"> </td>
							<td class="right"><strong>Total</strong></td>
							<td class="right">
								<h3><?= $totalbrt ?></h3>
							</td>
							<td class="right"><strong>Total</strong></td>
							<td class="right">
								<h3>Rp.<?php echo $this->cart->format_number($this->cart->total()); ?></h3>
							</td>
						</tr>

					</table>
					<div class="mt-3 mb-3">
						<button style="width: 111px;height: 39px !important;color:white !important" type="submit" href="" class="btn btn-success">Update Cart</button>
						<a href="<?= base_url('belanja/deleteAll') ?>" class="btn btn-danger">Hapus Belanjaan</a>
						<a href="<?= base_url('belanja/cekout') ?>" class="btn btn-success"> Check Out</a>
					</div>
					<?php echo form_close(); ?>
				</div>
			</div>
		</div>

	</div>
</section>