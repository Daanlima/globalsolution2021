<?php
include '../../control/UsuarioControl.php';
 
$data = file_get_contents('php://input');
$obj =  json_decode($data);

$id = $obj->id;


if(!empty($data)){	
 $usuario = new UsuarioControl();
 $usuario->update($obj , $id);
 header('Location:listar.php');
}







?>