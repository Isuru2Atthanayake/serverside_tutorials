<!-- Tute 3 Exercise 1 -->
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class AgeModel extends CI_Model {

public function calculate_age($date_of_birth) {
    $today = date("Y-m-d");
    $diff = date_diff(date_create($date_of_birth), date_create($today));
    return $diff->format('%y');
}
}
