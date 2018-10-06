<?php

require_once("../model/cliente.php");

$codigo=$_POST['codigo'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$sexo=$_POST['sexo'];
$dni=$_POST['dni'];


$cli=new cliente();

if($cli->actulizarCliente($codigo,$nombre,$apellido,$sexo,$dni))
{
 //Se actualizo correctamente
 $ruta="Location: ../view/reporteCliente.php";
 header($ruta);
}
else
{
 //No se actualizo
}


?>