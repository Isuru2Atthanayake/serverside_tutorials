<!-- http://localhost/Tutorials/tute2/index.php/student/show -->
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        // This method will show a list of students, but we want to display details of a single student, so we will redirect to the show method.
        redirect('student/show');
    }

    public function show() {
        // Data to be passed to the view
        $data = array(
            'name' => 'John Doea',
            'course' => 'Computer Science',
            'picture_url' => 'https://example.com/student.jpg' // URL to a sample image
        );

        // Load the view and pass the data
        $this->load->view('student_details', $data);
    }
}
?>