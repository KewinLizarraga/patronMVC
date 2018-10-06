<?php

require_once("../model/producto.php");

$codigo=$_POST['codigo'];
$nombre=$_POST['nombre'];
$categoria=$_POST['categoria'];
$marca=$_POST['marca'];
$stock=$_POST['stock'];
$fecha_creacion=$_POST['fecha_creacion'];
$descripcion=$_POST['descripcion'];



$cli=new producto();

if($cli->actulizarProducto($codigo,$nombre,$categoria,$marca,$stock,$fecha_creacion,$descripcion))
{
 //Se actualizo correctamente
 $ruta="Location: ../view/reportePro.php";
 header($ruta);
}
else
{
 //No se actualizo
}


?>