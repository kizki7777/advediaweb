<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class About extends CI_Controller {

	public function index()
	{
		// page title
		$data['meta_title'] = 'About';

		// css class
		$data['body_class'] = 'portfolio';

		// menu active
		$data['current'] = 'about';

		$this->load->view('about', $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */