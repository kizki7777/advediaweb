<div class="logo">
	<a href="<?php echo site_url('home') ?>">
		<img width="200" height="71" class="" src="<?php echo base_url() ?>assets/img/logo1.png" alt="Advedia" />
	</a>
</div>

<header class="header">	
	<nav id="nav" class="nav-container" role="navigation">
		<ul class="nav nav--primary">
			<li <?=($current =='home')?'class="is-current is-current"':''; ?>><a href="<?php echo site_url('home') ?>">Home</a></li>
			<li <?=($current =='about')?'class="is-current is-current"':''; ?>><a href="<?php echo site_url('about') ?>">About</a></li>
			<li <?=($current =='approach')?'class="is-current is-current"':''; ?>><a href="<?php echo site_url('approach') ?>">Approach</a></li>
			<li <?=($current =='services')?'class="is-current is-current"':''; ?>><a href="<?php echo site_url('services') ?>">Services</a></li>
			<li <?=($current =='work')?'class="is-current is-current"':''; ?>><a href="<?php echo site_url('work') ?>">Work</a></li>
			<li <?=($current =='blog')?'class="is-current is-current"':''; ?>><a href="<?php echo site_url('blog') ?>">Blog</a></li>
			<li <?=($current =='clients')?'class="is-current is-current"':''; ?>><a href="<?php echo site_url('clients') ?>">Clients</a></li>
			<li <?=($current =='contact')?'class="is-current is-current"':''; ?>><a href="<?php echo site_url('contact') ?>">Contact</a></li>
		</ul>
		<ul class="lang">
			<li><a href="<?php echo base_url(); ?>langswitch/switchLanguage/english"><img src="<?php echo base_url() ?>assets/img/en.png"></a></li>
			<li><a href="<?php echo base_url(); ?>langswitch/switchLanguage/bahasa"><img src="<?php echo base_url() ?>assets/img/id.png"></a></li>
		</ul>
	</nav>
</header>