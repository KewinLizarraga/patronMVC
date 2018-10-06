<?php
class conexion {
    
    private $servidor;
    private $usuario;
    private $clave;
    private $baseDatos;
    private $conexion;
    
    public function __construct()
    {
        $this -> servidor = "localhost";
        $this -> usuario = "root";
        $this -> clave = "";
        $this -> baseDatos = "practica";
    }
    
    public function conectar()
    {
        $this -> conexion = new mysqli($this -> servidor, $this -> usuario, $this -> clave, $this -> baseDatos);
    }
    
    //metodo que devuelve un registro: SELECT
    public function getEjecucionQuery($sql)
    {
        return $this -> conexion -> query($sql);
    }
    
    //metodo que devuelve un valor Verdadero o Falso: INSERT, UPDATE, DELETE
    public function setEjecucionQuery($sql)
    {
        return $this -> conexion -> query($sql);
    }
    
    public function getServidor() {
        return $this -> servidor;
    }

    public function getUsuario() {
        return $this -> usuario;
    }

    public function getClave() {
        return $this -> clave;
    }

    public function getBaseDatos() {
        return $this -> baseDatos;
    }

    public function setServidor($servidor) {
        $this -> servidor = $servidor;
    }

    public function setUsuario($usuario) {
        $this -> usuario = $usuario;
    }

    public function setClave($clave) {
        $this -> clave = $clave;
    }

    public function setBaseDatos($baseDatos) {
        $this -> baseDatos = $baseDatos;
    }
    
    public function cerrarConexion()
    {
        $this -> conexion -> close();
    }
    
}
