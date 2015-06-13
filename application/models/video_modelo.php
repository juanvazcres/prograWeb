<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Video_modelo extends CI_Model{
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }
    
    public function insert_video($data){
        $this->db->insert("videos",array('idVideos'=>$data['idVideos'],'nombre'=>$data['nombre'],'url'=>$data['url'],'urlImagen'=>$data['urlImagen'],'descripcion'=>$data['descripcion']));
    }
    
    public function get_videos(){
        $query = $this->db->get('videos');
        if($query->num_rows()>0){return $query;}
        else{return false;}
    }
    
    public function get_videos_by_ID($id){
        $this->db->where('idVideos',$id);
        $query = $this->db->get('videos');
        if($query->num_rows()>0){return $query;}
        else{return false;}
    }
    
    public function get_top_five_videos(){
        $this->db->order_by('idVideos','desc');
        $query = $this->db->get('videos',5);
        if($query->num_rows()>0){return $query;}
        else{return false;}
    }
    
}
?>
