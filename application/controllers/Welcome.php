<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
    
    public function __construct(){
        parent::__construct();
        $this->load->helper("form");
        $this->load->model('Video_model');
        $this->load->model("Evento_modelo");
        $this->load->library("JuanitoMenu");
        
    }
    
	public function index()
	{
        $data['top_five_videos']=$this->Video_model->get_top_five_videos();
        $data['top_five_apartados']=$this->Evento_modelo->get_top_five_eventos();
        $data['bienvenida']=$this->load->view('bienvenida','',true);
        $data['apartados']=$this->load->view('salas/apartados_recientes',$data,true);
        
        $data['session_rfc']=$this->session->userdata('rfc');
        $data['is_logged']=$this->session->userdata('is_logged');
        
        
        $data['JuanitoMenu'] =$this->juanitomenu->get_menu_is_logged($data['is_logged']);
        
        //echo $data['session_rfc'];
        $this->load->view('header',$data);
		$this->load->view('slider',$data);
        $this->load->view('welcome_message',$data);
        $this->load->view('footer');
	}
}