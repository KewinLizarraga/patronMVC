<?php

session_start();
$suma=0;

for($i=0;$i<count($_SESSION['monto']);$i++)
{
    $suma=$suma+$_SESSION['monto'][$i];
}

echo $suma;

?>