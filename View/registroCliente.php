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
        
        <form action="../controller/registrar.php" method="POST">
            <table>
            <tr><td> <p> Nombre: </p> </td><td> <p> <input type="text" name="nombre"> </p> </td></tr>
            <tr><td> <p> Apellido: </p> </td><td> <p> <input type="text" name="apellido"> </p> </td></tr>
            <tr><td> <p> Sexo: </p> </td><td> <p> <select name="sexo">
                    <option value="hombre">Hombre</option>
                    <option value="mujer">Mujer</option>
                </select> 
            </p> </td></tr>
            <tr><td> <p> DNI: </p> </td><td> <p> <input type="text" name="dni"> </p> </td></tr>
            </table>
            <p> <input type="submit" name="btn" value="Registrar"> </p>
        </form>
        
    </body>
    
</html>
