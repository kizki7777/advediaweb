<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Clients extends CI_Controller {

	public function index()
	{
		// page title
		$data['meta_title'] = 'Clients';

		// css class
		$data['body_class'] = 'portfolio';

		// menu active
		$data['current'] = 'clients';

		$this->load->view('clients', $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */