<?php 


require_once("conexion.php");

class correos
{

private $destino;
private $cliente;
private $correo;
private $asunto;
private $mensaje;


public function __construct()
{
  $this->destino="kewin392@gmail.com"; //correo hacia donde se envia
}


public function enviarCorreo() // envio del mensaje al correo
{

   $cuerpoMensaje="NOMBRE: ".$this->cliente."r\n";
   $cuerpoMensaje=$cuerpoMensaje."CORREO: ".$this->correo."r\n";
   $cuerpoMensaje=$cuerpoMensaje."ASUNTO: ".$this->asunto."r\n";
   $cuerpoMensaje=$cuerpoMensaje."MENSAJE DE WEB: ".$this->mensaje."r\n";

   $this->mensaje=$cuerpoMensaje;
   $this->RegistrarConsulta();
   return mail($this->destino,$this->asunto,$this->mensaje);

}


public function RegistrarConsulta() //registrar los datos en la BD
{
    $cn=new conexion();
    $cn->conectar();
    $sql="INSERT INTO correos(visitante,correo,asunto,mensaje)VALUES('$this->cliente','$this->correo','$this->asunto','$this->mensaje')";
    return $cn->setEjecucionQuery($sql);
}


 function getDestino()
 {
     return $this->destino;
 }

 function getCliente()
 {
     return $this->cliente;
 }

 function getCorreo()
 {
     return $this->correo;
 }

 function getAsunto()
 {
     return $this->asunto;
 }

 function getMensaje()
 {
     return $this->mensaje;
 }



 public function setDestino($destino) {
    $this -> destino = $destino;
}



public function setCliente($cliente) {
    $this -> cliente = $cliente;
}


public function setCorreo($correo) {
    $this -> correo = $correo;
}

public function setAsunto($asunto) {
    $this -> asunto = $asunto;
}

public function setMensaje($mensaje) {
    $this -> mensaje = $mensaje;
}




}


























?>