<?php

require_once("conexion.php");

class producto
{

    private $Codigo;
    private $nombre;
    private $categoria;
    private $marca;
    private $stock;
    private $fecha_creacion;
    private $descripcion;

public function __construc()
{

}

public function setProductoByCodigo($codigo)
    {
       $cn = new conexion();
       $cn -> conectar();
       $sql = " SELECT * FROM producto WHERE id = ".$codigo ;
       $resultado = $cn -> getEjecucionQuery($sql);
       
       if($resultado -> num_rows > 0) //verifico si tiene registros
       {
           $registro = $resultado -> fetch_array(MYSQLI_ASSOC);
           
           $this -> codigo = $registro['id'];
           $this -> nombre = $registro['nombre'];
           $this -> categoria = $registro['categoria'];
           $this -> marca = $registro['marca'];
           $this -> stock = $registro['stock'];
           $this -> fecha_crecaion = $registro['fecha_creacion'];
           $this -> descripcion = $registro['descripcion'];

       }
       
       $resultado -> free(); //libero los recursos usados
       $cn -> cerrarConexion();   
    }
    
    //metodo para registrar clientes
    public function registrarProducto($codigo,$nombre,$categoria, $marca, $stock,$fecha_creacion,$descripcion)
    {
        $cn = new conexion();
        $cn -> conectar();
        $sql = "INSERT INTO producto(nombre,categoria, marca, stock,fecha_creacion,descripcion) VALUES ('$nombre','$categoria', '$marca', '$stock','$fecha_creacion','$descripcion')";
        return $cn -> setEjecucionQuery($sql);
    }
    
    //metodo para actualizar producto

    public function actulizarProducto($codigo,$nombre,$categoria, $marca, $stock,$fecha_creacion,$descripcion)
    {
     $cn = new conexion();
     $cn -> conectar();
     $sql="UPDATE producto SET nombre='$nombre', categoria='$categoria', marca='$marca', stock='$stock',fecha_creacion='$fecha_creacion', descripcion='$descripcion' WHERE id=$codigo";
     return $cn->setEjecucionQuery($sql);
    }

    //metodo para eliminar producto

    public function eliminarProducto($codigo)
    {
        $cn = new conexion();
        $cn -> conectar();
        $sql="DELETE FROM producto WHERE id=$codigo";
        return $cn->setEjecucionQuery($sql);
    }

    //metodo para reportar producto
    public function getListaProducto()
    {
        $cn = new conexion();
        $cn -> conectar();
        $sql = "SELECT * FROM producto";
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

    public function getCategoria() {
        return $this -> categoria;
    }

    public function getMarca() {
        return $this -> marca;
    }

    public function getStock() {
        return $this -> stock;
    }

    
    public function getFecha_creacion() {
        return $this -> fecha_creacion;
    }

    
    public function getDescripcion() {
        return $this -> descripcion;
    }




    public function setCodigo($codigo) {
        $this -> codigo = $codigo;
    }

    public function setNombre($nombre) {
        $this -> nombre = $nombre;
    }

    public function setCategoria($categoria) {
        $this -> categoria = $categoria;
    }

    public function setStock($stock) {
        $this -> stock = $stock;
    }

    public function setFecha_creacion($fecha_creacion) {
        $this -> fecha_creacion = $fecha_creacion;
    }

    public function setDescripcion($descripcion) {
        $this -> descripcion = $descripcion;
    }

}



























































?>