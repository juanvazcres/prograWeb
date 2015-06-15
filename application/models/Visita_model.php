<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Vista_model extends CI_Model{
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }


    public function
/* SELECT Visita.idVisita, Usuario.nombre, Item.titulo
FROM Visita
INNER JOIN (
Usuario, Item
) ON ( Usuario.idUsuario = Visita.Usuario_idUsuario
AND Item.idItem = Visita.Item_idItem )
ORDER BY `Item`.`titulo` DESC */

?>
