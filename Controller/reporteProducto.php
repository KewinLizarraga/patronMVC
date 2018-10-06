<?php

require_once("../model/producto.php");

$obj = new producto();
$resultado = $obj -> getListaProducto();

while($fila = $resultado -> fetch_array(MYSQLI_ASSOC))
{
    echo "<tr>".
            "<td>".$fila['id'].
            "</td><td align='center'>".$fila['nombre'].
            "</td><td align='center'>".$fila['categoria'].
            "</td><td align='center'>".$fila['marca'].
            "</td><td align='center'>".$fila['stock'].
            "</td><td align='center'>".$fila['fecha_creacion'].
            "</td><td align='center'>".$fila['descripcion'].
            "</td><td align='center'>".
            "<a href='../view/actualizarPro.php?cod=".$fila['id']."'><img src='../recursos/editar.png'></a>".
            "<a href='../view/eliminarPro.php?cod=".$fila['id']."'><img src='../recursos/eliminar.png'></a>".
         "</td></tr>";
}


?>