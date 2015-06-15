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
        if($is_logged){
        $menu_arr=array(
        "Inicio" => base_url(),
                        "Galeria" => "#",
                        "Logout" =>base_url().'index.php/login/logout',
                        "Ayuda" => "#",
                        "Acerca de" => '#'
                        );
        }else{
        $menu_arr=array(
                    "Inicio" => base_url(),
                        "Galeria" => "#",
                        "Login" =>base_url().'index.php/login',
                        "Ayuda" => "#",
                        "Acerca de" => '#'
                        );
    }
        return $this->construir_menu($menu_arr);
    }
    

    
}
?>