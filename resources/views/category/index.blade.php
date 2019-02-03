@extends('layouts.master')

@section('content')
<div class="tituloCategoria">
    <h1>
    @if (isset($subCategory))
        {{$subCategory}}
    @else
        {{$category}}
    @endif
</h1>
   
</div> 
@stop
@section('content1')

@foreach ($arrayProductos as $producto)
<div class="cardGen">

    <div class="card">
        <div><a href="{{url('products/'.$producto->id)}}"><img class="card-img-top" src="{{url('img/'.$producto->imgRoute)}}" alt="Card image cap"></a></div>
        <div class="card-body">
        <a href="{{url('products/'.$producto->id)}}"><h5 class="card-title">{{$producto->brand}} {{$producto->model}}</h5></a>
            <p class="card-text">{{$producto->price}}€</p>
        </div>
        <div class="card-footer">
        <button type="button" class="btn btn-primary">Comprar</button>            
            <!-- <a class="heart"></a> -->
            <a href="#">
                <!-- <span class="glyphicon glyphicon-shopping-cart"></span> -->
                <small class="text-muted">Stock {{$producto->stock}}</small>
            </a>
        </div>
    </div>

</div>


@endforeach

<br>
@stop
