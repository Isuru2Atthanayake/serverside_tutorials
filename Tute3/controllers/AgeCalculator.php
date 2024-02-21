<!-- Tute 3 Exercise 1 -->
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class AgeCalculator extends CI_Controller {

public function index() {
    $this->load->view('age_form');
}

public function calculate_age() {
    $date_of_birth = $this->input->post('date_of_birth');

    $this->load->model('AgeModel');
    $age = $this->AgeModel->calculate_age($date_of_birth);

    $this->load->view('age_result', ['age' => $age]);
}
}
