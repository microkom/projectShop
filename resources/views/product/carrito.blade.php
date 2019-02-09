@extends('layouts.detail')

@section('content')

<form action="#" method="post">
    <div class="tituloCategoria">
        <h1>LISTADO DEL CARRITO</h1>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>Producto</th>
                <th>Unidades</th>
                <th>Precio</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        @php
        @endphp
        @foreach($productos as $producto)
            <tr>
                <td>{{$producto->brand}} {{$producto->model}} </td>
                @php
        $id = $producto->id;
        $price = $producto->price;
        @endphp
                @if(isset($_SESSION['listaCarrito']))
                @foreach($_SESSION['listaCarrito'] as $key => $valor)
                @php    
                        $cant = $valor['cant'];
                        @endphp
                @endforeach
                @endif
                
                <td><input type="number" name="uds{{$producto->id}}" id="uds{{$producto->id}}" min="1" max="{{$producto->stock}}" value="<?php if(!isset($cant)){ $cant = 1; echo $cant;} else { echo $cant; } ?>" oninput="ajax(<?=$id?>,this.value,<?=$price?>)">
                <input type="hidden" id="priceStatic{{$producto->id}}" id="priceStatic{{$producto->id}}" value="{{$producto->price}}"></td>
                <td><p id="price{{$producto->id}}" name="price{{$producto->id}}">{{$producto->price}} </p></td>
               <td class="text-center"><a class="btn btn-danger" href="/carrito/borrar/{{$producto->id}}">Borrar</a></td>
            </tr>
        </tbody>
        @endforeach
        <tfoot>
            <tr>

                <td>€</td>
                <td></td>
                <td></td>
                <td class="text-center"><input type="submit" value="Realizar compra" name="compra" id="compra"></td>
            </tr>
        </tfoot>
    </table>

</form>
@php
if(isset($_SESSION['listaCarrito']))
var_dump($_SESSION['listaCarrito']);
@endphp
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>

function ajax(id,cant,price){
    // Create our XMLHttpRequest object
    var hr = new XMLHttpRequest();
    // Create some variables we need to send to our PHP file
    var url = "my_parse_file.php";
    var pId = 'price'+id;
    var vars = "id="+id+"&price="+price+"&cant="+cant;
                hr.open("POST", url, true);
                // Set content type header information for sending url encoded variables in the request
                hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                // Access the onreadystatechange event for the XMLHttpRequest object
                hr.onreadystatechange = function() {
                    if(hr.readyState == 4 && hr.status == 200) {
                        var return_data = hr.responseText;
                    
                        document.getElementById(pId).innerHTML = return_data;
                    }
                }
                // Send the data to PHP now... and wait for response to update the status div
                hr.send(vars); // Actually execute the request
    

}

</script>
@stop