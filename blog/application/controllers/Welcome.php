<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//http://localhost/Tutorials/blog/index.php/welcome/demo/abouts

class Welcome extends CI_Controller {
	public function index()
	{
		$this->load->view('welcome_message');
	}
	public function demo()
	{
		// echo "I am here"
		$this->load->view('about');
	}
}
