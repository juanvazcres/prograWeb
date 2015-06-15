<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->library(array('session','form_validation'));
		$this->load->helper(array('url','form'));
        $this->load->model("login_modelo");
        $this->load->model("Carrera_model");
        $this->load->model("Usuario_model");
        $this->load->library("JuanitoMenu");
    }

    public function index(){
        $data['is_logged']=$this->session->userdata('is_logged');
        $data['JuanitoMenu'] =$this->juanitomenu->get_menu_is_logged($data['is_logged']);
        $data['header']=$this->load->view('header',$data,true);
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
                    redirect(base_url(),'refresh');
                    break;
                case '2':
                    redirect(base_url(),'refresh');
                    break;
                case '3':
                    redirect(base_url(),'refresh');
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
    
    
    
    function registrarse(){
        $data["carreras"] = $this->Carrera_model->get_carreras();
        $data['is_logged']=$this->session->userdata('is_logged');
        $data['JuanitoMenu'] =$this->juanitomenu->get_menu_is_logged($data['is_logged']);
        $data['header']=$this->load->view('header',$data,true);
        $data['footer']=$this->load->view('footer','',true);
        $this->load->view('users/register_user_form',$data);
    }
    
    function solicitudRegistro(){
        $usuario =array(                    
                      'nombre'=>$this->input->post('nombre'),
                      'ap_paterno'=>$this->input->post('apellido_paterno'),
                      'ap_materno'=>$this->input->post('apellido_materno'),
                      'email'=>$this->input->post('email'),
                      'telefono'=>$this->input->post('telefono'),
                      'rfc'=>$this->input->post('rfc'),
                      'pass'=>md5($this->input->post('password')),
                      'Carrera_idCarrera'=>$this->input->post('carrera')
                    );
        $this->Usuario_model->enviar_solicitud($usuario);
        redirect(base_url(),'refresh');                                                 
    }
}
?>