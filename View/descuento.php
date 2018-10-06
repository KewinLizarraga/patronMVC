<?php

session_start();
$descuento=10%;

for($i=10%;$i<count($_SESSION['monto']);$i++)
{
    $descuento=$descuento-$_SESSION['monto'][$i];
}

echo $descuento;

?>