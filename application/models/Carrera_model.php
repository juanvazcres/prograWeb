<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Carrera_model extends CI_Model {
  public function __construct(){
        parent::__construct();
        $this->load->database();
    }
    
    public function get_carreras(){
        $carreras = $this->db->get("carrera");
             if($carreras->num_rows()>0){return $carreras ;}
        else{return false;}
    }

}
?>