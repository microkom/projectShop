@extends("layouts.detail")

@section("content")
<div class="big-padding text-center blue-grey white-text">
    <h1>Pedidos</h1>
</div>
<div class="container">
    <table class="table table-bordered">
        <thead>
            <tr>
                <td>Numero pedido</td>
                <td>Cliente</td>
                <td>Total</td>
                <td>Fecha de pedido</td>
            </tr>
        </thead>
        <tbody>
            @foreach($orders as $order)
            <tr>
                <td>{{$order->id}}</td>
                <td>{{$order->userid}}</td>
                <td>{{$order->total}}</td>
                <td>{{$order->created_at}}</td>
              
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
