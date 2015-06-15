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
        $data['all_videos']=$this->Item_modelo->get_items_by_type('1');
        $this->load->view('galeria/galeria_view',$data);
    }
}
?>
