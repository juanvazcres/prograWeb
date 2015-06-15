<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->helper("form");
        $this->load->model('Item_modelo');
        $this->load->model("Evento_modelo");
        $this->load->model('Usuario_model');
        $this->load->library("JuanitoMenu");
    }

    public function index(){
        $data['is_logged']=$this->session->userdata('is_logged');
        $data['JuanitoMenu']=$this->juanitomenu->get_menu_is_logged($data['is_logged']);
        $data['Items'] = $this->Item_modelo->get();
        //echo $data['session_rfc'];
        $this->load->view('header',$data);
		$this->load->view('admin/admin_view',$data);
        $this->load->view('footer');
	}

}
?>
