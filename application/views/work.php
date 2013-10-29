<?php $this->load->view('_layouts/header'); ?>

<div class="page bg--red adv-custom-distinct">
	<?php $this->load->view('_menu/top'); ?>

	<section  class="page links--red page--overflow adv-transparent">
		<div class="page__body constrict greeting">
			<div class="welcome-right">
				<h1>Distinction That Matters</h1>
				<p><?php echo lang('content.work.1'); ?></p>
			</div>
			<div class="welcome-left">
				<img src="<?php echo base_url() ?>assets/img/vs.png">
			</div>
		</div>
	</section>
</div>

<h2 class="dividing-header text-yellow">our works</h2>

<section  class="page page--overflow adv-custom-yellow">	
	<div class="page__body constrict adv-prolog">
		<article class="copy-block copy-block--right">
			<img src="<?php echo base_url() ?>assets/img/logo-uad.png" class="logo-box">
			<h2 class="block-heading">Website U-Ad</h2>
			<p class="intro">ui/ux design | development | back end development</p>
			<p><?php echo lang('content.work.2'); ?></p>
			<p><?php echo lang('content.work.3'); ?></p>
			<a href="http://www.u-ad.info" class="adv-visit-btn"></a>
		</article>
		<div class="product product--left product--macbook">
			<img src="<?php echo base_url() ?>assets/img/uad.png" alt="South Tees" class="product__mount">
		</div>
	</div>
</section>

<section  class="page page--overflow adv-custom-white">	
	<div class="page__body constrict adv-prolog">
		<article class="copy-block copy-block--left">
			<img src="<?php echo base_url() ?>assets/img/logo-sales.png" class="logo-landscape">
			<h2 class="block-heading">Aplikasi Sales</h2>
			<p class="intro">development</p>
			<p><?php echo lang('content.work.4'); ?></p>
		</article>
		<div class="product product--right product--macbook">
			<img src="<?php echo base_url() ?>assets/img/sales.png" alt="South Tees" class="product__mount">
		</div>
	</div>
</section>

<section  class="page page--overflow adv-custom-md">	
	<div class="page__body constrict adv-prolog">
		<article class="copy-block copy-block--right">
			<img src="<?php echo base_url() ?>assets/img/logo-md.png" class="logo-box">
			<h2 class="block-heading">Muhammadiyah App</h2>
			<p class="intro">ui/ux design | development | backend development</p>
			<p><?php echo lang('content.work.5'); ?></p>	
		</article>
		<div class="product product--left product--macbook">
			<img src="<?php echo base_url() ?>assets/img/md.png" alt="South Tees" class="product__mount">
		</div>
	</div>
</section>

<section  class="page bg--white links--red page--overflow adv-custom-uni">	
	<div class="page__body constrict adv-prolog">
		<article class="copy-block copy-block--left">
			<img src="<?php echo base_url() ?>assets/img/logo-unilever.png" class="logo-box">
			<h2 class="block-heading">Unilever</h2>
			<h4 class="block-heading">Free wifi login page</h4>
			<p class="intro">ui/ux design | development | responsive</p>
			<p><?php echo lang('content.work.6'); ?></p>
		</article>
		<div class="product product--right product--macbook">
			<img src="<?php echo base_url() ?>assets/img/unilever.png" alt="South Tees" class="product__mount">
		</div>
	</div>
</section>

<section  class="page bg--white links--red page--overflow">	
	<div class="page__body constrict adv-prolog">
		<article class="copy-block copy-block--right">
			<img src="<?php echo base_url() ?>assets/img/logo-canda.png" class="logo-landscape">
			<h2 class="block-heading">CSR</h2>
			<h4 class="block-heading">Ceria Anak Indonesia (CANDA)</h4>
			<p class="intro">ui/ux design | development | graphic design | event organizer</p>
			<p><?php echo lang('content.work.7'); ?></p>		
		</article>
		<div class="product product--left product--macbook">
			<img src="<?php echo base_url() ?>assets/img/canda.png" alt="South Tees" class="product__mount">
		</div>
	</div>
</section>

<section  class="page page--overflow adv-custom-kpdt">	
	<div class="page__body constrict adv-prolog">
		<article class="copy-block copy-block--left">
			<img src="<?php echo base_url() ?>assets/img/logo-kpdt.png" class="logo-landscape">
			<h2 class="block-heading">Website</h2>
			<h4 class="block-heading">Kementerian Pembangunan Daerah Tertinggal</h4>
			<p class="intro">ui/ux design | development</p>
			<p><?php echo lang('content.work.8'); ?></p>
			<a href="http://www.kemenegpdt.go.id/" class="adv-visit-btn"></a>			
		</article>
		<div class="product product--right product--macbook">
			<img src="<?php echo base_url() ?>assets/img/kpdt-ss.png" alt="South Tees" class="product__mount">
		</div>
	</div>
</section>

<section  class="page page--overflow">	
	<div class="page__body constrict adv-prolog">
		<article class="copy-block copy-block--left">
			<h2 class="block-heading">Digital</h2>
			<h4 class="block-heading">Media Placement</h4>
			<p><?php echo lang('content.work.9'); ?></p>		
		</article>
		<div class="product product--right product--macbook">
			<img src="<?php echo base_url() ?>assets/img/macbook.png" alt="South Tees" class="product__mount">
			<img src="<?php echo base_url() ?>assets/img/fortuner.jpg" alt="South Tees" class="product__screenshot">
		</div>
	</div>
</section>

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