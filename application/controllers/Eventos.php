<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Eventos extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model('Evento_modelo');
    }

    public function index(){
      redirect(base_url().'index.php/Eventos/byDate/'.date ( 'Y-m-d' , time()));
    }
    
      
        public function byDate(){
            $result = $this->Evento_modelo->get_eventos_by_date( $this->uri->segment(3));
            
            $data['eventos']=$result;
            $data['is_logged']=$this->session->userdata('is_logged');
            $data['JuanitoMenu'] =$this->juanitomenu->get_menu_is_logged($data['is_logged']);
            $data['header']=$this->load->view('header',$data,true);
            $data['footer']=$this->load->view('footer','',true);
            if($data['is_logged']){
                $this->load->view('evento/evento_view',$data);
            }else{
                redirect(base_url()."index.php/login");
            }
        }
    
    
   

}
?>
