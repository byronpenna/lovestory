<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function index()
	{
		$this->load->view('index/index.php');
	}
	public function login(){
		$loginForm 	= new stdClass();
		$userName 	= $_POST["Username"];
		$pass 		= $_POST["Pass"];

	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */