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
    
    
}
?>
