<!doctype html>
<!--[if lt IE 7]><html class="viewport no-js lt-ie9 lt-ie8 lt-ie7" lang="en"><![endif]-->
<!--[if IE 7]><html class="viewport no-js lt-ie9 lt-ie8" lang="en"><![endif]-->
<!--[if IE 8]><html class="viewport no-js lt-ie9" lang="en"><![endif]-->
<!--[if gt IE 8]><!--><html class="viewport no-js no-ie" lang="en"><!--<![endif]-->
<head>
	<meta charset="utf-8">
	<title><?php echo $meta_title ?> | <?php echo $this->config->item("app_name"); ?></title>
	<!-- <meta name="viewport" content="width=device-width,initial-scale=1"> -->
	<link rel="icon" type="image/png" href="<?php echo base_url() ?>assets/img/favico.png" />
		<!--[if lte IE 8]>
	    <link rel="stylesheet" href="css/ie.css" media="screen">
	    <link rel="stylesheet" href="css/print.css" media="print">
	    <script src="js/libs/selectivizr-min.js"></script>
		<![endif]-->
		<!--[if gt IE 8]><!-->
	    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/screen.css">
	    <!--<![endif]-->
		<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/print.css" media="print">
		<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/advedia.css" media="screen">
		<script type='text/javascript' src='<?php echo base_url()?>assets/js/jquery.min.js'></script>
		<script type='text/javascript' src='<?php echo base_url()?>assets/js/scripts.min.js'></script>

		<!-- parallax slider -->
		<script type="text/javascript" src="<?php echo base_url()?>assets/js/slider/jquery.cslider.js"></script>
		<script type="text/javascript">
			$(function() {
			
				$('#da-slider').cslider({
					autoplay	: true,
					bgincrement	: 450
				});
			
			});
		</script>
		<!-- ./parallax slider -->

		<!--<script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery.color.js"></script>-->

		<script>
			 $(document).ready(function() {
			  var rainbows = [
			    "#D62323";
				"#007BED";
				"#F4A500";
				"#34AB00";
				"#1B49BE";
			  ];
			  
			  var property   = "background:";
			  var randNum     = Math.floor(Math.random() * (8 - 0 + 1)) + 0; /* http://stackoverflow.com/a/1527834/477958 */
			  
			  var newRainbows = property + rainbows[randNum];

			  $('#welcome').attr('style',newRainbows);
			});
		</script>
		<script src="<?php echo base_url() ?>assets/js/libs/modernizr-2.5.3.min.js"></script>
		<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
</head>

	<body id="welcome" style="">
		<div class="outer">
			<div id="inner-wrap">

				<!-- slider -->
				<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/slider/slide.css">		
				<script type="text/javascript" src="<?php echo base_url()?>assets/js/slider/modernizr.custom.28468.js"></script>
				<noscript>
				<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/slider/nojs.css">
				</noscript>
				<!-- ./slider -->

				<div class="container">
					
					<header class="header">							
						<?php $this->load->view('_menu/top'); ?>			
					</header>

					<div class="content" role="main">
						<div class="figure figure--pencil">							

							<div id="da-slider" class="da-slider">
								<div class="da-slide">
									<div class="da-img">
										<img src="<?php echo base_url()?>assets/img/1.png" alt="image01" />
									</div>
									<h2>Idea of Simplicity</h2>
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

			</div> <!-- ./inner-wrap -->
		</div> <!-- ./outer -->

		

		<div class="back-to-top" href="#top">
			<!-- <img src="<?php echo base_url() ?>assets/img/icon-top.png"> -->
		</div>
	</body>
</html>