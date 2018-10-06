<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once("../model/cliente.php");

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$sexo = $_POST['sexo'];
$dni = $_POST['dni'];

$obj = new cliente();

if($obj -> registrarCliente($nombre,$apellido, $sexo, $dni))
{
    $ruta = "Location: ../view/registroCliente.php?msj=1";
}
else
{
    $ruta = "Location: ../view/registroCliente.php?msj=0";
}

header($ruta);