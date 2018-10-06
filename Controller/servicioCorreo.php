<?php

require_once("../model/correos.php");

$cliente=$_POST['nombre'];
$correo=$_POST['correo'];
$asunto=$_POST['asunto'];
$mensaje=$_POST['mensaje'];


$obj=new correos();
$obj->setCliente($cliente);
$obj->setCorreo($correo);
$obj->setAsunto($asunto);
$obj->setMensaje($mensaje);

if($obj->enviarCorreo())
{
    $ruta="Location: ../View/formCorreos.php?msj=1";

}
else
{
    $ruta="Location: ../View/formCorreos.php?msj=2";

}
header($ruta);

?>