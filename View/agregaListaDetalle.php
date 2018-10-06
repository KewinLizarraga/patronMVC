<?php
// recupero los valores que llegan del javascript
$codigo=$_POST['cod'];
$producto=$_POST['producto'];
$precio=$_POST['pre'];
$cantidad=$_POST['cant'];
$monto=$_POST['mon'];

// guardo los elementos en el arreglo correspondiente
session_start();

$_SESSION['codigo'][]=$codigo;
$_SESSION['producto'][]=$producto;
$_SESSION['precio'][]=$precio;
$_SESSION['cantidad'][]=$cantidad;
$_SESSION['monto'][]=$monto;

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