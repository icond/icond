<!DOCTYPE html>
<html>
    <head>
        <title>icond</title>
        <meta charset="UTF-8">
        <!--css-->
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <!--jquery-->
        <script   src="https://code.jquery.com/jquery-2.2.3.js"   integrity="sha256-laXWtGydpwqJ8JA+X9x2miwmaiKhn8tVmOVEigRNtP4="   crossorigin="anonymous"></script>
        <!--js-->
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <!--adicionar aqui jquery-->
        <meta name = "viewport" content = "width = device-width, initial-scale = 1.0">
    </head>
    <body>
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
                    <a href="http://localhost/Projects/icond/index.php">
                        <img src="img/icond.ico" class="navbar-left logo-img img-away-left"><p class="navbar-text navbar-text-aux hidden-xs"><b>Gestão Condominios Online</b></p>
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
                <li><p class="navbar-text-data"><span style="color: #0071BC;"><b>Utilizador</span>: Admin</p></b></li>
                <li><p class="navbar-text-data"><span style="color: #0071BC;"><b>Condominio</span>: 00039</p></b></li>
                <li><p class="navbar-text-data">
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
                </li></p></li>
                </ul>
              </div>
          </div>
        </nav>
          <div class="navmenu">
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
                  <li class="dropdown">
                    <a href="#">Condomínios</a>
                  </li>
                  <li class="dropdown">
                    <a href="#">Frações</a>
                  <li class="dropdown">
                    <a href="#" data-toggle="dropdown" class="dropdown-toggle">Documentos <b class="caret"></b></a>
                    <ul class="dropdown-menu" id="menu1">
                      <li>
                      <!--<li class="divider"></li>-->
                      <li><a href="#">Consulta de Documentos</a></li>
                      <li><a href="#">Novo Documento</a></li>
                    </ul>
                  </li>
                  </ul>
                </li>
                </ul>             
            </ul>
        </div>
        <!--FIMHEADER-->
              </ul>
          </div>
        <main>
            <div class="container">
                <div class="panel panel-default">
                    <div class="panelheading"><h3>Bem vindo</h3></div>
                    <div class="panel-body">
                        <div class="adminleft">
                            <p><b>Dados Condominio</b></p>
                            nif: 269009540<br>
                            nome: condominio rua X<br>
                            morada: rua x 1100 Lx<br><br>
                        </div>
                        <div class="adminright">
                            cenas cenas 
                            asdasdda
                            asdasdasdadas
                            asdasdasdasdasd
                            asdasdasdadasd
                            asdasdasdasd
                            asdasdasdasdasds
                            asdasdasdasdas
                            asdasdasdasd
                        </div>
                        <div class="adminleft">
                            <p><b>Dados Administrador</b></p>
                            nome: Almerindo<br>
                            tel: 129999999<br>
                            tel: 219999999<br>
                            email: cenas@cenas.pt
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    <div class="navmenu">
    <ul class="nav nav-pills">
    <!--<li class="active"><a href="#">Regular link</a></li>-->
    <li class="dropdown">
    <a href="#" data-toggle="dropdown" class="dropdown-toggle">Contabilidade <b class="caret"></b></a>
    <ul class="dropdown-menu" id="menu1">
    <li>
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
    </ul>
    </li>
    <li class="dropdown">
    <a href="#">Condomínios</a>
    </li>
    <li class="dropdown">
    <a href="#">Frações</a>
    <li class="dropdown">
    <a href="#" data-toggle="dropdown" class="dropdown-toggle">Documentos <b class="caret"></b></a>
    <ul class="dropdown-menu" id="menu1">
    <li>
    <!--<li class="divider"></li>-->
    <li><a href="#">Consulta de Documentos</a></li>
    <li><a href="#">Novo Documento</a></li>
    </ul>
    </li>
    </ul>
    </li>
    </ul>             
    </ul>
    </div>
    <!--FIMHEADER-->
    </ul>
    </div>
    <main>
    <div class="container">
    <div class="panel panel-default">
    <div class="panelheading"><h3>Bem vindo</h3></div>
    <div class="panel-body">
    <div class="row">
    <div class="col-lg-9">
    <p><b>Dados Condominio</b></p>
    nif: 269009540<br>
    nome: condominio rua X<br>
    morada: rua x 1100 Lx<br><br
    </div >
    <div class="col-lg-3">
    cenas cenas    
    </div>
    <div class="col-lg-9">
    <p><b>Dados Administrador</b></p>
    nome: Almerindo<br>
    tel: 129999999<br>
    tel: 219999999<br>
    email: cenas@cenas.pt
    </div>
    </div>
    </div>   
    </div>
    </div>
    </main>
    </body>
</html>