<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ViewController extends CI_Controller {
    
    public function index() {
        $this->load->view('home_view');
    }
    
    public function view1() {
        $this->load->view('view1');
    }

    public function view2() {
        $this->load->view('view2');
    }
}
?>