<html>
   <head>
   <meta  charset="UTF-8">
   <title></title>
   </head>
<body>
<?php

$codigo=$_GET['cod'];

?>

<h4>Eliminará el registro COD: <?php echo $codigo; ?></h4>
<p><a href="../controller/eliminar.php?cod=<?php echo $codigo; ?>">ACEPTAR</a> &nbsp; &nbsp;<a href="reporteCliente.php">CANCELAR</a></p>
</body>
</html>