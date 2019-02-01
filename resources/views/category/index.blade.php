@extends('layouts.master')

@section('productos')
<div class="tituloCategoria">
    <h1>
    @if (isset($subCategory))
        {{$subCategory}}
    @else
        {{$category}}
    @endif

    </h1>
</div>




@foreach ($arrayProductos as $producto)

<div class="card-group">

    <div class="card">
        <div><img class="card-img-top" src="{{url('img/'.$producto->imgRoute)}}" alt="Card image cap"></div>
        <div class="card-body">
            <h5 class="card-title">{{$producto->brand}} {{$producto->model}}</h5>
            <p class="card-text">{{$producto->price}}€</p>
        </div>
        <div class="card-footer">
            <small class="text-muted">Vendidos 20</small>
            <a class="heart"></a>
            <a href="#">
                <span class="glyphicon glyphicon-shopping-cart"></span>
            </a>
        </div>
    </div>

</div>


@endforeach

<br>
@stop
