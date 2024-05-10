<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class QuestionController extends CI_Controller {
    
    // public function __construct() {
    //     parent::__construct();
    //     // Load necessary models
    //     $this->load->model('QuestionModel');
    // }
    public function __construct() {
        parent::__construct();
      
        // Load URL helper
        $this->load->helper('url');
        // Load database library
        $this->load->database();
        // Load necessary models
        $this->load->model('QuestionModel');
    }
    public function index() {
        // Fetch all questions from the database
        $data['questions'] = $this->QuestionModel->get_all_questions();
       
        // Load view to display question listings
        $this->load->view('question/list', $data);
    }

    public function view($question_id) {
        // Fetch question details from the database
        $data['question'] = $this->QuestionModel->get_question($question_id);
        // Load view to display question details
        $this->load->view('question/view', $data);
    }

    public function submit() {
        // Handle question submission form
        if ($this->input->post()) {
            $question_data = array(
                'title' => $this->input->post('title'),
                'description' => $this->input->post('description'),
                // Additional fields such as user_id, tags, etc. can be added
            );
            // Save question to the database
            $this->QuestionModel->submit_question($question_data);
            // Redirect to question listings page
            redirect('question');
        }
        // Load view for question submission form
        $this->load->view('question/submit');
    }
}
?>
