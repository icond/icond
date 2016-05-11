<!DOCTYPE html>
<html>
    <head>
        <title>icond</title>
        <meta charset="UTF-8">        
        <link rel="icon" href="../img/icond_v1.png">
        <!--css-->
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="../css/style.css">
        <!--jquery-->
        <script src="https://code.jquery.com/jquery-2.2.3.js" integrity="sha256-laXWtGydpwqJ8JA+X9x2miwmaiKhn8tVmOVEigRNtP4=" crossorigin="anonymous"></script>
        <!--js-->
        <script type="text/javascript" src="../js/bootstrap.min.js"></script>
        <!--adicionar aqui jquery-->
        <meta name = "viewport" content = "width = device-width, initial-scale = 1.0">
    </head>
    <body class="adminbg">
    <!--header-->
        <nav class="navbar navbar-default">
            <div class="container-fluid">
              <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                  </button>
                  <!--<a class="navbar-brand" href="#">WebSiteName</a>-->
                  <a href="index.php">
                      <img src="../img/icond.ico" class="navbar-left logo-img img-away-left"><p class="navbar-text navbar-text-aux hidden-xs"><b>Gestão Condominios Online</b></p>
                  </a>
              </div>
                <!--codigo para fazer login etc
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                    </ul>
                </div>
                codigo para utilizador com sessão-->
              <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                  <li><p class="navbar-text-data"><span style="color: #0071BC;"><b>Utilizador:</span> <span style="color: #fff;"> Admin</span></p></b></li>
                  <li><p class="navbar-text-data"><span style="color: #0071BC;"><b>Condominio:</span> <span style="color: #fff;"> 00039</span></p></b></li>
                  <li>
                    <p class="navbar-text-data">
                      <!--<a href="#" class="myExitButton">Sair</a>-->
                      <li>
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle"><span class="glyphicon glyphicon-user"></span> <b class="caret"></b></a>
                        <ul class="dropdown-menu" id="menu1">
                          <!--<li class="divider"></li>-->
                          <li><a href="#">Dados do Condomínio</a></li>
                          <li><a href="#">Alterar Senha</a></li>
                          <li><a href="#">Utilizadores</a></li>
                          <li><a href="#">Terminar Sessão</a></li>
                        </ul>
                      </li>
                    </p>
                  </li>
                  <!--em caso de o ecrã ser extra small -- MOSTRAR MENU LÁ EM CIMA KAPPA PRIDE-->
                  <hr class="hr-dropdown">
                  <li class="hidden-sm hidden-md hidden-lg hidden-xl">
                    <a href="#" data-toggle="dropdown" class="dropdown-toggle">Contabilidade <b class="caret"></b></a>
                    <ul class="dropdown-menu" id="menu1">
                      <li><a href="#">Gestão de Quotas</a></li>
                      <li><a href="#">Orçamentos Condomínio</a></li>
                      <li><a href="#">Conta Bancária</a></li>
                      <li><a href="#">Fundo Maneio</a></li>
                      <li><a href="#">Despesas</a></li>
                    </ul>
                  </li>
                  <li class="hidden-sm hidden-md hidden-lg hidden-xl">
                      <a href="#" data-toggle="dropdown" class="dropdown-toggle">Manutenção <b class="caret"></b></a>
                      <ul class="dropdown-menu" id="menu1">
                        <li>
                          <!--<li class="divider"></li>-->
                          <li><a href="#">Ocorrências</a></li>
                          <li><a href="#">Vistorias</a></li>
                       </li>
                      </ul>
                  </li>
                  <li class="hidden-sm hidden-md hidden-lg hidden-xl">
                    <a href="#">Condomínios</a>
                  </li>
                  <li class="hidden-sm hidden-md hidden-lg hidden-xl">
                    <a href="#">Frações</a>
                  </li>
                  <li class="hidden-sm hidden-md hidden-lg hidden-xl">
                    <a href="#" data-toggle="dropdown" class="dropdown-toggle">Documentos <b class="caret"></b></a>
                    <ul class="dropdown-menu" id="menu1">
                      <li>
                      <!--<li class="divider"></li>-->
                        <li><a href="#">Consulta de Documentos</a></li>
                        <li><a href="#">Novo Documento</a></li>
                      </li>
                    </ul>
                  </li>
                  <!--end MENU para ecrãs pequenos-->


                </ul>
              </div>
          </div>
        </nav>
          <div class="navmenu hidden-xs">
              <ul class="nav nav-pills">
                  <!--<li class="active"><a href="#">Regular link</a></li>-->
                  <li class="dropdown">
                    <a href="#" data-toggle="dropdown" class="dropdown-toggle">Contabilidade <b class="caret"></b></a>
                    <ul class="dropdown-menu" id="menu1">

                      <!--<li class="divider"></li>-->
                      <li><a href="#">Gestão de Quotas</a></li>
                      <li><a href="#">Orçamentos Condomínio</a></li>
                      <li><a href="#">Conta Bancária</a></li>
                      <li><a href="#">Fundo Maneio</a></li>
                      <li><a href="#">Despesas</a></li>
                    </ul>
                  </li>
                  <li class="dropdown">
                      <a href="#" data-toggle="dropdown" class="dropdown-toggle">Manutenção <b class="caret"></b></a>
                      <ul class="dropdown-menu" id="menu1">
                        <li>
                        <!--<li class="divider"></li>-->
                        <li><a href="#">Ocorrências</a></li>
                        <li><a href="#">Vistorias</a></li>
                      </li>
                      </ul>
                  </li>
                  <li class="dropdown">
                    <a href="#">Condomínios</a>
                  </li>
                  <li class="dropdown">
                    <a href="#">Frações</a>
                  </li>
                  <li class="dropdown">
                    <a href="#" data-toggle="dropdown" class="dropdown-toggle">Documentos <b class="caret"></b></a>
                    <ul class="dropdown-menu" id="menu1">
                      <li>
                      <!--<li class="divider"></li>-->
                        <li><a href="#">Consulta de Documentos</a></li>
                        <li><a href="#">Novo Documento</a></li>
                      </li>
                    </ul>
                  </li>
                </ul>
            </ul>
        </div>
        <!--FIMHEADER-->
