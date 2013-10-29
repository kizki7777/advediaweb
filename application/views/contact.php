<?php $this->load->view('_layouts/header'); ?>

<div class="page" style="background-image:url()">
	<header class="header constrict" role="banner">
		<?php $this->load->view('_menu/top'); ?>
	</header>

	<div class="page__body constrict greeting">
		<div class="welcome-right">
			<h1></h1>
			<p><?php echo lang('content.contact.1'); ?></p>		
		</div>
		<div class="welcome-left">
			<img src="<?php echo base_url() ?>assets/img/contact.png">
		</div>
	</div>
</div>

<section class="page bg--grey links--red page--overflow adv-grey">
	<div class="page__body constrict adv-prolog">
		<article class="copy-block copy-block--right all-centered">
			<img src="<?php echo base_url() ?>assets/img/contact-icon.png" class="">
			<h2 class="block-heading">Get in Touch</h2>
			<p><?php echo lang('content.contact.2'); ?></p>
				<p class="intro noted">Phone: (021) 7509 9949</p>
				<p class="intro noted">Email: company@advedia.net</p>
		</article>

		<form method='post' enctype='multipart/form-data' id='gform_1' class='contact-form' action='/contact/#gf_1'>
		    <div class='gform_body'>
		        <ul id='gform_fields_1' class='gform_fields top_label description_below'>
		            <li id='field_1_1' class='gfield gplaceholder gfield_contains_required' >
		                <label class='gfield_label' for='input_1_1'>Your name<span class='gfield_required'>*</span></label>
		                <div class='ginput_container'>
		                    <input name='input_1' id='input_1_1' type='text' value='' class='medium'  tabindex='1'   />
		                </div>
		            </li>
		            <li id='field_1_2' class='gfield gplaceholder gfield_contains_required' >
		                <label class='gfield_label' for='input_1_2'>Email address<span class='gfield_required'>*</span></label>
		                <div class='ginput_container'>
		                    <input name='input_2' id='input_1_2' type='text' value='' class='medium' tabindex='2'/>
		                </div>
		            </li>
		            <li id='field_1_3' class='gfield gplaceholder'>
		                <label class='gfield_label' for='input_1_3'>Telephone number</label>
		                <div class='ginput_container'>
		                    <input name='input_3' id='input_1_3' type='text' value='' class='medium'  tabindex='3'/>
		                </div>
		            </li>
		            <li id='field_1_4' class='gfield gplaceholder gfield_contains_required'>
		                <label class='gfield_label' for='input_1_4'>Your message<span class='gfield_required'>*</span></label>
		                <div class='ginput_container'>
		                    <textarea name='input_4' id='input_1_4' class='textarea small' tabindex='4' rows='10' cols='50'></textarea>
		                </div>
		            </li>
		        </ul>
		    </div>
		    <a href="http://www.u-ad.info" class="adv-send-btn"></a>
		</form>
	</div>	
</section>

<section  class="page bg--red bg--clean">
	<div class="map" id="map"></div>
	<div class="page__body constrict zero-bottom--bp2">
		<article class="copy-block copy-block--solid zero-bottom bg--transparent no-animation">
			<header class="copy-block__header map-notes-block">
				<h1 class="map-notes"><a href="#" class="no-line" onclick="zoomArea()">Come & Visit Our Digital Playground</a></h1>
			</header>
		</article>
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

<?php $this->load->view('_layouts/footer'); ?>

<script>
	
	var zoompoint = 17;
    var map = L.map('map', {scrollWheelZoom:false}).setView([-6.27797,106.83020], zoompoint);

    // zoomArea();

    function zoomArea() {
    	zoompoint = 27;
    }

    L.tileLayer('http://{s}.tile.cloudmade.com/BC9A493B41014CAABB98F0471D759707/997/256/{z}/{x}/{y}.png', {
        maxZoom: 18,
        attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, <a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="http://cloudmade.com">CloudMade</a>'
    }).addTo(map);


    L.marker([-6.27797,106.83020]).addTo(map)
        .bindPopup('<div><a href="http://www.google.co.id">Hello</a><br><img src="bit.jpg"></div>').openPopup();

</script>