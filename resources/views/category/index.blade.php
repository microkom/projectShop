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
<form action="/search" method="POST" role="search">
	{{ csrf_field() }}
	<div class="input-group">
		<input type="text" class="form-control" name="q" placeholder="Search users"> <span class="input-group-btn">
		<button type="submit" class="btn btn-default">
			<span class="glyphicon glyphicon-search"></span>
		</button>
		</span>
	</div>
</form>
@stop
@section('content1')
<button type="button" class="btn btn-primary" id="verIds">Comprar</button>
<script>
	var idArr = new Array();
	var idPrice;
</script>
@foreach ($arrayProductos as $producto)
<div class="cardGen">

	<div class="card">
		<input type="hidden" id="productId" value="{{$producto->id}}">
		<div><a  href="{{url('products/'.$producto->id)}}"><img class="card-img-top" src="{{url('img/'.$producto->imgRoute)}}" alt="Card image cap"></a></div>
		<div class="card-body">
			<a href="{{url('products/'.$producto->id)}}"><h5 class="card-title">{{$producto->brand}} {{$producto->model}}</h5></a>
			<span class="card-text" id="product-price">{{$producto->price}}</span><span class="card-text">€ </span>
		</div>
		<div class="card-footer">
			<button type="button" class="btn btn-primary" id="shop">Comprar</button>



			<a href="#">
				<small class="text-muted">Stock {{$producto->stock}}</small>
			</a>
		</div>
	</div>

</div>


@endforeach

<script>

	/*Captura el valor e Id del producto  y lo pasa al carrito*/
	$(document).ready(function (){
		var cont = 0;
		$(this).on("click", "#shop", function(){
			var price = $(this).parent().parent().find('#product-price').text();
			var idPrice = $(this).parent().parent().find('#productId').val();
			$('#cantidad').text(cont);
			$('#carrito').text(price);
			
			idArr.push(idPrice);
			
		})
	});

</script>
<script>
	$(document).ready(function(){
		$('#verIds').on('click', function(){
			console.log(idArr);
		})
	});
</script>
@stop
