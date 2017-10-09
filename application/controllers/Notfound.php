<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Notfound extends CI_Controller {

	public function index()
	{
		$this->load->view('errors/html/error_404');
	}

}

/* End of file Notfound.php */
/* Location: ./application/controllers/Notfound.php */