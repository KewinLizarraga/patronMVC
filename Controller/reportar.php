<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once("../model/cliente.php");

$obj = new cliente();
$resultado = $obj -> getListaCliente();

while($fila = $resultado -> fetch_array(MYSQLI_ASSOC))
{
    echo "<tr>".
            "<td>".$fila['id'].
            "</td><td align='center'>".$fila['nombre'].
            "</td><td align='center'>".$fila['apellido'].
            "</td><td align='center'>".$fila['sexo'].
            "</td><td align='center'>".$fila['dni'].
            "</td><td align='center'>".
            "<a href='../view/actualizarCliente.php?cod=".$fila['id']."'><img src='../recursos/editar.png'></a>".
            "<a href='../view/eliminarCliente.php?cod=".$fila['id']."'><img src='../recursos/eliminar.png'></a>".
         "</td></tr>";
}