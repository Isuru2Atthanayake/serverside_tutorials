<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AgeCalculator extends CI_Controller {

    public function index() {
        $this->load->helper('url'); // Load URL helper
        $this->load->view('age_input_form');
    }

    public function calculate_age() {
        $this->load->helper('url'); // Load URL helper
        $this->load->model('Age_model');
        
        // Get the date of birth from the form
        $dob = $this->input->post('dob');

        // Call the model function to calculate age
        $age = $this->Age_model->calculate_age($dob);

        // Pass the age to the view
        $data['age'] = $age;
        $this->load->view('age_result', $data);
    }

}
?>