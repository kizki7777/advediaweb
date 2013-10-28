<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		// page title
		$data['meta_title'] = 'Home';

		// css class
		$data['body_class'] = '';
		$data['body_id'] = 'rainbow';

		// menu active
		$data['current'] = 'home';

		$this->load->view('home', $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */