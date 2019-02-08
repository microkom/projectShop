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
            $id = array();
            $i=0;
        @endphp
        @foreach($productos as $producto)
        @php
            $id[$i] = $producto->id;
        @endphp
            <tr>
                <td>{{$producto->brand}} {{$producto->model}} </td>
                @php
        $precio = 'price'.$producto->id;
                @endphp
                <td><input type="number" name="uds{{$producto->id}}" id="uds{{$producto->id}}" min="1" max="{{$producto->stock}}" value="1"></td>
                <td><p id="price{{$producto->id}}" name="price{{$producto->id}}">{{$producto->price}} </p></td>
               <td class="text-center"><a class="btn btn-danger" href="/carrito/borrar/{{$producto->id}}">Borrar</a></td>
            </tr>
        </tbody>
        @php
$i++;
        @endphp
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>

        $(document).on("click",'input',function(){

        var valor = $(this).parent().parent().find("td:eq(1)").find('input').val();
        var id = $(this).parent().parent().find("td:eq(2)").find('p').getAttribute('id');
        var price = parseFloat($(this).parent().parent().find("td:eq(2)").find('p').text());
        console.log(id);
        
        });
        
    

</script>
@stop