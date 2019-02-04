<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>DAW Electronics</title>

        <meta name="description" content="Página principal del Proyecto DAW Electronics">
        <meta name="grupoDAW" content="">

        <!--GLYPHICON-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

        <!-- BOOTSTRAP -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <!-- FUENTES -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- CSS -->
        <link href="{{asset('css/layoutHome.css')}}" rel="stylesheet">

        <!-- Estilo Carrito -->
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

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
                <div class="col-md-8 width-900">
                @yield('content')
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
