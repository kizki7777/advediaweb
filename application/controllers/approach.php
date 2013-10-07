<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Approach extends CI_Controller {

	public function index()
	{
		// page title
		$data['meta_title'] = 'Approach';

		// css class
		$data['body_class'] = 'portfolio';

		// menu active
		$data['current'] = 'approach';

		$this->load->view('approach', $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */