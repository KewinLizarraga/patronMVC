<html>
<body>
<?php

if(isset($_GET['msj']))
{
    if($_GET['msj']==1)
    {
        echo "<p>TU MENSAJE SE ENVIO , GRACIAS POR TU CONSULTA</p>";

    }
    else
    {
        echo "<p>TU MENSAJE SE ENVIO , GRACIAS POR TU CONSULTA</p>";

    }
}else{
?>
    <form action="../controller/servicioCorreo.php" method="POST">
    <P>NOMBRE: <input type="text" name="nombre" size="20"></P>
    <P>CORREO: <input type="text" name="correo" size="20"></P>
    <P>ASUNTO: <input type="text" name="asunto" size="20"></P>
    <P>MENSAJE: </P>
    <textarea name="mensaje" id="" cols="30" rows="10">
    
    </textarea>
    <p>  <button type="submit">Enviar Mensaje</button></p>
    </form>
    <p><a href="index.php">REGISTRAR</a></p>
    <?php } ?>
</body>
</html>