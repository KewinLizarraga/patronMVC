function agregaLista()
{
    var codigo=document.getElementById('codigo').value;
    var nombre=document.getElementById('producto').value;
    var precio=document.getElementById('precio').value;
    var cantidad=document.getElementById('cantidad').value;
    var monto=(precio*cantidad);
    
    $.ajax({
      url: 'agregaListaDetalle.php',
      type: 'POST',
      data: {
        cod:codigo,
        producto:nombre,
        pre:precio,
        cant:cantidad,
        mon:monto
        }
    }).done(
            function (respuestaServidor)
            {
                $('#muestraDetalle').html(respuestaServidor);
                calcularTotales();
            }         
         );

  limpiar();

}

function limpiar()
{
    document.getElementById('codigo').value="";
    document.getElementById('producto').value="";
    document.getElementById('precio').value="";
    document.getElementById('cantidad').value="";

}

function calcularTotales()
{
    var subtotal;
    var igv;
    var total;

    $.ajax({
        url: 'calcularMonto.php',
        type: 'POST',

        /*data: {
          cod:codigo,
          producto:nombre,
          pre:precio,
          cant:cantidad,
          mon:monto
          }*/

      }).done(
              function (respuestaServidor)
              {
                //  $('#muestraDetalle').html(respuestaServidor);
                subtotal=Number(respuestaServidor);
                igv=(subtotal*0.18);
                total=(subtotal+igv);

                //mostramos los valores en la intefaz
                document.getElementById('subtotal').value=subtotal;
                document.getElementById('igv').value=igv;
                document.getElementById('total').value=total;

              }         
           );
  
}

function retirarElemento(indice)
{    //alert(indice);

    var i=indice;
    $.ajax({
        url: 'marcaEliminar.php',
        type: 'POST',

    data: {
          posicion:i
          }

      }).done(
              function (respuestaServidor)
              {
               $('#muestraDetalle').html(respuestaServidor);
             
              }         
           );

    calcularTotales();
}


function descontar()
{
    var descuento=document.getElementById('descuento').value;

    //alert(descuento);
    
    if(descuento==true)
    {
        //alert(descuento);
        //descuento el 10%
        var subtotal;
        var igv;
        var total;
        var descuento;
    
        $.ajax({
            url: 'descuento.php',
            type: 'POST',
    
          }).done(

            function (respuestaServidor)
            {
              //  $('#muestraDetalle').html(respuestaServidor);
              subtotal=Number(respuestaServidor);
              igv=(subtotal*0.18);
              total=(subtotal+igv);
              descuento=total-(total*0.10);

              //mostramos los valores en la intefaz
              document.getElementById('subtotal').value=subtotal;
              document.getElementById('igv').value=igv;
              document.getElementById('total').value=descuento;

            }         
         );

    }
    else
    {
        calcularTotales();

    }
}