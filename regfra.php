<?php 
    include 'include/header.php';
    include 'include/connection.php';
    include 'code_generator.php';
    session_start();

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
                  <!--<a class="navbar-brand" href="#">WebSiteName</a>-->
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

      
      <div class="login-page">

        <h2 style="text-align:center;">Registo de Frações</h2>
        <div class="form">
          <form class="login-form" action="" method="POST">
            Andares <br>
            <input style="text-align: center;" name="andares" type="text" placeholder="Numero de andares do edificio" required /><br>
            Parcelas <br>
            <input style="text-align: center;" name="parcelas" type="text" placeholder="Numero maximo de parcelas por andar" required/> <br>
                    Orientação das parcelas <br>
                    <select name="orientacao">
                        <option value="0">Direções</option>
                        <option value="1">Letras</option>
                    </select>
                    <br><br>
            <button name="regfracoes" class="btlogin">Finalizar Registo</button>
            <?php 

              if(isset($_POST['regfracoes'])){
                $andares = $_POST['andares'];
                $parcelas = $_POST['parcelas'];
                $orientacao = $_POST['orientacao'];

                $nifCond = $_SESSION["nifCond"];
                $nifParc = $_SESSION["nifParc"];
                $morada = $_SESSION["morada"];
                $lote = $_SESSION["lote"];
                $codigoPostal = $_SESSION["codigoPostal"];
                $localidade = $_SESSION["localidade"];
                $cidade = $_SESSION["cidade"];
                $pais = $_SESSION["pais"];
                $idEmpresa = $_SESSION["idEmpresa"];

                $idCond = "";

                //Registo de Condominios

                $sqlCondos = "INSERT INTO condominios(morada, lote, codigoPostal, localidade, cidade, idPais, nifCond, idEmpresa, nAndares) 
                  VALUES('$morada', '$lote', '$codigoPostal', '$localidade', '$cidade', '$pais', '$nifCond', '$idEmpresa', '$andares')";
                  echo $sqlCondos . "<br><br>";
                if(mysqli_query($conn, $sqlCondos)){
                  $idCondo = "SELECT idCond FROM condominios WHERE nifCond = '$nifCond'";
                  $result = mysqli_query($conn, $idCondo);

                  if(mysqli_num_rows($result) > 0){
                      while($row = mysqli_fetch_assoc($result)){
                          $idCond = $row["idCond"];
                          $_SESSION['idCond'] = $idCond;
                      }
                  }else{
                      header("Location: ../index.php");
                  }
                }

                //Fim do Registo de Condominios
                //Registo de Parcelas

                for($x=1;$x<=$andares;$x++){
                    for($y=1;$y<=$parcelas;$y++){

                        if($orientacao==0){
                            if($y==1)
                                $z="Esquerdo";
                            if($y==2)
                                $z="Direito";
                            if($y==3)
                                $z="Frente";
                        }else{
                            if($y==1)
                                $z="A";
                            if($y==2)
                                $z="B";
                            if($y==3)
                                $z="C";
                            if($y==4)
                                $z="D";
                            if($y==5)
                                $z="E";
                            if($y==6)
                                $z="F";
                        }

                        $codigo = generateRandomString(5);

                        $query = "INSERT INTO parcelas(codigo, andar, organizacao, idCond) 
                          VALUES('$codigo', '$x', '$z', '$idCond')"; //TEM DE SE FAZER QUERY COM O SESSION USER PARA IR BUSCAR O ID COND

                          mysqli_query($conn, $query);
                          echo $query . "<br>";
                    }
                }

                //Fim do Registo de Parcelas

                //header("Location: /admin/fracao.php");

                
              }

             ?>
          </form>
        </div>
      </div>
    </body>
    <!--
        Não incluir o footer nesta página
    -->
</html>