<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class JuanitoMenu{
 
    
    public function construir_menu($arr_menu){
          $ret_menu = '<nav><ul>';
        
        foreach($arr_menu as $label=>$url){
        $ret_menu.='<li><a href="'.$url.'">'.$label.'</a></li>';
        }
        $ret_menu.='</ul></nav>';
        return $ret_menu;
    }
    
    public function  get_menu_is_logged($is_logged){
//"Logout" =>base_url().'index.php/login/logout',
//"Login" =>base_url().'index.php/login',
        $menu_arr=array(
                        "Inicio" => base_url(),
                        "Galeria" => base_url()."index.php/Galeria",
                        "Eventos" => base_url()."index.php/Eventos",
                        "Acerca de" => '#'
                        );
        if($is_logged){
            $array_login=array("Logout" =>base_url().'index.php/login/logout');         
        }else{
            $array_login=array("Login" =>base_url().'index.php/login');         
        }
        
        
        return $this->construir_menu(array_merge($menu_arr,$array_login));
    }
    

    
}
?>