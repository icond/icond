<?php 
    include 'include/header.php';
?>
        <script>
            $("#jquery").hide();
            $( document ).ready(function() {
                $("#jquery").slideUp( 0 ).delay( 300 ).fadeIn( 400 );

                $( "#bt1" ).click(function() {
                    $("#form2").hide();
                    $("#form3").hide();
                    $("#form1").slideToggle(400);

                    if($("#bt1").hasClass("active")){
                        $("#bt1").removeClass("active");
                    }else{
                        $("#bt1").addClass("active");
                    }

                    
                    $("#bt2").removeClass("active");
                    $("#bt3").removeClass("active");
                });
                $( "#bt2" ).click(function() {
                    $("#form1").hide();
                    $("#form3").hide();
                    $("#form2").slideToggle(400);

                    $("#bt1").removeClass("active");

                    if($("#bt2").hasClass("active")){
                        $("#bt2").removeClass("active");
                    }else{
                        $("#bt2").addClass("active");
                    }

                    $("#bt3").removeClass("active");
                });
                $( "#bt3" ).click(function() {
                    $("#form1").hide();
                    $("#form2").hide();
                    $("#form3").slideToggle(400);

                    $("#bt1").removeClass("active");
                    $("#bt2").removeClass("active");

                    if($("#bt3").hasClass("active")){
                        $("#bt3").removeClass("active");
                    }else{
                        $("#bt3").addClass("active");
                    }

                    
                });

            });
        </script>
        <script>
        $(document).ready(function() {
          $("#popup").click(function() {
            $("#modal-overlay").fadeIn();
            $("#modal").fadeIn();
            $(".body").addClass("blur-in");
            $(".body").removeClass("blur-out");
          });
          $("#modal-overlay").click(function() {
            $("#modal-overlay").fadeOut();
            $("#modal").fadeOut();
            $(".body").removeClass("blur-in");
            $(".body").addClass("blur-out");
          });
          $("#close").click(function() {
            $("#modal-overlay").fadeOut();
            $("#modal").fadeOut();
            $(".body").removeClass("blur-in");
            $(".body").addClass("blur-out");
          });
        });


        //So permitir numeros no field
        //from http://stackoverflow.com/questions/469357/html-text-input-allow-only-numeric-input
        $(document).ready(function() {
            $("#sonumeros").keydown(function (e) {
                // Allow: backspace, delete, tab, escape, enter and .
                if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
                     // Allow: Ctrl+A
                    (e.keyCode == 65 && e.ctrlKey === true) ||
                     // Allow: Ctrl+C
                    (e.keyCode == 67 && e.ctrlKey === true) ||
                     // Allow: Ctrl+X
                    (e.keyCode == 88 && e.ctrlKey === true) ||
                     // Allow: home, end, left, right
                    (e.keyCode >= 35 && e.keyCode <= 39)) {
                         // let it happen, don't do anything
                         return;
                }
                // Ensure that it is a number and stop the keypress
                if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
                    e.preventDefault();
                }
            });
        });
        </script>
    </head>
    <body>

    <!-- Caixa Login -->

    <div id="modal-overlay" class="modal-overlay"></div>
        <div class="login-pagepop" id="modal">
              <div class="form">
                <button id="close" class="close">&times;</button>
                <h2 style="text-align:center;">Login</h2>
                <form class="login-form">
                  <input type="text" placeholder="Username"/>
                  <input type="password" placeholder="Password"/>
                  <button class="btlogin">Login</button>
                  <p class="message">Não registado? <a href="#">Crie uma conta</a></p>
                </form>

            </div>
        </div>

        <div id="jquery"><!--JQUERY PARA FADEIN TOTAL DO SITE-->
        <div class="body">
            <!--header-->
            <nav class="navbar navbar-default navbar-fixed-top navbar-white">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <!--<a class="navbar-brand" href="#">WebSiteName</a>-->
                        <a href="/index.php">
                            <img src="img/icond.ico" class="navbar-left logo-img img-away-left"><p class="navbar-text navbar-text-aux hidden-xs opensans"><b>Gestão Condominios Online</b></p>
                        </a>
                    </div>
                    <!--codigo para fazer login etc -->
                    <div class="collapse navbar-collapse" id="myNavbar">
                      <ul class="nav navbar-nav navbar-right navbar-effect">
                        <li><a href="#"><span class="glyphicon glyphicon-user "></span> <span class="opensans">Sign Up</span></a></li>
                        <li><a href="#" id="popup"><span class="glyphicon glyphicon-log-in"></span><span class="opensans"> Login</span></a></li>
                      </ul>
                    </div>


                    <!--codigo para utilizador com sessão-->
                    <!--<div class="collapse navbar-collapse" id="myNavbar">
                        <ul class="nav navbar-nav navbar-right">
                            <li><p class="navbar-text-data"><span style="color: #fff;"><b>Login</span></p></b></li>
                        </ul>
                    </div>-->
                </div>
            </nav>

            <!--carrousel (banners)-->
            <div id="theCarousel" class="carousel slide" data-ride="carousel">
                <!-- Define how many slides to put in the carousel -->
                <ol class="carousel-indicators">
                  <li data-target="#theCarousel" data-slide-to="0" class="active"> </li >
                  <li data-target="#theCarousel" data-slide-to="1"> </li>
                  <li data-target ="#theCarousel" data-slide-to="2"> </li>
                </ol >
                <!-- Define the text to place over the image -->
                <div class="carousel-inner">
                      <div class="item active" >
                          <div class ="slide1"></div>
                          <div class="carousel-caption">
                                <h1>Chama-se carrousel ueh</h1>
                                <p>À distância de um click...</p>
                                <p><a href="#" class="btn btn-primary btn-md">Regista-te já!</a></p>
                          </div>
                    </div>
                    <div class="item">
                        <div class="slide2"></div>
                        <div class="carousel-caption">
                          <h1>Isto é uma treta</h1>
                          <p>O céu é o limite!</p>
                          <p><a href="#" class="btn btn-primary btn-md">Neeeeepia</a></p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="slide3"></div>
                        <div class="carousel-caption">
                            <h1>Bootstrap does it all!</h1>
                            <p>Querias um site de gestão?! AH Ah ah</p>
                        </div>
                    </div>
                </div>
                <!-- Quando clicamos numa das setas, determinar a sua acção -->
                <!--<a class="left carousel-control" href="#theCarousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"> </span>
                </a>
                <a class="right carousel-control" href="#theCarousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                </a>-->
            </div>
            <!--icons destaque-->
            <div class="container-fluid">
                <div class="row icons altitude">
                    <div class="col-lg-4 col-md-4 col-sm-12 text-center opensans">
                        <span class="glyphicon glyphicon-user highlight-icon"></span>
                        <span class="iconTitle smalltext">Condóminos</span>
                        <br />
                        <br />
                        <br />
                        <p class="container-fluid text-justify iconTextSpace">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        <button class="bt" id="bt1">
                            Click Me!
                        </button>
                    </div>

                <div class="accordion-group hidden-xl-down">
                    <div id="form1v2" class="collapse form-registo">
                        <div class="iconTitle form-reg-title">Condóminos</div>
                        <label>Código de Acesso</label><br>
                        <input type="text" placeholder="Código"/><br>
                        <button class="btlogin">Registar</button>
                    </div>
                </div>

                    <div class="col-lg-4 col-md-4 col-sm-12 text-center opensans">
                        <span class="glyphicon glyphicon-home highlight-icon"></span>
                        <span class="iconTitle smalltext">Administradores</span>
                        <br />
                        <br />
                        <br />
                        <p class="container-fluid text-justify iconTextSpace">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        <button class="bt" id="bt2">
                            Click Me!
                        </button>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 text-center opensans">
                        <span class="glyphicon glyphicon-briefcase highlight-icon"></span>
                        <span class="iconTitle smalltext">Empresas</span>
                        <br />
                        <br />
                        <br />
                        <p class="container-fluid text-justify iconTextSpace">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        <button class="bt" id="bt3">
                            Click Me!
                        </button>
                    </div>
                </div>
                <div class="accordion-group hidden-sm-up">
                    <div id="form1" class="collapse form-registo">
                        <div class="iconTitle form-reg-title">Condóminos</div>
                        <label>Código de Acesso</label><br>
                        <input type="text" placeholder="Código"/><br>
                        <button class="btlogin">Registar</button>
                    </div>
                    <div id="form2" class="collapse form-registo">
                        <form action="/regadmins.php" method="POST">
                            <div class="iconTitle form-reg-title">Administradores</div>
                            <label>E-Mail</label><br>
                            <input type="text" name="email" placeholder="eg. rui.pereira@gmail.com"/><br>
                            <label>NIF</label><br>
                            <input id="sonumeros" type="text" name="nif" maxlength="9" placeholder="Número de Identificação Fiscal"/><br>
                            <label>Palavra Passe</label><br>
                            <input type="password" name="password" placeholder="Palavra Passe"/><br>
                            <button class="btlogin">Registar</button>
                        </form>
                    </div>
                    <div id="form3" class="collapse form-registo">
                        <div class="iconTitle form-reg-title">Empresas</div>
                        <label>Primeiro Nome</label><br>
                        <input type="text" placeholder="eg. Rui" /><br>
                        <label>Ultimo Nome</label><br>
                        <input type="text" placeholder="eg. Pereira" /><br>
                        <label>Categoria</label><br>
                        <input type="text"/><br>
                        <label>Telemovél</label><br>
                        <input type="text" placeholder="eg. 912345678" /><br>
                        <label>E-Mail</label><br>
                        <input type="text" placeholder="eg. rui.pereira@gmail.com" /><br>
                        <label>Palavra Passe</label><br>
                        <input type="password"/ placeholder="Palavra Passe" ><br>
                        <button class="btlogin">Registar</button>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-12 embed-responsive embed-responsive-16by9 video">
                        <video width="960" height="540" autoplay muted loop>
                            <source src="vid/atec.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                </div>
                <div class="row icons altitude">
                    <div class="col-lg-4 col-md-4 col-sm-12 text-center opensans">
                        <span class="glyphicon glyphicon-euro highlight-icon"></span>
                        <span class="iconTitle">Parceiros</span>
                        <br />
                        <br />
                        <br />
                        <p class="container-fluid text-justify iconTextSpace">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        <br />
                        <div class="preco">Desde 10€/mês</div>
                        <br />
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 text-center opensans">
                        <span class="glyphicon glyphicon-euro highlight-icon"></span>
                        <span class="iconTitle">Condominios</span>
                        <br />
                        <br />
                        <br />
                        <p class="container-fluid text-justify iconTextSpace">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        <br />
                        <div class="preco">Desde 10€/mês</div>
                        <br />
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 text-center opensans">
                        <span class="glyphicon glyphicon-euro highlight-icon"></span>
                        <span class="iconTitle">Empresas</span>
                        <br />
                        <br />
                        <br />
                        <p class="container-fluid text-justify iconTextSpace">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        <br />
                        <div class="preco">Desde 10€/mês</div>
                        <br />
                    </div>
                </div>
    </div>
    

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        <!-- include footer -->
        <?php 
            include 'include/footer.php';
        ?>


    </div><!--FIM DO JQUERY PARA FADEIN TOTAL DO SITE--> <!--ATENÇAO!!!! NÃO POR NADA PARA ALEM DESTA DIV, ESTA DIV FAZ COM QUE TODO O SITE DÊ FADE IN AO INICIAR-->
    </body>
</html>
