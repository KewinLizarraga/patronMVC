<?php

require_once("../model/producto.php");

$nombre = $_POST['nombre'];
$categoria = $_POST['categoria'];
$marca = $_POST['marca'];
$stock = $_POST['stock'];
$fecha_creacion = $_POST['fecha_creacion'];
$descripcion = $_POST['descripcion'];


$obj = new producto();

if($obj -> registrarProducto($nombre,$categoria, $marca, $stock,$fecha_creacion,$descripcion))
{
    $ruta = "Location: ../view/registroPro.php?msj=1";
}
else
{
    $ruta = "Location: ../view/registroPro.php?msj=0";
}

header($ruta);
















?>