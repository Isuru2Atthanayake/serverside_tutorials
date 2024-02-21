<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//http://localhost/Tutorials/blog/index.php/PageController

class PageController extends CI_Controller {
	public function index()
	{
		// $this->load->view('test.php');
		echo "I am page controller";
	}
	public function demo()
	{
		// echo "I am here"
		echo "I am demo page ";
		// $this->load->view('about');
	}
}
