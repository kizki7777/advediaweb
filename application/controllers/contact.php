<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact extends CI_Controller {

	public function index()
	{
		// page title
		$data['meta_title'] = 'Contact';

		// css class
		$data['body_class'] = 'portfolio';

		// menu active
		$data['current'] = 'contact';

		$this->load->view('contact', $data);
	}

}

/* End of file contact.php */
/* Location: ./application/controllers/contact.php */