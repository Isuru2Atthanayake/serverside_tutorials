<!-- Tute 3 Exercise 2 -->
<!-- http://localhost/Tutorials/tute33/index.php/Dinosaurs/periods -->
<?php
class Dinosaurs extends CI_Controller {

    public function periods() {
        $periods = array(
            "Triassic" => array("dinosaurs" => array("Plesiosaurs")),
            "Jurassic" => array("dinosaurs" => array("Stegosaurus", "Triceratops")),
            "Cretaceous" => array("dinosaurs" => array("Tyrannosaurus Rex", "Velociraptor"))
        );

        $this->load->view('dinosaur_periods', ['periods' => $periods]);
    }

    public function getinfo($period) {
        $periods = array(
            "Triassic" => array("dinosaurs" => array("Plesiosaurs")),
            "Jurassic" => array("dinosaurs" => array("Stegosaurus", "Triceratops")),
            "Cretaceous" => array("dinosaurs" => array("Tyrannosaurus Rex", "Velociraptor"))
        );

        if (!isset($periods[$period])) {
            show_404();
        }

        $dinosaur_info = $periods[$period];

        $this->load->view('dinosaur_info', ['period' => $period, 'dinosaurs' => $dinosaur_info['dinosaurs']]);
    }
}


// class Dinosaurs extends CI_Controller {

//     public function periods() {
//         $periods_data = $this->get_dinosaur_data();

//         $this->load->view('dinosaur_periods', ['periods' => $periods_data]);
//     }

//     public function getinfo($period) {
//         $period_data = $this->get_dinosaur_data($period);

//         if (!empty($period_data)) {
//             $this->load->view('dinosaur_info', ['period' => $period, 'dinosaurs' => $period_data['dinosaurs']]);
//         } else {
//             show_404();
//         }
//     }

//     private function get_dinosaur_data($period = null) {
//         // Hardcoded array representing dinosaur data
//         $periods = array(
//             "Triassic" => array("dinosaurs" => array("Plesiosaurs")),
//             "Jurassic" => array("dinosaurs" => array("Stegosaurus", "Triceratops")),
//             "Cretaceous" => array("dinosaurs" => array("Tyrannosaurus Rex", "Velociraptor"))
//         );

//         if ($period) {
//             return $periods[$period]; // Return specific period data
//         } else {
//             return $periods; // Return all periods data
//         }
//     }
// }