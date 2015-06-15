<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Item_modelo extends CI_Model {

    public function __construct(){
        parent::__construct();
        $this->load->database();
        $this->load->model('');
    }

    public function insert_item($data){
        $this->db->insert("Item",array('idItem'=>$data['idItem'],));
    }

    public function get_items_by_type($type){
        $this->db->where('TipoItem_idTipoItem',$type);
        $query = $this->db->get('Item');
        if($query->num_rows()>0){return $query;}
        else{return false;}
    }

    public function get_items_by_title($title){
        $this->db->where('titulo',$title);
        $query = $this->db->get('Item');
        if($query->num_rows()>0){return $query;}
        else{return false;}
    }

}
?>
