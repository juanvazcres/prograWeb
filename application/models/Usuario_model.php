<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Usuario_model extends CI_Model {
  public function __construct(){
        parent::__construct();
        $this->load->database();
    }
    
    public function enviar_solicitud($data){
        $usuario =array('idUsuario'=>null,                      
                      'nombre'=>$data['nombre'],
                      'ap_paterno'=>$data['ap_paterno'],
                      'ap_materno'=>$data['ap_materno'],
                      'email'=>$data['email'],
                      'telefono'=>$data['telefono'],
                      'rfc'=>$data['rfc'],
                      'pass'=>$data['pass'],
                      'Carrera_idCarrera'=>$data['Carrera_idCarrera'],
                      'Rol_idRol'=>4,
                      'Status_idStatus'=>2);
        $this->db->insert("Usuario",$usuario);
    }

}
?>
