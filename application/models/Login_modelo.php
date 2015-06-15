<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_modelo extends CI_Model{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
	
    public function login_user($rfc,$pass)
	{
        $this -> db -> select('idUsuario, rfc, pass, Rol_idRol, Status_idStatus');
        $this -> db -> from('Usuario');
        $this -> db -> where('rfc', $rfc);
        $this -> db -> where('pass', $pass);
        $this -> db -> limit(1);
		$query = $this->db->get();
		if($query->num_rows() == 1)
		{
            return $query->row();
		}else{
	        return false;	
		}
	}
}
?>
