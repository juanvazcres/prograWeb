<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Sala_modelo extends CI_Model{
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }
    
    public function insert_sala($data){
        $this->db->insert("sala",array('idSala'=>$data['idSala'],'nombre'=>$data['nombre']));
    }
    
    
}
?>