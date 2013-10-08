<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Work extends CI_Controller {

	public function index()
	{
		// page title
		$data['meta_title'] = 'Works';

		// css class
		$data['body_class'] = 'portfolio';

		// menu active
		$data['current'] = 'work';

		$this->load->view('work', $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */