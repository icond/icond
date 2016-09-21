<?php
  //ainda não foi testado
  session_start();
  include "connection.php";

  if(isset($_SESSION['user'])){
    $first_name = "";
    $last_name = "";
    $idCond = 0;

    // get user's name
    $sql = "SELECT full_name, idCond FROM parcelas WHERE idParcela = " . $_SESSION['user'];
    //para poupar latin
    $row = mysqli_fetch_array(mysqli_query($conn, $sql));

    $full_name = $row['full_name'];
    $idCond = $row['idCond'];
    $name_count = str_word_count($full_name);

    // decide either to split the string or just use it right away
    if($name_count == 0)
    {
      $first_name = "nullPHP" ;
    }
    else if($name_count == 1)
    {
      $first_name = $full_name;
    }
    else if($name_count == 2)
    {
      list($first_name, $last_name) = explode(" ", $full_name);
    }
    else
    {
      $words = explode(" ", $full_name);
      $first_name = $words[0];
      $last_name = $words[$name_count - 1];
    }
  }
  else
  {
    header("Location: ../login.php"); 
  }
  $_SESSION['FLname'] = $first_name . " " . $last_name;
  $_SESSION['idCond'] = $idCond;
?>
<!DOCTYPE html>
<html>
    <head>
        <title>icond</title>
        <meta charset="UTF-8">        
        <link rel="icon" href="../img/icond_v1.png">
        <!--css-->
        <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="../css/style.css">
        <!-- font awesome -->
        <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
        <!--jquery-->
        <script src="https://code.jquery.com/jquery-2.2.3.js" integrity="sha256-laXWtGydpwqJ8JA+X9x2miwmaiKhn8tVmOVEigRNtP4=" crossorigin="anonymous"></script>
        <!--js-->
        <script type="text/javascript" src="../js/bootstrap.min.js"></script>
        <!--adicionar aqui jquery-->
        <meta name = "viewport" content = "width = device-width, initial-scale = 1.0">
        <script>
          $( document ).ready(function() {
              $("#op1-data").show();
              $("#op2-data").hide();

              $( "#op1" ).click(function() {
                $("#op1-data").show();
                $("#op2-data").hide();

                if($("#op1").hasClass("admin-menu-item-active")){
                }else{
                    $("#op1").addClass("admin-menu-item-active");
                }
                
                $("#op2").removeClass("admin-menu-item-active");
              });

              $( "#op2" ).click(function() {
                $("#op1-data").hide();
                $("#op2-data").show();

                if($("#op2").hasClass("admin-menu-item-active")){
                }else{
                    $("#op2").addClass("admin-menu-item-active");
                }
                
                $("#op1").removeClass("admin-menu-item-active");
              });

          });
        </script>
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
                  <li><p class="navbar-text-data"><span style="color: #0071BC;"><b>Utilizador:</span> <span style="color: #fff;"><?php echo $first_name . ' ' . $last_name;?></span></p></b></li>
                  <li><p class="navbar-text-data"><span style="color: #0071BC;"><b>Condominio:</span> <span style="color: #fff;"><?php echo $idCond;?></span></p></b></li>
                  <li>
                    <p class="navbar-text-data">
                      <!--<a href="#" class="myExitButton">Sair</a>-->
                      <li>
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle"><span class="glyphicon glyphicon-user"></span> <b class="caret"></b></a>
                        <ul class="dropdown-menu" id="menu1">
                          <!--<li class="divider"></li>-->
                          <li><a href="index.php">Dados do Condomínio</a></li>
                          <li><a href="#">Alterar Senha</a></li>
                          <li><a href="../logout.php">Terminar Sessão</a></li>
                        </ul>
                      </li>
                    </p>
                  </li>
                  <!--em caso de o ecrã ser extra small -- MOSTRAR MENU LÁ EM CIMA KAPPA PRIDE-->
                  <hr class="hr-dropdown">
                  <li class="hidden-sm hidden-md hidden-lg hidden-xl">
                    <a href="index.php"><span class="glyphicon glyphicon-home"></span> Pagina Inicial</a></li>
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
                          <li><a href="ocorrencia.php">Ocorrências</a></li>
                          <li><a href="#">Vistorias</a></li>
                       </li>
                      </ul>
                  </li>
                  <li class="hidden-sm hidden-md hidden-lg hidden-xl">
                    <a href="fracao.php">Frações</a>
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
                    <a href="index.php"><span class="glyphicon glyphicon-home"></span> Pagina Inicial</a>
                  </li>
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
                        <li><a href="ocorrencia.php">Ocorrências</a></li>
                        <li><a href="#">Vistorias</a></li>
                      </li>
                      </ul>
                  </li>
                  <li class="dropdown">
                    <a href="fracao.php">Frações</a>
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
