<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once ("../Model/cliente.php");

$obj=new cliente();
$resultado=$obj->getListaClientes();
while($fila=$resultado->fetch_array(MYSQLI_ASSOC))
{
    echo "<tr>".
      "<td>".$fila['id'].
      "</td><td>".$fila['nombre'].
      "</td><td>".$fila['apellido'].
      "</td><td>".$fila['dni'].
      "</td><td>".$fila['sexo'].
      "</td><td>".
      "<a href='../View/formUpdateCliente.php?cod=".$fila['id']."'><img src='../recursos/edit01.jpg'></a>".
      "<a href='../View/formDeleteCliente.php?cod=".$fila['id']."'><img src='../recursos/delete01.png'></a>".
            
    "</td></tr>";
    
}