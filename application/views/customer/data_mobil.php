<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('<?php echo base_url('assets/assets_shop2') ?>/images/bg_3.jpg');" data-stellar-background-ratio="0.5">
	<div class="overlay"></div>
	<div class="container">
		<div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
			<div class="col-md-9 ftco-animate pb-5">
				<p class="breadcrumbs"><span class="mr-2"><a href="<?php echo base_url('customer/dashboard') ?>">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Cars <i class="ion-ios-arrow-forward"></i></span></p>
				<h1 class="mb-3 bread">Pilih Mobilmu !</h1>
			</div>
		</div>
	</div>
</section>

<div class="container mt-4">
	<?php echo $this->session->flashdata('pesan')?>
	<div class="row">
		<?php foreach ($mobil as $mb) : ?>
			<div class="col-md-4">
				<div class="card mb-4">
					<img src="<?php echo base_url('assets/upload/' . $mb->gambar) ?>" class="card-img-top" alt="...">
					<div class="card-body">
						<h5 class="card-title"><?php echo($mb->merk)?></h5>
						<p class="card-text">Rp. <?php echo number_format($mb->harga,0,',','.')?>/ Hari</p>
						<p class="card-text">Tersedia : 3 Hari</p>
							<?php if($mb->status == "1"){
								echo anchor('customer/rental/
								tambah_rental/'.$mb->id_mobil,'<span class="btn btn-primary">Rental</span>');
							}else {
								echo '<span class="btn btn-danger">Tidak Tersedia</span>';
							}

							?>

						<a href="<?php echo base_url('customer/data_mobil/detail_mobil/'.$mb->id_mobil) ?>" class="btn btn-secondary">Detail</a>
					</div>
				</div>
			</div>
		<?php endforeach; ?>
	</div>
</div>