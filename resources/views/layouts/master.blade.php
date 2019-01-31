<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>DAW Electronics</title>

        <meta name="description" content="Página principal del Proyecto DAW Electronics">
        <meta name="grupoDAW" content="">

        <!-- BOOTSTRAP -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <!-- FUENTES -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- CSS -->
        <link href="{{asset('css/layoutHome.css')}}" rel="stylesheet">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
    </head>
    <body>

        <div class="container-fluid">

            <!----------------        HEADER       ---------------->

            @include('partials.header')


            <!----------------       ULTIMOS PRODUCTOS       ---------------->

            <div class="row">
                <div class="col-md-2">
                </div>
                <div class="col-md-8">
                @yield('content')
                </div>
                <div class="col-md-2">
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                </div>
                <div class="col-md-8">
                <div class="card-group">
                <div class="card">
                    <img class="card-img-top" src="/img/productos/acer01.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Nombre Producto1</h5>
                        <p class="card-text">250€</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Vendidos 20</small>
                        <a class="heart"></a>
                        <a href="#">
                            <span class="glyphicon glyphicon-shopping-cart"></span>
                        </a>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src="/img/productos/acer02.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Nombre Producto2</h5>
                        <p class="card-text">175€</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Vendidos 15</small>
                        <a class="heart"></a>
                        <a href="#">
                            <span class="glyphicon glyphicon-shopping-cart"></span>
                        </a>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src="/img/productos/apple01.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Nombre Producto3</h5>
                        <p class="card-text">350€</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Vendidos 37</small>
                        <a class="heart"></a>
                        <a href="#">
                            <span class="glyphicon glyphicon-shopping-cart"></span>
                        </a>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src="/img/productos/apple01.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Nombre Producto4</h5>
                        <p class="card-text">565€</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Vendidos 37</small>
                        <a class="heart"></a>
                        <a href="#">
                            <span class="glyphicon glyphicon-shopping-cart"></span>
                        </a>
                    </div>
                </div>
            </div>
                </div>
                <div class="col-md-2">
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                </div>
                <div class="col-md-8">
                </div>
                <div class="col-md-2">
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                </div>
                <div class="col-md-8">
                </div>
                <div class="col-md-2">
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                </div>
                <div class="col-md-2">
                </div>
                <div class="col-md-2">
                </div>
                <div class="col-md-4">
                </div>
                <div class="col-md-2">
                </div>
            </div>
        </div>

        <!----------------       Scripts       ---------------->

        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/scripts.js"></script>
    </body>

</html>
