<?php
include '../../control/CarroControl.php';
 
$data = file_get_contents('php://input');
$obj =  json_decode($data);
//echo $obj->titulo;



if(!empty($data)){	
 $parceiro = new CarroControl();
 $parceiro->insert($obj);
 header('Location:listar.php');
}







?>