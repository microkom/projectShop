<!-- |--------------------------------------------------------------------------
| Fragmento de Codigo HEADER
|--------------------------------------------------------------------------
|
| Contiene el codigo de la cabecera, de registro y logueo, además del buscador.
|
|
-->

<div class="row" id="banner-top">
    <div class="col-2">
    </div>
    <div class="col-8">
        <div class="row">
            <div class="d-none d-sm-block col-xl-6 col-md-12 col-sm-12 col-xs-12" id="banner-top-title">
                <strong>TIENDA DE COMPONENTES ELECTRÓNICOS</strong>
            </div>
        <div class="d-none d-xl-block col-xl-6" id="banner-top-text">
            Nuevos productos | Carrito | Formas de Envio | Metodos de pago
        </div>
</div>
    </div>
    <div class="col-2">
    </div>
</div>
<div class="row" id="banner-mid">
    <div class="col-2">
    </div>
    <div class="col-8">
        <div class="row">
            <div class="col-xl-3 col-md-4 col-sm-6 col-xs-12">
                <a href="{{url('/')}}"><img width="179" src="{{url('img/daw_electronics.png')}}"></a>
            </div>
            <div class="d-none d-xl-block col-xl-4">
            <div class="search-container">
                <form class="buscar" action="/action_page.php">
                    <input type="text" name="" id="busqueda" placeholder="Busca aqui">
                    <button type="submit"><i class="fa fa-search"></i></button>
                </form>
            </div>
            </div>
            <div class="d-none d-sm-block col-xl-3 col-md-4 col-sm-6">
                <button type="button" id="login" class="btn btn-primary" data-toggle="modal" data-target="#modalLogin">
                    INICIAR SESIÓN / REGISTRARSE
                </button>
                <!-- The Modal -->
                <div class="modal fade" id="modalLogin">
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
                                            <input type="text" name="username" id="usernameLogin"><br />
                                            <label for="password">Contraseña</label><br />
                                            <input type="password" name="password" id="passwordLogin"><br /><br />
                                            <input type="submit" class="btn btn-success" value="Iniciar sesión">
                                        </form>
                                    </div>
                                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                        <form action="#" method="post">
                                            <label for="username">Usuario</label><br />
                                            <input type="text" name="username" id="usernameSignup"><br />
                                            <label for="email">Correo electrónico</label><br />
                                            <input type="email" name="email" id="email"><br />
                                            <label for="password">Contraseña</label><br />
                                            <input type="password" name="password" id="passwordSignup"><br />
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
            <div class="d-none d-md-block col-xl-2 col-md-4">
                <!-- <div class="cart_anchor"></div> -->
                <form action="" method="post" >

					<span id="cantidad" class="btn btn-danger" >0</span><span  class="btn btn-danger" id="carrito" >0</span>
					<input type="submit" id="enviar" value="Ver Carrito">

				</form>
            </div>
        </div>
    </div>
    <div class="col-2">
    </div>
</div>

<div class="row align-center" id="banner-bottom">
        <div class="col-2">
        </div>
        <div class="col-8">
        <div class="mx-auto" style="width: 900px;">
            <nav class="navbar navbar-expand-lg navbar-dark">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown" href="{{url('category/informatica')}}" id="navbardrop">
                                INFORMÁTICA
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="{{url('category/informatica/portatiles')}}">Portatiles</a>
                                <a class="dropdown-item" href="{{url('category/informatica/pc sobremesa')}}">PC
                                    Sobremesa</a>
                                <a class="dropdown-item" href="{{url('category/informatica/tablets')}}">Tablets</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown" href="{{url('category/telefonia')}}" id="navbardrop">
                                TELEFONÍA
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="{{url('category/telefonia/smartphones')}}">Smartphones</a>
                                <a class="dropdown-item" href="{{url('category/telefonia/smartwatches')}}">Smartwatches</a>
                                <a class="dropdown-item" href="{{url('category/telefonia/telefonia domestica')}}">Telefonía
                                    doméstica</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown" href="{{url('category/television')}}" id="navbardrop">
                                TELEVISIÓN
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="{{url('category/television/televisores')}}">Televisores</a>
                                <a class="dropdown-item" href="{{url('category/television/proyectores')}}">Proyectores</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown" href="{{url('category/fotografia')}}" id="navbardrop">
                                FOTOGRAFIA
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="{{url('category/fotografia/camaras reflex')}}">Cámaras
                                    réflex</a>
                                <a class="dropdown-item" href="{{url('category/fotografia/camaras evil')}}">Cámaras
                                    Evil</a>
                                <a class="dropdown-item" href="{{url('category/fotografia/videocamaras deportivas')}}">Videocámaras
                                    deportivas</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown" href="{{url('category/ocio')}}" id="navbardrop">
                                OCIO
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="{{url('category/ocio/consolas')}}">Consolas</a>
                                <a class="dropdown-item" href="{{url('category/ocio/juegos')}}">Juegos</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown" href="{{url('category/accesorios')}}" id="navbardrop">
                                ACCESORIOS
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="{{url('category/accesorios/cables')}}">Cables</a>
                                <a class="dropdown-item" href="{{url('category/accesorios/cargadores')}}">Cargadores</a>
                                <a class="dropdown-item" href="{{url('category/accesorios/baterias')}}">Baterias</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
            </div>
        </div>
    <div class="col-2">
    </div>
</div>
