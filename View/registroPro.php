<!DOCTYPE html>

<html>
    
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    
    <body>
        
        <?php
        
        if(isset($_GET['msj']))
        {
            if(($_GET['msj']) == 1)
            {
                echo "<p> Registro Correcto </p>";
            }
            else
            {
                echo "<p> Registro Incorrecto </p>";
            }
        }
        
        ?>
        
        <form action="../controller/registroProducto.php" method="POST">
            <table>
            <tr><td> <p> Nombre: </p> </td><td> <p> <input type="text" name="nombre"> </p> </td></tr>
            <tr><td> <p> Categoria: </p> </td><td> <p> <input type="text" name="categoria"> </p> </td></tr>
            <tr><td> <p> Marca: </p> </td><td> <p> <input type="text" name="marca"> </p> </td></tr>
            <tr><td> <p> Stock: </p> </td><td> <p> <input type="text" name="stock"> </p> </td></tr>
            <tr><td> <p> Fecha de Creacion: </p> </td><td> <p> <input type="date" name="fecha_creacion"> </p> </td></tr>
            <tr><td> <p> Descripcion: </p> </td><td> <p> <input type="text" name="descripcion"> </p> </td></tr>
            </p> </td></tr>
            </table>
            <p> <input type="submit" name="btn" value="Registrar"> </p>
        </form>
        
    </body>
    
</html>
