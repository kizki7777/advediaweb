<?php $this->load->view('_layouts/header'); ?>

<div class="page bg--red adv-custom-trust">
	<?php $this->load->view('_menu/top'); ?>

	<section  class="page links--red page--overflow adv-transparent">
		<div class="page__body constrict greeting">
			<div class="welcome-right">
				<h1>Trust</h1>
				<p><?php echo lang('content.client.1'); ?></p>		
			</div>
		</div>
	</section>
</div>

<section  class="page bg--grey--dark scheme--red adv-grey"  >	

		<div class="page__body constrict">
			<div class="grid">
				<div class="grid__cell unit-1-2--bp1 unit-1-3--bp4">
					<article class="panel">
						<header class="panel__header">
							<img class="panel__img" src="<?php echo base_url() ?>assets/img/logo-telkom-small.png">
							<div class="panel__hgroup">
								<div class="panel__hgroup__inner">
									<h2 class="panel__title">PT. Telekomunikasi Indonesia</h2>
								</div>
							</div>
						</header>
					</article>
				</div>
				<!-- <div class="grid__cell unit-1-2--bp1 unit-1-3--bp4">
					<article class="panel">
						<header class="panel__header">
							<img class="panel__img" src="<?php echo base_url() ?>assets/img/logo-kpdt-small.png">
							<div class="panel__hgroup">
								<div class="panel__hgroup__inner">
									<h2 class="panel__title">Kementerian Pembangunan Daerah Tertinggal</h2>
								</div>
							</div>
						</header>
					</article>
				</div> -->
				<div class="grid__cell unit-1-2--bp1 unit-1-3--bp4">
					<article class="panel">
						<header class="panel__header">
							<img class="panel__img" src="<?php echo base_url() ?>assets/img/logo-md-small.png">
							<div class="panel__hgroup">
								<div class="panel__hgroup__inner">
									<h2 class="panel__title">Muhammadiyah</h2>
								</div>
							</div>
						</header>
					</article>
				</div>
				<div class="grid__cell unit-1-2--bp1 unit-1-3--bp4">
					<article class="panel">
						<header class="panel__header">
							<img class="panel__img" src="<?php echo base_url() ?>assets/img/logo-unilever-small.png">
							<div class="panel__hgroup">
								<div class="panel__hgroup__inner">
									<h2 class="panel__title">Unilever</h2>
								</div>
							</div>
						</header>
					</article>
				</div>
				<div class="grid__cell unit-1-2--bp1 unit-1-3--bp4">
					<article class="panel">
						<header class="panel__header">
							<img class="panel__img" src="<?php echo base_url() ?>assets/img/logo-yuhelson-small.png">
							<div class="panel__hgroup">
								<div class="panel__hgroup__inner">
									<h2 class="panel__title">Yuhelson & Partners<br>Law Office</h2>
								</div>
							</div>
						</header>
					</article>
				</div>
				<div class="grid__cell unit-1-2--bp1 unit-1-3--bp4">
					<article class="panel">
						<header class="panel__header">
							<a href="#" class="md-trigger" data-modal="modal-1">
								<img class="panel__img" src="<?php echo base_url() ?>assets/img/logo-you-small.png">
							</a>
							<div class="panel__hgroup">
								<div class="panel__hgroup__inner">
									<h2 class="panel__title">And You</h2>
								</div>
							</div>
						</header>
					</article>
				</div>
			</div>
		</div>
	</section>

<footer class="master-footer bg--red none">
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

<!-- MODAL DIALOG -->
<<div class="md-overlay"></div>

<script src="<?php echo base_url() ?>assets/js/classie.js"></script>
<script src="<?php echo base_url() ?>assets/js/modalEffects.js"></script>

<!-- END OF MODAL DIALOG -->

<?php $this->load->view('_layouts/footer'); ?>