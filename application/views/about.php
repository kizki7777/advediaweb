<?php $this->load->view('_layouts/header'); ?>

<div class="page bg--red" style="background-image:url()">
	<?php $this->load->view('_menu/top'); ?>

	<div class="page__body constrict greeting">
		<div class="welcome-right">
			<h1>Collaboration</h1>
			<p><?php echo lang('content.about.1'); ?></p>
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
			<p><?php echo lang('content.about.2'); ?></p>
			<p><?php echo lang('content.about.3'); ?></p>
		</article>
	</div>	
</section>

<h2 class="dividing-header">Become different is a must!</h2>

<section  class="page bg--grey--dark scheme--red "  >	
	<div class="page__body constrict" style="">
		<article class="block-intro">
			<p><?php echo lang('content.about.4'); ?></p>
		</article>
		<div class="grid">			
			<div class="grid__cell unit-1-2--bp1 unit-1-3--bp4">
				<article class="panel">					
					<div class="panel__icon"><img src="<?php echo base_url() ?>assets/img/gq.png"></div>
					<header class="panel__header">
						<h2 class="panel__title">Good Quality</h2>
					</header>
					<p><?php echo lang('content.about.5'); ?></p>
				</article>
			</div>
			<div class="grid__cell unit-1-2--bp1 unit-1-3--bp4">
				<article class="panel">
					<div class="panel__icon"><img src="<?php echo base_url() ?>assets/img/gs.png"></div>
					<header class="panel__header">
						<h2 class="panel__title">Good Service</h2>
					</header>
					<p><?php echo lang('content.about.6'); ?></p>
				</article>
			</div>
			<div class="grid__cell unit-1-2--bp1 unit-1-3--bp4">
				<article class="panel">
					<div class="panel__icon"><img src="<?php echo base_url() ?>assets/img/prf.png"></div>
					<header class="panel__header">
						<h2 class="panel__title">Professionalism</h2>
					</header>
					<p><?php echo lang('content.about.7'); ?></p>
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