<?php 
    include 'include/header.php';
    session_start();
    if(isset($_SESSION["user"])) {
        header("Location: admin/index.php");
    }
?>
    </head>
    <body>

    <!-- Caixa Login -->

    <div id="modal-overlay" class="modal-overlay"></div>
        <div class="login-pagepop" id="modal">
              <div class="form">
                <button id="close" class="close">&times;</button>
                <h2 style="text-align:center;">Login</h2>
                <form class="login-form" action="process/login.process.php" method="POST">
                  <input name="email" type="email" placeholder="Username"/>
                  <input name="password" type="password" placeholder="Password"/>
                  <button name="login" class="btlogin">Login</button>
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
                        <a href="index.php">
                            <img src="img/icond.ico" class="navbar-left logo-img img-away-left"><p class="navbar-text navbar-text-aux hidden-xs opensans"><b>Gestão Condominios Online</b></p>
                        </a>
                    </div>
                    <!--codigo para fazer login etc -->
                    <div class="collapse navbar-collapse" id="myNavbar">
                      <ul class="nav navbar-nav navbar-right navbar-effect">
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
                                <h1>Slide 1</h1>
                                <p>À distância de um click...</p>
                                <p><a href="#" class="btn btn-primary btn-md">Regista-te já!</a></p>
                          </div>
                    </div>
                    <div class="item">
                        <div class="slide2"></div>
                        <div class="carousel-caption">
                          <h1>Slide 2</h1>
                          <p>O céu é o limite!</p>
                          <p><a href="#" class="btn btn-primary btn-md">Neeeeepia</a></p>
                        </div>
                    </div>
                    <div class="item">
                        <div class="slide3"></div>
                        <div class="carousel-caption">
                            <h1>Slide 3</h1>
                            <p>Querias um site de gestão?! AH Ah ah</p>
                        </div>
                    </div>
                </div>
            </div>
            <!--icons destaque-->
            <div class="container-fluid marginBot" style="background-color: #fff;">
                <div class="row icons altitude">
                    <div class="col-lg-4 col-md-4 col-sm-12 text-center opensans">
                        <span class="glyphicon glyphicon-user highlight-icon"></span>
                        <span class="iconTitle smalltext">Condóminos</span>
                        <br />
                        <br />
                        <p class="container-fluid text-justify iconTextSpace">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        <button class="bt" id="bt1">
                            Click Me!
                        </button>
                        <!-- para mobile apenas -->
                        <div class="row">
                            <div class="col-md-12 hidden-lg">
                                <div class="accordion-group">
                                    <div id="form1Mobile" class="collapse form-registo">
                                        <form action="reguser.php" method="post">
                                            <div class="iconTitle form-reg-title">Condóminos</div>
                                            <label>Código de Acesso</label><br>
                                            <input type="text" name="codigo" placeholder="Código"/><br>
                                            <button  type="submit" name="regUser" class="btlogin">Registar</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 text-center opensans" id="adminReg">
                        <span class="glyphicon glyphicon-home highlight-icon"></span>
                        <span class="iconTitle smalltext">Administradores</span>
                        <br />
                        <br />
                        <p class="container-fluid text-justify iconTextSpace">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        <button class="bt" id="bt2">
                            Click Me!
                        </button>
                        <!-- para mobile apenas -->
                        <div class="row">
                            <div class="accordion-group col-md-12 hidden-lg">
                                <div id="form2Mobile" class="collapse form-registo">
                                    <form action="regadmins.php" method="POST">
                                        <div class="iconTitle form-reg-title">Administradores</div>
                                        <label>E-Mail</label><br>
                                        <input type="text" name="email" placeholder="eg. rui.pereira@gmail.com"/><br>
                                        <label>NIF do Utilizador</label><br>
                                        <input id="sonumeros" type="text" name="nifParc" minlength="9" maxlength="9" placeholder="Número de Identificação Fiscal do Utilizador"/><br>
                                        <label>Palavra Passe</label><br>
                                        <input type="password" name="password" placeholder="Palavra Passe"/><br>
                                        <button type="submit" name="regAdmin" class="btlogin">Registar</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-12 text-center opensans" id="empresasReg">
                        <span class="glyphicon glyphicon-briefcase highlight-icon"></span>
                        <span class="iconTitle smalltext">Empresas</span>
                        <br />
                        <br />
                        <p class="container-fluid text-justify iconTextSpace">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        <button class="bt" id="bt3">
                            Click Me!
                        </button>
                        <div class="row">
                            <div class="accordion-group col-md-12 hidden-lg">
                                <div id="form3Mobile" class="collapse form-registo">
                                    <form action="regempresa.php" method="POST">
                                        <div class="iconTitle form-reg-title">Empresas de Gestão</div>
                                        <label>Nome da Empresa</label><br>
                                        <input type="text" name="nome" placeholder="eg. Atec" /><br>
                                        <label>Telefone</label><br>
                                        <input type="text" name="tele" maxlength="9" placeholder="eg. 212563214" /><br>
                                        <label>E-Mail</label><br>
                                        <input type="text" name="email" placeholder="eg. contacto@empresa.com" /><br>
                                        <label>Palavra Passe</label><br>
                                        <input type="password" name="password" placeholder="Palavra Passe" ><br>
                                        <button  type="submit" name="regAux" class="btlogin">Registar</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion-group visible-md visible-lg">
                    <div id="form1" class="collapse form-registo">
                        <form action="reguser.php" method="post">
                            <div class="iconTitle form-reg-title">Condóminos</div>
                            <label>Código de Acesso</label><br>
                            <input type="text" name="codigo" placeholder="Código"/><br>
                            <button type="submit" name="regUser" class="btlogin">Registar</button>
                        </form>
                    </div>
                    <div id="form2" class="collapse form-registo">
                        <form action="regadmins.php" method="POST">
                            <div class="iconTitle form-reg-title">Administradores</div>
                            <label>E-Mail</label><br>
                            <input type="text" name="email" placeholder="eg. rui.pereira@gmail.com"/><br>
                            <label>NIF do Utilizador</label><br>
                            <input id="sonumeros" type="text" name="nifParc" maxlength="9" placeholder="Número de Identificação Fiscal do Utilizador"/><br>
                            <label>Palavra Passe</label><br>
                            <input type="password" name="password" placeholder="Palavra Passe"/><br>
                            <button type="submit" name="regAdmin" class="btlogin">Registar</button>
                        </form>
                    </div>
                    <div id="form3" class="collapse form-registo">
                        <form action="regempresa.php" method="POST">
                            <div class="iconTitle form-reg-title">Empresas de Gestão</div>
                            <label>Nome da Empresa</label><br>
                            <input type="text" name="nome" placeholder="eg. Atec" /><br>
                            <label>Telefone</label><br>
                            <input type="text" name="tele" maxlength="9" placeholder="eg. 212563214" /><br>
                            <label>E-Mail</label><br>
                            <input type="text" name="email" placeholder="eg. rui.pereira@gmail.com" /><br>
                            <label>Palavra Passe</label><br>
                            <input type="password" name="password" placeholder="Palavra Passe" ><br>
                            <button type="submit" name="regAux" class="btlogin">Registar</button>
                        </form>
                    </div>
                </div>
                <!--apresentar o produto-->
                <div class="row productPresentation1" style="overflow: hidden;" id="presentationSHOW">
                    <div class="col-lg-offset-2 col-lg-10 col-md-12">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 kk">
                                <h3 class="joseSans text-center productTitle">Funcional onde quer que seja</h3>
                                <div class="">
                                <br />
                                    <p class="productDesc1 text-center opensans">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 productimages text-center">
                                <img src="img/iphone.png" class="iphoneShowoff">
                                <img src="img/mbp.png" class="computershowoff">
                            </div>
                        </div>
                    </div>
                </div>

                <!--div de pessoal a dizer que isto é muita bom-->
                <div class="row testemunhos" id="testimonials">
                    <div class="row">
                        <div class="testemunhos-titulo text-center">
                            <div class="row">
                                <div class="col-lg-offset-2 col-lg-8">
                                    <h2>Clientes de várias partes do mundo..</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- caras de pessoas random -->
                    <div class="col-lg-2 visible-lg passive-people-left clearfix">
                        <div class="row">
                            <div class="col-lg-12 clearfix img1-left">
                                <img src="img/faces/meme.jpg" alt="..." class="img-circle pull-right">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 clearfix img2-left">
                                <img src="img/faces/marco.jpg" alt="..." class="img-circle pull-right">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 clearfix img3-left">
                                <img src="img/faces/cat.jpg" alt="..." class="img-circle pull-right">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-xs-12 vertical-hr-testimonials">
                        <div class="testemunho-esquerda">
                            <div class="img-testemunho-esquerda clearfix">
                                <img src="img/faces/peter-1.jpg" alt="..." class="img-circle pull-left">
                                <div class="pull-left client-info-l">
                                    <span class="client-name">Pedro Pinheiro</span><br />
                                    <span class="job-name">- Procrastinador Profissional</span>
                                </div>
                            </div>
                            <div class="quote-left quotes">
                                <blockquote class="blockquote_left center-block">
                                    <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                    <!-- aqui vem cenas -->
                    <div class="col-lg-4 col-sm-6 col-xs-12">
                        <div class="testemunho-direita">
                            <div class="img-testemunho-direita clearfix">
                                <img src="img/faces/me.jpg" alt="..." class="img-circle pull-right">
                                <div class="pull-right client-info-r">
                                    <span class="client-name">David Alexandre</span>
                                    <br />
                                    <span class="job-name">- Estudo cenas sem sentido</span>
                                </div>
                            </div>
                            <div class="quote-right quotes2">
                                <blockquote class="blockquote_right center-block">
                                    <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 visible-lg passive-people-right">
                        <div class="row">
                            <div class="col-lg-12 clearfix img1-right">
                                <img src="img/faces/sandro.jpg" alt="..." class="img-circle pull-left">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 clearfix img2-right">
                                <img src="img/faces/rat.jpg" alt="..." class="img-circle pull-left">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 clearfix img3-right">
                                <img src="img/faces/spacegoat.jpg" alt="..." class="img-circle pull-left">
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row icons altitude">
                    <div class="col-lg-4 col-md-4 col-sm-12 text-center opensans">
                        <div style="background-color: #0071BC; color: #fff;">
                            <span class="iconTitle">Parceiros</span>
                            <br>
                            <span style="font-size: 80px;">20</span>
                            € /Mês
                            <br>
                            <button class="bt2">Click Me!</button>
                        </div>
                        <div style="border-color: #0071BC; border-style:solid; border-width:1px; padding-bottom:20px;">
                        <br>
                            <span class="glyphicon glyphicon-ok"></span> Fazemos umas coisas destas
                            <hr style="width:44%; border-color:#0071BC; opacity: 0.7;">
                            <span class="glyphicon glyphicon-user"></span> Fazemos umas coisas destas
                            <hr style="width:44%; border-color:#0071BC; opacity: 0.7;">
                            <span class="glyphicon glyphicon-home"></span> Fazemos umas coisas destas
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 text-center opensans">
                        <div style="background-color: #0071BC; color: #fff;">
                            <span class="iconTitle">Parceiros</span>
                            <br>
                            <span style="font-size: 80px;">20</span>
                            € /Mês
                            <br>
                            <button class="bt2">Click Me!</button>
                        </div>
                        <div style="border-color: #0071BC; border-style:solid; border-width:1px; padding-bottom:20px;">
                        <br>
                            <span class="glyphicon glyphicon-ok"></span> Fazemos umas coisas destas
                            <hr style="width:44%; border-color:#0071BC; opacity: 0.7;">
                            <span class="glyphicon glyphicon-user"></span> Fazemos umas coisas destas
                            <hr style="width:44%; border-color:#0071BC; opacity: 0.7;">
                            <span class="glyphicon glyphicon-home"></span> Fazemos umas coisas destas
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 text-center opensans">
                        <div style="background-color: #0071BC; color: #fff;">
                            <span class="iconTitle">Parceiros</span>
                            <br>
                            <span style="font-size: 80px;">20</span>
                            € /Mês
                            <br>
                            <button class="bt2">Click Me!</button>
                        </div>
                        <div style="border-color: #0071BC; border-style:solid; border-width:1px; padding-bottom:20px;">
                        <br>
                            <span class="glyphicon glyphicon-ok"></span> Fazemos umas coisas destas
                            <hr style="width:44%; border-color:#0071BC; opacity: 0.7;">
                            <span class="glyphicon glyphicon-user"></span> Fazemos umas coisas destas
                            <hr style="width:44%; border-color:#0071BC; opacity: 0.7;">
                            <span class="glyphicon glyphicon-home"></span> Fazemos umas coisas destas
                        </div>
                    </div>
                </div>
            </div>

        <!-- include footer -->
        <?php 
            include 'include/footer.php';
        ?>
    </div><!--FIM DO JQUERY PARA FADEIN TOTAL DO SITE--> <!--ATENÇAO!!!! NÃO POR NADA PARA ALEM DESTA DIV, ESTA DIV FAZ COM QUE TODO O SITE DÊ FADE IN AO INICIAR

    Im impressed..
    -->
    </body>
</html>
