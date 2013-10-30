<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blog extends CI_Controller {

	public function index()
	{
		// page title
		$data['meta_title'] = 'Blog';

		// css class
		$data['body_class'] = 'portfolio';

		// menu active
		$data['current'] = 'blog';

		$this->load->view('blog', $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */