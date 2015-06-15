<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Galeria extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('Item_modelo');
    }

    public function index(){
        $data['is_logged']=$this->session->userdata('is_logged');
        $data['JuanitoMenu'] =$this->juanitomenu->get_menu_is_logged($data['is_logged']);
        $data['header']=$this->load->view('header',$data,true);
        $data['footer']=$this->load->view('footer','',true);
        $data['num_rows']=$this->Item_modelo->get_num_rows('1');
        $data['segmento']=$this->uri->segment(3);
        
        if($data['segmento']){
            $data['all_videos']=$this->Item_modelo->get_items_by_id($data['segmento']);
            
            if($data['is_logged']){
            $this->load->view('galeria/galeria_item_view',$data);
            }else{
             redirect(base_url()."index.php/login");
            }
        }else{
            $data['all_videos']=$this->Item_modelo->get_items_by_type('1');
            $this->load->view('galeria/galeria_view',$data);
        }

    }

    public function seccionar_galeria($num_rows,$div){
        $xd['remainder']=$num_rows%$div;
        $xd['quotient']=$num_rows/$div;
        return $xd;
    }

}
?>
