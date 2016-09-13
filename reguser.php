<?php 
  session_start();
  include 'include/header.php';
  include 'include/connection.php';
  //Informações que vêm do Index
  $codigo = "";
  if(isset($_POST['regUser'])){    
    $_SESSION["codigo"] = $_POST['codigo'];

    $codigo = $_SESSION["codigo"];
  } 
  $selectCondInfo = "SELECT condominios.idCond, morada, lote, codigoPostal, localidade, cidade FROM condominios LEFT JOIN parcelas ON parcelas.idCond = condominios.idCond WHERE parcelas.codigo = '" . $codigo . "'";
  $resultCondInfo = mysqli_query($conn, $selectCondInfo);
  while($row = mysqli_fetch_assoc($resultCondInfo)){
    $stringMorada = $row['morada'] . " Lote Nº" . $row['lote'] . ", " . $row['codigoPostal'] . " " . $row['localidade'] . ", " . $row['cidade'];
  }
?>
    </head>
    <body>

      <nav class="navbar navbar-default navbar-fixed-top navbar-white">
          <div class="container-fluid">
              <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                  </button>	
                  <a href="index.php">
                      <img src="img/icond.ico" class="navbar-left logo-img img-away-left"><p class="navbar-text navbar-text-aux hidden-xs"><b>Gestão Condominios Online</b></p>
                  </a>
              </div>
              <!--codigo para fazer login etc -->
              <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right navbar-effect">
                  <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                  <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                </ul>
              </div>
          </div>
      </nav>
      <div class="login-page"><h4 style="text-align:center; margin-top: 60px;"">Finalize o seu registo de utilizador</h4>
        <div class="form">
          <form class="login-form" action="" method="POST">
            <?php 

              if(mysqli_num_rows($resultCondInfo) == 1){

             ?>


            <label>Condomino encontrado!</label><br>
            <label>Código: <?php if(isset($codigo)){echo $codigo;} ?></label><br><br>
            <label>Morada</label><br>
            <label><?php if(isset($stringMorada)){echo $stringMorada;} ?></label>

            <button type="submit" name="registar" id="bt"  class="btlogin">Registar</button>


            <?php

          }else{
            ?>


            <label>Condomino não encontrado!</label><br>
            <label>Por favor, tente outro código.</label><br><br>

            <button type="submit" name="voltar" id="bt"  class="btlogin">Voltar</button>
            <?php
              if(isset($_POST['voltar'])){
                header("Location: index.php");
              }
          }

            ?>
        </form>

        </div>
      </div>
    </body>
</html>