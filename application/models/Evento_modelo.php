<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Evento_modelo extends CI_Model{
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }
    
    public function insert_evento($data){
        $this->db->insert("Evento",array('idEvento'=>$data['idEvento'],'nombre'=>$data['nombre'],'fechaInicio'=>$data['fechaInicio'],'fechaFin'=>$data['fechaFin'],'horaInicio'=>$data['horaInicio'],'horaFin'=>$data['horaFin'],'Usuario_idUsuario'=>$data['Usuario_idUsuario'],'Sala_idSala'=>$data['Sala_idSala'],'Materia_idMateria'=>$data['Materia_idMateria']));
    }
    
    public function get_eventos(){
        $query = $this->db->get('Evento');
        if($query->num_rows()>0){return $query;}
        else{return false;}
    }
    
    public function get_evento_by_ID($id){
        $this->db->where('idEvento',$id);
        $query = $this->db->get('Evento');
        if($query->num_rows()>0){return $query;}
        else{return false;}
    }
    
    public function get_top_five_eventos(){
        $this->db->order_by('idEvento','desc');
        $query = $this->db->get('Evento',5);
        if($query->num_rows()>0){return $query;}
        else{return false;}
    }
    
}
?>
