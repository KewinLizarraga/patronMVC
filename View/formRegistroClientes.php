<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        if(isset($_GET['msj']))
        {
            if($_GET['msj']==1)
            {
                echo "<p><font color='red'>REGISTRO CORRECTO</font></p>";
            }
            else 
            {
                echo "<p><font color='red'>REGISTRO CORRECTO</font></p>";
            }
        }
        ?>
        
        <form action="../Controller/registraClientes.php" method="POST">
            <p>NOMBRE: <input type="text" name="nombre" ></p>
            <p>APELLIDO: <input type="text" name="apellido" ></p>
            <p>DNI: <input type="text" name="dni" ></p>
            <p>SEXO: <select name="sexo"> 
                    <option value="hombre">HOMBRE</option>
                    <option value="mujer">MUJER</option>
                    </select> 
            </p>
            <p><input type="submit" name="btn" value="REGISTRAR">
                
            
            </p>
        </form>
             
            
    </body>
</html>
