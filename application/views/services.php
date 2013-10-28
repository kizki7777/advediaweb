<?php $this->load->view('_layouts/header'); ?>

<div class="page bg--blue" style="background-image:url()">
	<header class="header constrict" role="banner">
		<?php $this->load->view('_menu/top'); ?>
	</header>

	<div class="page__body constrict greeting">
		<div class="welcome-right">
			<h1>Essence</h1>
			<p><?php echo lang('content.service.1') ?></p>
		</div>
		<div class="welcome-left">
			<img src="<?php echo base_url() ?>assets/img/ess.png">
		</div>
	</div>
</div>

<h2 class="dividing-header-yellow">our services</h2>

<section  class="page links--red page--overflow adv-dark-blue">
	<div class="page__body constrict">
		<article class="copy-block copy-block--right">
			<h1 class="block-heading">01</h1>
			<br>
			<h2 class="block-heading">Graphic Design</h2>
			<p><?php echo lang('content.service.2') ?></p>
		</article>
	</div>
</section>

<section  class="page bg--grey links--red page--overflow adv-white"  >
	<div class="page__body constrict">
		<article class="copy-block copy-block--right">
			<h1 class="block-heading">02</h1>
			<br>
			<h2 class="block-heading">Web Design & Development</h2>
			<p><?php echo lang('content.service.3') ?></p>
		</article>
	</div>
</section>

<section  class="page links--red page--overflow"  >
	<div class="page__body constrict">
		<article class="copy-block copy-block--right">
			<h1 class="block-heading">03</h1>
			<br>
			<h2 class="block-heading">Application Development</h2>			
		</article>
	</div>
</section>

<h2 class="dividing-header-big"></h2>

<section  class="page bg--red scheme--red panel-desc">	
	<div class="page__body constrict">
		<div class="grid">
			<div class="grid__cell unit-1-2--bp1 unit-1-3--bp4">
				<article class="panel">					
					<div class="panel__icon"><img src="<?php echo base_url() ?>assets/img/web-app.png"></div>
					<header class="panel__header">
						<h2 class="panel__title">Web Based App</h2>
					</header>
					<p><?php echo lang('content.service.4') ?></p>
				</article>
			</div>
			<div class="grid__cell unit-1-2--bp1 unit-1-3--bp4">
				<article class="panel">
					<div class="panel__icon"><img src="<?php echo base_url() ?>assets/img/mobile-app.png"></div>
					<header class="panel__header">
						<h2 class="panel__title">Mobile App</h2>
					</header>
					<p><?php echo lang('content.service.5') ?></p>
				</article>
			</div>
			<div class="grid__cell unit-1-2--bp1 unit-1-3--bp4">
				<article class="panel">
					<div class="panel__icon"><img src="<?php echo base_url() ?>assets/img/wifi-app.png"></div>
					<header class="panel__header">
						<h2 class="panel__title">Wi-fi App</h2>
					</header>
					<p><?php echo lang('content.service.6') ?></p>
				</article>
			</div>
		</div>
	</div>
</section>

<section  class="page links--red page--overflow adv-custom-grey">
	<div class="page__body constrict">
		<article class="copy-block copy-block--right">
			<h1 class="block-heading">04</h1>
			<br>
			<h2 class="block-heading">Digital Media Placement</h2>
		</article>

		<div class="product product--left product--macbook">
			<article class="copy-block copy-block--right small-article">
				<p><?php echo lang('content.service.7') ?></p>
			</article>			
		</div>		
		<img src="<?php echo base_url() ?>assets/img/placement.png" alt="South Tees" class="product__mount">
	</div>
</section>

<h2 class="dividing-header-link-2">
	<a class="btn-link" href="#">see our works</a>
</h2>

<footer class="master-footer bg--red none ">
	<div class="container">
		<div class="logo logo--footer">
			<img width="154" height="54" class="logo__graphic" src="<?php echo base_url() ?>assets/img/logo1.png" alt="Advedia">
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