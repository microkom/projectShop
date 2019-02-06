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
            body {font-family: Arial;}

            /* Style the tab */
            .tab {
                overflow: hidden;
                border: 1px solid #ccc;
                background-color: #f1f1f1;
            }

            /* Style the buttons inside the tab */
            .tab button {
                background-color: inherit;
                float: left;
                border: none;
                outline: none;
                cursor: pointer;
                padding: 14px 16px;
                transition: 0.3s;
                font-size: 17px;
            }

            /* Change background color of buttons on hover */
            .tab button:hover {
                background-color: #ddd;
            }

            /* Create an active/current tablink class */
            .tab button.active {
                background-color: #ccc;
            }

            /* Style the tab content */
            .tabcontent {
                display: none;
                padding: 6px 12px;
                border: 1px solid #ccc;
                border-top: none;
            }
        </style>

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

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

        <link rel="stylesheet" type="text/css" href="css/layoutUser.css">


    </head>
    <body>

        <div class="container-fluid">

            <!----------------        HEADER       ---------------->

            <?php include 'sections/section-header.php' ?>


            <!----------------       CAROUSEL       ---------------->
        </div>




        <!-- TABS -->
        <div class="tab">
            <button class="tablinks" onclick="openCity(event, 'London')">Perfil</button>
            <button class="tablinks" onclick="openCity(event, 'Paris')">Favoritos</button>
            <button class="tablinks" onclick="openCity(event, 'Tokyo')">Pedidos</button>
        </div>

        <!-- BOTONES SUPERIORES -->
        <div id="London" class="tabcontent">
            <div class="user-group">
                <form action="/layoutUser.php" class="form-container">

                    <!-- INPUTS -->
                    
                    
                       <!--
_.__(.)< (MEOW BASE DE DATOS)
\___)   
~~~~~~~~~~~~~~~~~~-->
                    
                    <div class="container">
                        <h2>Perfil de Usuario</h2>
                        <form class="form-horizontal" action="/action_page.php">
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="name">Nombre:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="name" placeholder="Inserta Nombre" name="name" value="María" disabled> <!-- BD value -->
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="email">Email:</label>
                                <div class="col-sm-10">          
                                    <input type="email" class="form-control" id="email" placeholder="Introduce el email" name="email" value="mcartis@gmail.com" disabled><!-- BD value -->
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-sm-2" for="province">Provincia:</label>
                                <div class="col-sm-10">          
                                    <input type="text" class="form-control" id="province" placeholder="Introduce la provincia" name="province" value="NewJersey" disabled><!-- BD value -->
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="pwd">Ciudad:</label>
                                <div class="col-sm-10">          
                                    <input type="city" class="form-control" id="city" placeholder="Introduce la ciudad" name="city" value="East Bethelfurt" disabled><!-- BD value -->
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="pwd">Direccion:</label>
                                <div class="col-sm-10">          
                                    <input type="text" class="form-control" id="address" placeholder="Introduce la direccion" name="address" value="56925 Prosacco Wells Suite 224" disabled><!-- BD value -->
                                </div>
                            </div> <br><br>
                            <div class="form-group ">        
                                <div class="col-sm-offset-2 col-sm-10 ">
                                    <button type="button" class="btn btn-default w3-display-right">Cambiar Datos</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </form>
            </div>
        </div>

        <div id="Paris" class="tabcontent">
            <h3>Favoritos</h3>
            <p>Los productos favoritos del usuario.</p> 
        </div>

        <div id="Tokyo" class="tabcontent">
            <h3>Pedidos</h3>
            <p>Los pedidos que ha hecho el usuario.</p>
        </div>


        <!-- DOM -->
        <script>
            function openCity(evt, cityName) {
                var i, tabcontent, tablinks;
                tabcontent = document.getElementsByClassName("tabcontent");
                for (i = 0; i < tabcontent.length; i++) {
                    tabcontent[i].style.display = "none";
                }
                tablinks = document.getElementsByClassName("tablinks");
                for (i = 0; i < tablinks.length; i++) {
                    tablinks[i].className = tablinks[i].className.replace(" active", "");
                }
                document.getElementById(cityName).style.display = "block";
                evt.currentTarget.className += " active";
            }
        </script>
        
        <!-- JQUERY -->
        <script>
        
            
            
            
        </script>














    </body>
</html>