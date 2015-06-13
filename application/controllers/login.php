<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->helper("form");
        $this->load->model("login_modelo");
    }

    public function index(){
        $data['header']=$this->load->view('header');
        $data['footer']=$this->load->view('footer');
    }
    
    function login(){
        
    }
    
    function logout(){
        
    }
}
?>