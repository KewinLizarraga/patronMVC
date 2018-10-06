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
        
        require_once("../model/cliente.php");
        
        if(isset($_GET['cod']))
        {
            $codigo = $_GET['cod'];
            $cn = new cliente();
            $cn -> setClienteByCodigo($codigo);
            
            $nombre = $cn -> getNombre();
            $apellido = $cn -> getApellido();
            $sexo = $cn -> getSexo();
            $dni = $cn -> getDni();
        }
        else
        {
            $codigo = "---";
            $apellido = "---";
            $nombre = "---";
            $sexo = "---";
            $dni = "---";
        }
        
        ?>
        
        <form action="../controller/actualizarClientes.php" method="POST">
            <table>
            <tr><td> <p> Codigo: </p> </td><td> <p> <input type="text" name="codigo" value="<?php echo $codigo; ?>"> </p> </td></tr>    
            <tr><td> <p> Nombre: </p> </td><td> <p> <input type="text" name="nombre" value="<?php echo $nombre; ?>"> </p> </td></tr>
            <tr><td> <p> Apellido: </p> </td><td> <p> <input type="text" name="apellido" value="<?php echo $apellido; ?>"> </p> </td></tr>
            <tr><td> <p> Sexo: </p> </td><td> <p> <select name="sexo">
            <?php

            if($sexo=="hombre")
            {
    
            ?>

                <option value="hombre" selected>Hombre</option>
                <option value="mujer">Mujer</option>

            <?php

            }
            else
            {

            ?>
               <option value="hombre">Hombre</option>
               <option value="mujer">Mujer</option>
        
            <?php
            }       
            ?> 
        
        </select> 
            </p> </td></tr>
            <tr><td> <p> DNI: </p> </td><td> <p> <input type="text" name="dni" value="<?php echo $dni; ?>"> </p> </td></tr>
            </table>
            <p> <input type="submit" name="btn" value="Actualizar"> </p>
        </form>
        
    </body>
    
</html>
