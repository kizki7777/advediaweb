<?php $this->load->view('_layouts/vp-header'); ?>

	<!-- slider -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/slider/slide.css">		
	<script type="text/javascript" src="<?php echo base_url()?>assets/js/slider/modernizr.custom.28468.js"></script>
	<noscript>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/slider/nojs.css">
	</noscript>
	<!-- ./slider -->

	<div class="container">
		
		<header class="header" role="banner">							
			<?php $this->load->view('_menu/top'); ?>			
		</header>

		<div class="content" role="main">
			<div class="figure figure--pencil">							

				<div id="da-slider" class="da-slider">
					<div class="da-slide">
						<div class="da-img">
							<img src="<?php echo base_url()?>assets/img/1.png" alt="image01" />
						</div>
						<h2>Simplicity</h2>
						<p>Aku berpikir maka aku ada<br>- Rene Descartes<br><br>Dan kami percaya, bahwa keberadaan kami dapat dimaknai sebagai sebuah ide pencapaian kualitas hidup di dalam sebuah kesederhanaan</p>									
					</div>
					<div class="da-slide">
						<h2>Designizer</h2>
						<p>Melalui penentuan fungsi yang mendasari pemilihan isi, bentuk, tata letak dan pengaturan tampilan.</p>
						<div class="da-img">
							<img src="<?php echo base_url()?>assets/img/2.png" alt="image01" />
						</div>
					</div>
					<div class="da-slide">
						<h2>Development</h2>
						<p>Serta kombinasi antara logika, alur dan bahasa pemrograman.</p>
						<div class="da-img">
							<img src="<?php echo base_url()?>assets/img/3.png" alt="image01" />
						</div>
					</div>
					<div class="da-slide">
						<h2>Result</h2>
						<p>Sehingga menciptakan sebuah alat yang mendukung kesederhanaan dan kemudahan dari pencapaian kualitas hidup.</p>
						<a href="#" class="da-link">see our work</a>
						<div class="da-img">
							<img src="<?php echo base_url()?>assets/img/4.png" alt="image01" />
						</div>
					</div>
					<nav class="da-arrows">
						<span class="da-arrows-prev"></span>
						<span class="da-arrows-next"></span>
					</nav>
				</div>

			</div>
		</div>
		
	</div> <!-- ./ container -->

<?php $this->load->view('_layouts/footer'); ?>