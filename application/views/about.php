<?php $this->load->view('_layouts/header'); ?>

<div class="page bg--red" style="background-image:url()">
	<header class="header constrict" role="banner">
		<?php $this->load->view('_menu/top'); ?>
	</header>

	<div class="page__body constrict greeting">
		<div class="welcome-right">
			<h1>Collaboration</h1>
			<p>Kami percaya bahwa di dunia ini terdapat keterkaitan antara satu hal dengan yang lainnya. dan kreativitas adalah kemampuan untuk menemukan keterkaitan itu dan mengembangkannya.</p>
		</div>
		<div class="welcome-left">
			<img src="<?php echo base_url() ?>assets/img/gear.png">
		</div>
	</div>
</div>

<section class="page bg--grey links--red page--overflow adv-grey">
	<div class="page__body constrict">
		<article class="copy-block copy-block--right">
			<h2 class="block-heading">Prologue</h2>
			<p>Kami percaya bahwa salah satu modal terbesar perusahaan adalah hubungan baik antar pihak terkait yang diwujudkan dalam komunikasi. Seiring dengan perkembangan teknologi, teknologi komunikasi dan teknologi informasi semakin terkait erat. Keduanya menjadi seperti satu bagian yang tak terpisahkan. Itu artinya perusahaan perlu mengelola kedua hal itu supaya hubungan baik dapat terus tumbuh dan berkembang.</p>
			<p>Hal itulah yang mendorong keberadaan kami, Advedia Solusi Informatika sebagai sebuah perusahaan yang menawarkan jasa pengelolaan di bidang ICT (Information and Communication Technology) khususnya pengembangan software.</p>
		</article>
	</div>	
</section>

<h2 class="dividing-header">Become different is a must!</h2>

<section  class="page bg--grey--dark scheme--red "  >	
	<div class="page__body constrict">
		<div class="grid">
			<div class="grid__cell unit-1-2--bp1 unit-1-3--bp4">
				<article class="panel">					
					<div class="panel__icon"><img src="<?php echo base_url() ?>assets/img/gq.png"></div>
					<header class="panel__header">
						<h2 class="panel__title">Good Quality</h2>
					</header>
					<p>Kami meyakini bahwa produk yang berkualitas dihasilkan melalui proses yang baik. Oleh karena itu kami menjaga betul setiap tahapan dari setiap pengerjaan produk.</p>
				</article>
			</div>
			<div class="grid__cell unit-1-2--bp1 unit-1-3--bp4">
				<article class="panel">
					<div class="panel__icon"><img src="<?php echo base_url() ?>assets/img/gs.png"></div>
					<header class="panel__header">
						<h2 class="panel__title">Good Service</h2>
					</header>
					<p>Bagi kami, produk yang baik saja tidak cukup. Oleh karena itu, kami berupaya memaksimalkan kepuasan klien dengan memberikan pelayanan yang baik.</p>
				</article>
			</div>
			<div class="grid__cell unit-1-2--bp1 unit-1-3--bp4">
				<article class="panel">
					<div class="panel__icon"><img src="<?php echo base_url() ?>assets/img/prf.png"></div>
					<header class="panel__header">
						<h2 class="panel__title">Professionalism</h2>
					</header>
					<p>Dalam proses pengerjaan produk yang berkualitas dan pemenuhan pelayanan yang baik, kita dapat menghindar dari hambatan dan tantangan. Profesionalisme berarti mampu memilih respon yang tepat karena memiliki pengetahuan dan keahlian yang memadai.</p>
				</article>
			</div>
		</div>
	</div>
</section>

<footer class="master-footer bg--red none ">
	<div class="container">
		<div class="logo logo--footer">
			<img width="154" height="54" class="logo__graphic" src="<?php echo base_url() ?>assets/img/logo1.png" alt="Mixd">
			<!-- <span class="logo__tagline"><?php echo $this->config->item("app_tagline"); ?></span> -->
		</div>
		<div class="footer-info">
			<small class="footer__smallprint">
				Email us at <a href="mailto:company@advedia.net">company@advedia.net</a><br/>
				call us: +62 21 - 7599 9949
			</small>
		</div>
	</div>
</footer>

<?php $this->load->view('_layouts/footer'); ?>