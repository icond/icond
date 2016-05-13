<!DOCTYPE html>
<html>
    <head>
        <title>icond</title>
        <meta charset="UTF-8">
        <link rel="icon" href="localhost/icond/img/favicon.png">
        <!--css-->
		<link rel="stylesheet" type="text/css" href="css/css.css"> 
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
       <!--jquery-->
        <script   src="https://code.jquery.com/jquery-2.2.3.js"   integrity="sha256-laXWtGydpwqJ8JA+X9x2miwmaiKhn8tVmOVEigRNtP4="   crossorigin="anonymous"></script>
        <!--js-->
        <script type="text/javascript" src="js/script.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <!--adicionar aqui jquery-->
        <meta name = "viewport" content = "width = device-width, initial-scale = 1.0">
    </head>
    <body>
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
                    
                        <li class="main-nav"><a class="signin" style="color: #0071BC" href="#"><span class="glyphicon glyphicon-user"></span>Login</a></li>
                    
                    <div class="user-modal">
                        <div class="user-modal-container">

                            <div id="login">
                                <form class="form" method="post">
                                    <p class="fieldset">
                                        <label class="image-replace email" for="signin-email">E-mail</label>
                                        <input class="full-width has-padding has-border" id="signin-email" type="text" placeholder="E-mail" name="user">
                                        <span class="error-message">An account with this email address does not exist!</span>
                                    </p>

                                    <p class="fieldset">
                                        <label class="image-replace password" for="signin-password">Password</label>
                                        <input class="full-width has-padding has-border" id="signin-password" type="password" placeholder="Password" name="pass">
                                        <a href="#0" class="hide-password">Show</a>
                                        <span class="error-message">Wrong password! Try again.</span>
                                    </p>

                                    <p class="fieldset">
                                        <input type="checkbox" id="remember-me" checked>
                                        <label for="remember-me">Remember me</label>
                                    </p>
                                    <p class="fieldset" ><a href="#0">Forgot your password?</a></p>
                                    <p class="fieldset">
                                        <input class="full-width" type="submit" value="Login" name="submit">
                                    </p>
                                    
                                </form>
                                
                                <!-- <a href="#0" class="close-form">Close</a> -->
                            </div>

                            <div id="reset-password">
                                <p class="form-message">Lost your password? Please enter your email address.</br> You will receive a link to create a new password.</p>

                                <form class="form">
                                    <p class="fieldset">
                                        <label class="image-replace email" for="reset-email">E-mail</label>
                                        <input class="full-width has-padding has-border" id="reset-email" type="email" placeholder="E-mail">
                                        <span class="error-message">An account with this email does not exist!</span>
                                    </p>

                                    <p class="fieldset">
                                        <input class="full-width has-padding" type="submit" value="Reset password">
                                    </p>
                                </form>

                                <p class="form-bottom-message"><a href="#0">Back to log-in</a></p>
                            </div>
                            <a href="#0" class="close-form">Close</a>
                        </div>
                    </div>
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
                    <span class="glyphicon glyphicon-signal highlight-icon"></span>
                    <span class="iconTitle">Sem Instalações</span>
                    <br />
                    <br />
                    <br />
                    <p class="container-fluid text-justify iconTextSpace">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 text-center ">
                    <span class="glyphicon glyphicon-cog highlight-icon"></span>
                    <span class="iconTitle">Sem Instalações</span>
                    <br />
                    <br />
                    <br />
                    <p class="container-fluid text-justify iconTextSpace">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 text-center ">
                    <span class="glyphicon glyphicon-refresh highlight-icon"></span>
                    <span class="iconTitle">Sem Instalações</span>
                    <br />
                    <br />
                    <br />
                    <p class="container-fluid text-justify iconTextSpace">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            </div>
        </div>
        <div class="bt-strip">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-12 text-center div">
                        <button type="button" class="btn btn-warning btn-lg bt">Regista-te já!</button>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 text-center div">
                        <button type="button" class="btn btn-warning btn-lg bt">Regista-te já!</button>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 text-center div">
                        <button type="button" class="btn btn-warning btn-lg bt">Regista-te já!</button>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
