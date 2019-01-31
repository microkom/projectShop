<!-- |--------------------------------------------------------------------------
| Fragmento de Codigo HEADER
|--------------------------------------------------------------------------
|
| Contiene el codigo de la cabecera, de registro y logueo, además del buscador.
|
|
-->

<div class="row" id="banner-top">
    <div class="col-md-2">
    </div>
    <div class="col-md-8">
        <div class="row">
            <div class="col-md-5">
                <strong id="banner-top-title" class="align-middle">TIENDA DE COMPONENTES ELECTRÓNICOS</strong>
            </div>
            <div class="col-md-7" id="banner-top-text">
                <span class="align-middle">Mi cuenta | Nuevos productos | Noticias | Carrito | Formas de Envio
                    | Metodos de pago</span>
            </div>
        </div>
    </div>
    <div class="col-md-2">
    </div>
</div>
<div class="row" id="banner-mid">
    <div class="col-md-2">
    </div>
    <div class="col-md-8">
        <div class="row">
            <div class="col-md-3">
                <a href="{{url('/')}}"><img width="179" src="{{url('img/daw_electronics.png')}}"></a>
            </div>
            <div class="col-md-4">
                <form class="example" action="/action_page.php">
                    <input type="text" name="" id="busqueda" placeholder="Busca aqui">
                    <button type="submit"><i class="fa fa-search"></i></button>
                </form>
            </div>
            <div class="col-md-3">
                <button type="button" id="login" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                    INICIAR SESIÓN / REGISTRARSE
                </button>
                <!-- The Modal -->
                <div class="modal fade" id="myModal">
                    <div class="modal-dialog">
                        <div class="modal-content">

                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title text-center">INICIAR SESIÓN / REGISTRARSE</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>

                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home"
                                        role="tab" aria-controls="nav-home" aria-selected="true">Login</a>
                                    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile"
                                        role="tab" aria-controls="nav-profile" aria-selected="false">Registro</a>
                                </div>
                            </nav>

                            <!-- Modal body -->
                            <div class="modal-body">
                                <div class="tab-content" id="nav-tabContent">
                                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                                        aria-labelledby="nav-home-tab">
                                        <form action="#" method="post">
                                            <label for="username">Usuario</label><br />
                                            <input type="text" name="username" id="username"><br />
                                            <label for="password">Contraseña</label><br />
                                            <input type="password" name="password" id="password"><br /><br />
                                            <input type="submit" class="btn btn-success" value="Iniciar sesión">
                                        </form>
                                    </div>
                                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                        <form action="#" method="post">
                                            <label for="username">Usuario</label><br />
                                            <input type="text" name="username" id="username"><br />
                                            <label for="email">Correo electrónico</label><br />
                                            <input type="email" name="email" id="email"><br />
                                            <label for="password">Contraseña</label><br />
                                            <input type="password" name="password" id="password"><br />
                                            <label for="password">Repetir contraseña</label><br />
                                            <input type="password" name="password2" id="password2"><br /><br />
                                            <input type="submit" class="btn btn-success" value="Registrarse">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                CARRITO / $0.00
            </div>
        </div>
    </div>
    <div class="col-md-2">
    </div>
</div>

<div class="row" id="banner-bottom">
    <div class="col-md-2">
    </div>
    <div class="col-md-8">
        <nav class="navbar navbar-expand-sm navbar-dark">
            <ul class="navbar-nav">

                <!-- Dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="{{url('category/1')}}" id="navbardrop">
                        INFORMÁTICA
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Portatiles</a>
                        <a class="dropdown-item" href="#">PC Sobremesa</a>
                        <a class="dropdown-item" href="#">Tablets</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="{{url('category/2')}}" id="navbardrop">
                        TELEFONÍA
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Smartphones</a>
                        <a class="dropdown-item" href="#">Smartwatches</a>
                        <a class="dropdown-item" href="#">Telefonía doméstica</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="{{url('category/3')}}" id="navbardrop">
                        TELEVISIÓN
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Televisores</a>
                        <a class="dropdown-item" href="#">Mandos a distancia</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="{{url('category/4')}}" id="navbardrop">
                        FOTOGRAFIA
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Cámaras réflex</a>
                        <a class="dropdown-item" href="#">Cámaras</a>
                        <a class="dropdown-item" href="#">Videocámaras deportivas</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="{{url('category/5')}}" id="navbardrop">
                        OCIO
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Consolas</a>
                        <a class="dropdown-item" href="#">Juegos</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="{{url('category/6')}}" id="navbardrop">
                        ACCESORIOS
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Link 1</a>
                        <a class="dropdown-item" href="#">Link 2</a>
                        <a class="dropdown-item" href="#">Link 3</a>
                    </div>
                </li>
            </ul>
        </nav>
    </div>
    <div class="col-md-2">
    </div>
</div>
