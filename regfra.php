<?php 
ob_start();
    include 'include/header.php';
    include 'include/connection.php';
    include 'code_generator.php';
    session_start();
?>
    <script>
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
    <script>
      function sim(and, par, ori) {
        if (and.length == 0 ) { 
            document.getElementById("show").innerHTML = "";
            return;
        }else{
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                  document.getElementById("show").innerHTML = this.responseText;
                }
            };
            xmlhttp.open("GET", "simfrac.php?A=" + and + "&P=" + par + "&O=" + ori , true);
            xmlhttp.send();
        }
      }
    </script>
    <script type="text/javascript">
      function verificar(andares, parcelas, orientacao){
        if(parcelas > 3 && orientacao  == 0){
          document.getElementById("ori").selectedIndex = "1";
        }
      }
    </script>
    <script type="text/javascript">
      function correr(andares, parcelas, orientacao){
        verificar(andares, parcelas, orientacao);
        var orientacao = document.getElementById("ori").value; 
        sim(andares, parcelas, orientacao);
      }
    </script>
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
            <input id="sonumeros" style="text-align: center;" name="andares" type="text" placeholder="Numero de andares do edificio" required onkeydown="sim(andares.value, parcelas.value, orientacao.value)" /><br>
            Parcelas <br>
            <input id="sonumeros" style="text-align: center;" name="parcelas" type="text" placeholder="Numero maximo de parcelas por andar" required onkeyup="correr(andares.value, parcelas.value, orientacao.value)" /> <br>
                    Orientação das parcelas <br>
                    <select name="orientacao" id="ori" onchange="correr(andares.value, parcelas.value, orientacao.value)">
                        <option value="0">Direções</option>
                        <option value="1">Letras</option>
                    </select><br>
            <div>
              <span id="show"></span>   
            </div>      
            <br><br>
            <button name="regfracoes" class="btlogin">Finalizar Registo</button>
            <?php
/*
                $email = "";
                $nome = "";
                $nifParc = "";
                $password = "";
                $morada = "";
                $lote = "";
                $codigoPostal = "";
                $nifCond = "";
                $localidade = "";
                $cidade = "";
*/
              //Receção de variaveis que vêm do regadmin
              //if(isset($_POST['registar'])){
                $email = $_POST['email'];
                $nome = $_POST['nome'];
                $nifParc = $_POST['nifParc'];
                $password = $_POST['password'];
                $morada = $_POST['rua'];
                $lote = $_POST['lote'];
                $codigoPostal = $_POST['postal1'].'-'.$_POST['postal2'];
                $nifCond = $_POST['nifCond'];
                $localidade = $_POST['localidade'];
                $cidade = $_POST['cidade'];

                echo $email . "<br>";
                echo $nome . "<br>";
                echo $nifParc . "<br>";
                echo $password . "<br>";
                echo $morada . "<br>";
                echo $lote . "<br>";
                echo $codigoPostal . "<br>";
                echo $nifCond . "<br>";
                echo $localidade . "<br>";
                echo $cidade . "<br>";
              //}

              $pais = 1;
              $idEmpresa = 0;
              $ibanCond = 0;

              if(isset($_POST['regfracoes'])){

                $andares = $_POST['andares'];
                $parcelas = $_POST['parcelas'];
                $orientacao = $_POST['orientacao'];
                $idCond = "";
                $parc = $_POST['adminparc'];

                //Registo de Condominios
                $sqlCondos = "INSERT INTO condominios(morada, lote, codigoPostal, localidade, cidade, idPais, nifCond, nAndares, ibanCond, idEmpresa) 
                  VALUES('$morada', '$lote', '$codigoPostal', '$localidade', '$cidade', '$pais', '$nifCond', '$andares', '$ibanCond', '$idEmpresa')";
                  echo $sqlCondos . "<br>";
                if(mysqli_query($conn, $sqlCondos)){
                  $idCondo = "SELECT idCond FROM condominios WHERE nifCond = '$nifCond'";
                  $result = mysqli_query($conn, $idCondo);
                  if(mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_assoc($result)){
                      $idCond = $row["idCond"];
                    }
                  }else{
                    //E talvez faça mais coisas
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
                      VALUES('$codigo', '$x', '$z', '$idCond')";
                    mysqli_query($conn, $query);
                    echo $query . "<br>";
                  }
                }
                //Fim do Registo de Parcelas

                //Registo de Admin na sua parcela
                  $help = explode(' ', $parc);
                  $idParcelaString = "SELECT idParcela FROM parcelas WHERE idCond = '$idCond' AND andar = '$help[0]' AND organizacao = '$help[1]'";
                  $runIdParcela = mysqli_query($conn, $idParcelaString);
                  while($row = mysqli_fetch_assoc($runIdParcela)){
                      $idParcela = $row["idParcela"];
                  }
                  $AlterFields = "UPDATE parcelas SET full_name = '$nome', email = '$email', password = '$password', nifParcela = '$nifParc' WHERE idParcela = '$idParcela'";
                  echo $AlterFields;
                  mysqli_query($conn, $AlterFields);
                }
                //Fim do Registo de Admin na sua parcela
              
              ob_end_flush();
             ?>
          </form>  
        </div>
      </div>
    </body>
    <!--
        Não incluir o footer nesta página
    -->
</html>