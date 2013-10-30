<?php $this->load->view('_layouts/header'); ?>

<div class="page bg--blue" style="background-image:url()">
	<?php $this->load->view('_menu/top'); ?>

	<div class="page__body constrict greeting">
		<div class="welcome-right">
			<h1>...Coming Soon</h1>
			<!-- <p><?php echo lang('content.service.1') ?></p> -->
		</div>
		<!-- <div class="welcome-left">
			<img src="<?php echo base_url() ?>assets/img/ess.png">
		</div> -->
	</div>
</div>

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