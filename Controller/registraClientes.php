<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once ("../Model/cliente.php"); // debo usar la clase CLIENTE

$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$dni=$_POST['dni'];
$sexo=$_POST['sexo'];

$obj=new cliente();
if($obj->registrarClientes($nombre, $apellido, $dni, $sexo))
{
  $ruta="Location: ../View/formRegistroClientes.php?msj=1";
}
else
{
  $ruta="Location: ../View/formRegistroClientes.php?msj=0";
}

header($ruta);

