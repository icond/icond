<!DOCTYPE html>
<html>
    <head>
        <title>icond</title>
        <meta charset="UTF-8">
        <link rel="icon" href="../img/icond_v1.png">
        <!--css-->
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/loginform.css">
       <!--jquery-->
        <script   src="https://code.jquery.com/jquery-2.2.3.js"   integrity="sha256-laXWtGydpwqJ8JA+X9x2miwmaiKhn8tVmOVEigRNtP4="   crossorigin="anonymous"></script>
        <!--js-->
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <!--adicionar aqui jquery-->
        <meta name = "viewport" content = "width = device-width, initial-scale = 1.0">
        <script>
            $("#jquery").hide();
            $( document ).ready(function() {
                $("#jquery").slideUp( 0 ).delay( 300 ).fadeIn( 400 );

                $( "#bt1" ).click(function() {
                    $("#form1").slideToggle(400);
                    $("#form2").hide();
                    $("#form3").hide();
                });
                $( "#bt2" ).click(function() {
                    $("#form1").hide();
                    $("#form2").slideToggle(400);
                    $("#form3").hide();
                });
                $( "#bt3" ).click(function() {
                    $("#form1").hide();
                    $("#form2").hide();
                    $("#form3").slideToggle(400);
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
        </script>
    </head>
    <body>
        <div class="body">
            <div id="jquery"><!--JQUERY PARA FADEIN TOTAL DO SITE-->
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
                            <img src="img/icond.ico" class="navbar-left logo-img img-away-left"><p class="navbar-text navbar-text-aux hidden-xs"><b>Gestão Condominios Online</b></p>
                        </a>
                    </div>
                    <!--codigo para fazer login etc -->
                    <div class="collapse navbar-collapse" id="myNavbar">
                      <ul class="nav navbar-nav navbar-right navbar-effect">
                        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                        <li><a href="#" id="popup"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
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
                    <div class="col-lg-4 col-md-4 col-sm-12 text-center ">
                        <span class="glyphicon glyphicon-user highlight-icon"></span>
                        <span class="iconTitle">Condóminos</span>
                        <br />
                        <br />
                        <br />
                        <p class="container-fluid text-justify iconTextSpace">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        <button class="bt" id="bt1">
                            Click Me!
                        </button>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 text-center ">
                        <span class="glyphicon glyphicon-home highlight-icon"></span>
                        <span class="iconTitle">Administradores</span>
                        <br />
                        <br />
                        <br />
                        <p class="container-fluid text-justify iconTextSpace">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        <button class="bt" id="bt2">
                            Click Me!
                        </button>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 text-center ">
                        <span class="glyphicon glyphicon-briefcase highlight-icon"></span>
                        <span class="iconTitle">Empresas e Paerceiros</span>
                        <br />
                        <br />
                        <br />
                        <p class="container-fluid text-justify iconTextSpace">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        <button class="bt" id="bt3">
                            Click Me!
                        </button>
                    </div>
                </div>
                <div class="accordion-group">
                    <div id="form1" class="collapse">
                        FORM 1<br>
                        FORM 1<br>
                        FORM 1<br>
                        FORM 1<br>
                    </div>
                    <div id="form2" class="collapse">
                        FORM 2<br>
                        FORM 2<br>
                        FORM 2<br>
                        FORM 2<br>
                    </div>
                    <div id="form3" class="collapse">
                        FORM 3<br>
                        FORM 3<br>
                        FORM 3<br>
                        FORM 3<br>
                    </div>
                </div>
            </div>
            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        </div><!--FIM DO JQUERY PARA FADEIN TOTAL DO SITE-->
    </div>
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



    </body>
</html>
