<?php

require_once("../model/cliente.php");

$codigo = $_GET['cod'];
$cn = new cliente();

if($cn ->eliminarCliente($codigo))
{
    //Si se elimino correctamente
    $ruta = "Location: ../view/reporteCliente.php";
    header($ruta);
}
else
{
  //Si no elimino
  echo "Error al eliminar";
}


?>