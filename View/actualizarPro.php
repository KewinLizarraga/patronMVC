<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    
    <body>
        
        <?php
        
        require_once("../model/producto.php");
        
        if(isset($_GET['cod']))
        {
            $codigo = $_GET['cod'];
            $cn = new producto();
            $cn -> setProductoByCodigo($codigo);
            
            $nombre = $cn -> getNombre();
            $categoria = $cn -> getCategoria();
            $marca = $cn -> getMarca();
            $stock = $cn -> getStock();
            $fecha_creacion = $cn -> getFecha_creacion();
            $descripcion = $cn -> getDescripcion();

        }
        else
        {
            $codigo = "---";
            $nombre = "---";
            $categoria = "---";
            $marca = "---";
            $stock = "---";
            $fecha_creacion = "---";
            $descripcion = "---";
        }
        
        ?>
        
        <form action="../controller/actualizarProducto.php" method="POST">
            <table>
            <tr><td> <p> Codigo: </p> </td><td> <p> <input type="text" name="codigo" value="<?php echo $codigo; ?>"> </p> </td></tr>    
            <tr><td> <p> Nombre: </p> </td><td> <p> <input type="text" name="nombre" value="<?php echo $nombre; ?>"> </p> </td></tr>
            <tr><td> <p> Categoria: </p> </td><td> <p> <input type="text" name="categoria" value="<?php echo $categoria; ?>"> </p> </td></tr>
            <tr><td> <p> Marca: </p> </td><td> <p> <input type="text" name="marca" value="<?php echo $marca; ?>"> </p> </td></tr>
            <tr><td> <p> Stock: </p> </td><td> <p> <input type="text" name="stock" value="<?php echo $stock; ?>"> </p> </td></tr>
            <tr><td> <p> Fecha creacion: </p> </td><td> <p> <input type="date" name="fecha_creacion" value="<?php echo $fecha_creacion; ?>"> </p> </td></tr> 
            <tr><td> <p> Descripcion: </p> </td><td> <p> <input type="text" name="descripcion" value="<?php echo $descripcion; ?>"> </p> </td></tr>
            </p> </td></tr>
            </table>
            <p> <input type="submit" name="btn" value="Actualizar"> </p>
        </form>
        
    </body>
    
</html>
