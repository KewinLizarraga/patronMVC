<?php

require_once("../model/producto.php");

$codigo=$_GET['cod'];
$cn= new producto();

if($cn->eliminarProducto($codigo))
{
    //Si se elimino correctamente
    $ruta="Location: ../view/reportePro.php";
    header($ruta);
}
else
{
  //Si no elimino
  echo "Error al eliminar";
}


?>