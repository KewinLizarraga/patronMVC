<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once ("../Model/cliente.php");
$codigo=$_POST['codigo'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$dni=$_POST['dni'];
$sexo=$_POST['sexo'];
 
$cli=new cliente();
if($cli->actualizaCliente($codigo, $nombre, $apellido, $dni, $sexo))
{
   //se acutalizo Correctamente
    $ruta="Location: ../view/formReporteClientes.php";
    header($ruta);
}
else 
{
   //no se acutalizo 
    echo "error";

}