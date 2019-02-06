<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>DAW Electrónica</title>

        <meta name="description" content="página principal del Proyecto DAW Electronica">
        <meta name="grupoDAW" content="">

        <?php //include 'sections/section-links_home.php' ?>


        <!-- BOOTSTRAP-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

        <!-- JAVA SCRIPT-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

        <!-- CSS-->

        <link rel="stylesheet" type="text/css" href="css/layoutHome.css">
        <link rel="stylesheet" type="text/css" href="css/popupCarrito.css">

        <!-- Estilo Carrito -->
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <style>
            /*---   ---*/
            .heart {
                width: 100px;
                height: 100px;
                position: absolute;
                /**left: 50%;**/
                top: 93%;
                transform: translate(10%, -53%);
                background: url(http://imagizer.imageshack.com/img923/4545/XdJDuY.png) no-repeat;  
                cursor: pointer;

            }
            .heart-blast {
                background-position: -2800px 0;
                transition: background 1s steps(28);
            }

        </style>

        <style>
            .button {
                background-color: #4CAF50; /* Green */
                border: none;
                color: white;
                padding: 16px 32px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 16px;
                margin: 4px 2px;
                -webkit-transition-duration: 0.4s; /* Safari */
                transition-duration: 0.4s;
                cursor: pointer;
            }


            .button2 {
                background-color: white; 
                color: black; 
                border: 2px solid #008CBA;
            }

            .button2:hover {
                background-color: #008CBA;
                color: white;
            }

            .button4 {
                background-color: white;
                color: black;
                border: 2px solid #e7e7e7;
            }

            .button4:hover {background-color: #e7e7e7;}

            .w3-container{
                background-color: #44445c;
                color: white;
            } 

            #popupcarrito{
                color:black;
            }
        </style>


    </head>
    <body>

        <div class="container-fluid">

            <!----------------        HEADER       ---------------->

            <?php include 'sections/section-header.php' ?>


            <!----------------       CAROUSEL       ---------------->


        </div><br><br><br>

        <!----------------       PRODUCTOS NUEVOS       ---------------->

        <div class="card-group">
            <div class="card">
                <img class="card-img-top" src="/img/productos/acer01.png" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Nombre Producto1</h5>
                    <p class="card-text">250€</p>
                </div>
                <div class="card-footer">
                    <!--<small class="text-muted">Vendidos 20</small>-->
                    <a href=""><img src="/public/img/grayHeart.svg" height="30" alt="Favorito" title="Favorito"></a>
                    <a href="#">
                        <span onclick="document.getElementById('id01').style.display='block'"  class="glyphicon glyphicon-shopping-cart"></span>
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
                        <span onclick="document.getElementById('id01').style.display='block'"  class="glyphicon glyphicon-shopping-cart"></span>
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
                        <span onclick="document.getElementById('id01').style.display='block'"  class="glyphicon glyphicon-shopping-cart"></span>
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
                        <span onclick="document.getElementById('id01').style.display='block'"  class="glyphicon glyphicon-shopping-cart"></span>
                    </a>
                </div>
            </div>
        </div>

        <!--/////       GRUPO 2       /////-->

        <div class="card-group">

            <!--
_.__(.)< (MEOW BASE DE DATOS)
\___)   
~~~~~~~~~~~~~~~~~~-->
            <div class="card">
                <img class="card-img-top" src="/img/productos/acer01.png" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Nombre Producto5</h5>
                    <p class="card-text">735€</p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">Vendidos 20</small>
                    <a class="heart"></a>
                    <a href="#">
                        <span onclick="document.getElementById('id01').style.display='block'"  class="glyphicon glyphicon-shopping-cart"></span>
                    </a>
                </div>
            </div>
            <div class="card">
                <img class="card-img-top" src="/img/productos/acer02.png" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Nombre Producto6</h5>
                    <p class="card-text">50€</p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">Vendidos 15</small>
                    <a class="heart"></a>
                    <a href="#">
                        <span onclick="document.getElementById('id01').style.display='block'"  class="glyphicon glyphicon-shopping-cart"></span>
                    </a>
                </div>
            </div>
            <div class="card">
                <img class="card-img-top" src="/img/productos/apple01.png" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Nombre Producto7</h5>
                    <p class="card-text">435€</p>    <!-- BD PRECIO Producto -->
                </div>
                <div class="card-footer">
                    <small class="text-muted">Vendidos 37</small>    <!-- BD VENDIDOS Producto -->
                    <a class="heart"></a>
                    <a href="#">
                        <span onclick="document.getElementById('id01').style.display='block'"  class="glyphicon glyphicon-shopping-cart"></span>
                    </a>
                </div>
            </div>
            <div class="card">
                <img class="card-img-top" src="/img/productos/apple01.png" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Nombre Producto3</h5>
                    <p class="card-text">215€</p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">Vendidos 37</small>
                    <a data-toggle="tooltip" title="Debe iniciar session o registrarte." class="heart"></a>
                    <a href="#">
                        <span onclick="document.getElementById('id01').style.display='block'"  class="glyphicon glyphicon-shopping-cart"></span>
                    </a>
                </div> 
            </div>
        </div>

        <!--------------- POPUP CARRITO --------------->
        <div class="w3-container">
            <!-- MODAL -->

            <div id="id01" class="w3-modal">
                <div  class="w3-modal-content w3-card-4 w3-animate-zoom">
                    <!-- CABECERA del Modal -->
                    <header class="w3-container"> 
                        <span onclick="document.getElementById('id01').style.display='none'" 
                              class="w3-button w3-blue w3-xlarge w3-display-topright">&times;</span>
                        <h2>Carrito</h2>
                    </header>
                    <!-- CUERPO del Modal -->
                    <h3 id="popupcarrito">HP-E2-9000e</h3>
                    <p id="popupcarrito">Este equipo incorpora un procesador Intel Core i3-7020U, con velocidad de rendimiento de hasta 2.3 GHz y una RAM de 4 GB de memoria DDR4. Juntos te permitirán trabajar, escuchar música y navegar...</p>
                    <form action="/layoutHome.php" class="form-container">

                        <!-- INPUTS -->
                        <span id="popupcarrito"><b>Cantidad</b> <input type="number" placeholder="Cantidad" name="cantidad" min=1 max=5 value="1" required> </span>   
                        <!--
_.__(.)< (MEOW BASE DE DATOS)
\___)   
~~~~~~~~~~~~~~~~~~-->
                    </form>

                    <!-- FOOTER del Modal -->
                    <div class="w3-container w3-light-grey w3-padding">
                        <!-- BOTONES -->
                        <button type="submit" class="button button2">Pasar por Caja</button>
                        <button type="button" class="button button4" onclick="document.getElementById('id01').style.display='none'">Seguir Comprando</button>
                    </div>
                </div>
            </div>
        </div>

        <!--------------- JQUERY --------------->
        <!-- Click al CORAZON -->
        <script>
            $(document).ready(function(){
                $(".heart").on("click", function() {
                    <?php if(!isset($_SESSION['count'])){ ?>        //CONTROL DE SESSION DE USUARIO

                    $(this).toggleClass("heart-blast");

                    <?php }else{?>
                    alert("Debe iniciar session o registrarte.");
                    $('[data-toggle="tooltip"]').tooltip();   
                    <?php } ?>
                });
            }); 
        </script>


    </body>

</html>