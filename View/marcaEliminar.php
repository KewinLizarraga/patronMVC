<?php

$indice=$_POST['posicion'];
// guardo los elementos en el arreglo correspondiente
session_start();

$_SESSION['codigo'][$indice]="x";
$_SESSION['producto'][$indice]="x";
$_SESSION['precio'][$indice]="0";
$_SESSION['cantidad'][$indice]="0";
$_SESSION['monto'][$indice]="0";

//retomamos la lista actualizada

?>


        <br/><br/>
        <label for="usr">LISTA DE PRODUCTOS</label>
        <table class="table table-striped">
               <thead>
                   <tr>
                        <th>COD</th>
                        <th>NOMBRE</th>                      
                        <th>PRECIO</th>
                        <th>CANTIDAD</th>
                        <th>MONTO</th>  
                        <th>OPCIONES</th>                                                    
                    </tr>           
                </thead>
        <tbody>   



<?php


for($i=0;$i<count($_SESSION['codigo']);$i++)
{
    if($_SESSION['codigo'] [$i]!="x")
    {
    echo "<tr>";
    echo "<td>".$_SESSION['codigo'][$i]."</td>";
    echo "<td>".$_SESSION['producto'][$i]."</td>";
    echo "<td>".$_SESSION['precio'][$i]."</td>";
    echo "<td>".$_SESSION['cantidad'][$i]."</td>";
    echo "<td>".$_SESSION['monto'][$i]."</td>";
    echo "<td><a href='#' onclick=\"retirarElemento(".$i.");\"><img src='../recursos/eliminar.png'  ></a></td>";
    echo "</tr>";
    }
    
}

?>
            
</tbody>
</table>









