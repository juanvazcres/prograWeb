<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->library(array('session','form_validation'));
		$this->load->helper(array('url','form'));
        $this->load->model("login_modelo");
    }

    public function index(){
        $data['header']=$this->load->view('header','',true);
        $data['footer']=$this->load->view('footer','',true);
        
        $this->load->view('view_login',$data);
    }
    
    function processLogin(){
        $data = array(
            'rfc' => $this->input->post('rfc'),
            'pass' => md5($this->input->post('pass'))
        );
        $result=$this->login_modelo->login_user($data['rfc'],$data['pass']);
        if($result){
            //idUsuario, rfc, pass, Rol_idRol, Status_idStatus
            $session_data = array(
                'rfc' => $result->rfc,
                'is_logged' => true,
                'idUsuario' => $result->idUsuario,
                'Rol' => $result->Rol_idRol,
                'Status' => $result->Status_idStatus
            );
            $this->session->set_userdata($session_data);
            
            switch($session_data['Status']){
                case '1':
                    
                    break;
                case '2':
                    redirect(base_url(),'refresh');
                    break;
                case '3':
                    
                    break;
                case '4':
                    
                    break;
            }            
        }else{
            redirect(base_url().'index.php/login','refresh');
            $this->session->set_flashdata('usuario_incorrecto','Los datos introducidos son incorrectos');   
        }
    }
    
    function logout(){
        $this->session->sess_destroy();
        redirect(base_url(),'refresh');
    }
}
?>