<?php $this->load->view('_layouts/header'); ?>

<div class="page " style="background-image:url()">
	<header class="header constrict" role="banner">
		<?php $this->load->view('_menu/top'); ?>
	</header>

	<div class="page__body constrict greeting">
		<div class="welcome-right">
			<h1>Appreciate</h1>
			<p>Kami meyakini bahwa setiap perusahaan memiliki kebutuhan yang unik dan berbeda. Kemauan dan kemampuan untuk memahami mengarahkan kami pada penyediaan solusi yang berarti.</p>
		</div>
		<div class="welcome-left">
			<img src="<?php echo base_url() ?>assets/img/indera.png">
		</div>
	</div>
</div>

<section  class="page bg--yellow links--red page--overflow adv-yellow"  >
	<div class="page__body constrict">
		<article class="copy-block copy-block--right">
			<h1 class="block-heading">01</h1>
			<br>
			<h2 class="block-heading">Research</h2>
			<p>Tahapan ini merupakan tahapan awal yang berdampak besar terhadap tahapan berikutnya. Pada tahapan ini, kami mencoba untuk memahami dan menggali informasi mengenai apa yang menjadi kebutuhan klien dalam hal teknologi informasi dan komunikasi. Hal tersebut dikombinasikan dengan riset mengenai perilaku konsumen yang terkait dengan perusahaan. Semuanya itu berujung kepada pemenuhan harapan klien terhadap kami dan apa yang dapat kami lakukan untuk mereka.</p>
		</article>

		<div class="product product--left product--macbook">
			<img src="<?php echo base_url() ?>assets/img/big-luv.png" alt="South Tees" class="product__mount">
		</div>
	</div>
</section>

<section  class="page bg--grey links--red page--overflow adv-dark-grey"  >
	<div class="page__body constrict">
		<article class="copy-block copy-block--right">
			<h1 class="block-heading">02</h1>
			<br>
			<h2 class="block-heading">Analysis</h2>
			<p>Pada tahapan ini kami mencoba untuk menemukan kesenjangan atau perumusan masalah dalam hal pemenuhan kebutuhan dan harapan klien berdasarkan kondisi aktual perusahaan.</p>
		</article>

		<div class="product product--left product--macbook">
			<img src="<?php echo base_url() ?>assets/img/big-ruler.png" alt="South Tees" class="product__mount">
		</div>
	</div>
</section>

<section  class="page bg--grey links--red page--overflow adv-light-grey"  >
	<div class="page__body constrict">
		<article class="copy-block copy-block--right">
			<h1 class="block-heading">03</h1>
			<br>
			<h2 class="block-heading">Visualize</h2>
			<p>Dari analisa tersebut, kami mencoba untuk memvisualisasikan rancangan dari produk teknologi informasi yang tertuang dalam desain dan konten.</p>
		</article>

		<div class="product product--left product--macbook">
			<img src="<?php echo base_url() ?>assets/img/big-pencil.png" alt="South Tees" class="product__mount">
		</div>
	</div>
</section>

<section  class="page bg--red links--red page--overflow"  >
	<div class="page__body constrict">
		<article class="copy-block copy-block--right">
			<h1 class="block-heading">04</h1>
			<br>
			<h2 class="block-heading">Develop</h2>
			<p>Tahap terakhir adalah penuangan visualisasi rancangan desain dan konten ke dalam logika dan bahasa pemrograman yang sesuai. Kemudian perbaikan yang berkelanjutan untuk mendapatkan kualitas yang sesuai dengan permintaan klien.</p>
		</article>

		<div class="product product--left product--macbook">
			<img src="<?php echo base_url() ?>assets/img/big-helm.png" alt="South Tees" class="product__mount">
		</div>
	</div>
</section>

<h2 class="dividing-header-link">
	<a class="btn-link" href="#">see our works</a>
</h2>

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