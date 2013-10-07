<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Services extends CI_Controller {

	public function index()
	{
		// page title
		$data['meta_title'] = 'Services';

		// css class
		$data['body_class'] = 'portfolio';

		// menu active
		$data['current'] = 'services';

		$this->load->view('services', $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */