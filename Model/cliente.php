<?php

require_once("conexion.php");

class cliente {
    
    private $codigo;
    private $nombre;
    private $apellido;
    private $sexo;
    private $dni;
    
    public function __construct() 
    {
       
    }
    
    public function setClienteByCodigo($codigo)
    {
       $cn = new conexion();
       $cn -> conectar();
       $sql = " SELECT * FROM cliente WHERE id = " . $codigo ;
       $resultado = $cn -> getEjecucionQuery($sql);
       
       if($resultado -> num_rows > 0) //verifico si tiene registros
       {
           $registro = $resultado -> fetch_array(MYSQLI_ASSOC);
           
           $this -> codigo = $registro['id'];
           $this -> nombre = $registro['nombre'];
           $this -> apellido = $registro['apellido'];
           $this -> sexo = $registro['dni'];
           $this -> dni = $registro['sexo'];
       }
       
       $resultado -> free(); //libero los recursos usados
       $cn -> cerrarConexion();   
    }
    
    //metodo para registrar clientes
    public function registrarCliente($codigo,$nombre,$apellido, $sexo, $dni)
    {
        $cn = new conexion();
        $cn -> conectar();
        $sql = "INSERT INTO cliente(nombre, apellido, sexo, dni) VALUES ('$nombre', '$apellido', '$sexo', '$dni')";
        return $cn -> setEjecucionQuery($sql);
    }
    
    //metodo para actualizar clientes

    public function actulizarCliente($codigo,$nombre, $apellido, $sexo, $dni)
    {
     $cn = new conexion();
     $cn -> conectar();
     $sql="UPDATE cliente SET nombre='$nombre', apellido='$apellido', sexo='$sexo', dni='$dni' WHERE id=$codigo ";
     return $cn->setEjecucionQuery($sql);
    }

    //metodo para eliminar clientes

    public function eliminarCliente($codigo)
    {
        $cn = new conexion();
        $cn -> conectar();
        $sql="DELETE FROM cliente WHERE id=$codigo";
        return $cn->setEjecucionQuery($sql);
    }

    //metodo para reportar clientes
    public function getListaCliente()
    {
        $cn = new conexion();
        $cn -> conectar();
        $sql = "SELECT * FROM cliente";
        return $cn -> getEjecucionQuery($sql);
    }
    
    //metodo para actualizar clientes
    
    //metodo para eliminar clientes
    
    public function getCodigo() {
        return $this -> codigo;
    }

    public function getNombre() {
        return $this -> nombre;
    }

    public function getApellido() {
        return $this -> apellido;
    }

    public function getDni() {
        return $this -> dni;
    }

    public function getSexo() {
        return $this -> sexo;
    }

    public function setCodigo($codigo) {
        $this -> codigo = $codigo;
    }

    public function setNombre($nombre) {
        $this -> nombre = $nombre;
    }

    public function setApellido($apellido) {
        $this -> apellido = $apellido;
    }

    public function setDni($dni) {
        $this -> dni = $dni;
    }

    public function setSexo($sexo) {
        $this -> sexo = $sexo;
    }

}
