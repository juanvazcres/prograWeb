<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Galeria extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model("Galeria_modelo");
    }

    public function index(){
        $data['header']=$this->load->view('header','',true);
        $data['footer']=$this->load->view('footer','',true);
        $this->load->view('galeria/galeria_view',$data);

    }

}
?>
