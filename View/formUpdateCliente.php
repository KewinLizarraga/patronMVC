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
        require_once ("../Model/cliente.php");
        if(isset($_GET['cod']))
        {
            $codigo=$_GET['cod'];
            $cn=new cliente();
            $cn->setClienteByCodigo($codigo);
            $nombre=$cn->getNombre();
            $apellido=$cn->getApellido();
            $dni=$cn->getDni();
            $sexo=$cn->getSexo();
            
        }
        else
        {
            $codigo="---";
            $nombre="---";
            $apellido="---";
            $dni="---";
            $sexo="---";
        }
       

        ?>
        
        <form action="../Controller/updateClientes.php" method="POST">
            <p>CODIGO: <input type="text" name="codigo" value="<?php echo $codigo; ?>" ></p>
            <p>NOMBRE: <input type="text" name="nombre" value="<?php echo $nombre; ?>" ></p>
            <p>APELLIDO: <input type="text" name="apellido" value="<?php echo $apellido; ?>"></p>
            <p>DNI: <input type="text" name="dni" value="<?php echo $dni; ?>" ></p>
            <p>SEXO: <select name="sexo"> 
                    <?php
                        if($sexo=="hombre")
                        {
                        ?>
                            <option value="hombre">HOMBRE</option>
                            <option value="mujer">MUJER</option>     
                      <?php
                        }
                        else  
                        {
                       ?>
                            <option value="hombre">HOMBRE</option>
                            <option value="mujer">MUJER</option>                                
                       <?php
                        }
                    ?>
                    </select> 
            </p>
            <p><input type="submit" name="btn" value="ACTUALIZAR">
                
            
            </p>
        </form>
    </body>
</html>
