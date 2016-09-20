  <?php 
    include 'include/header.php';
    include 'include/connection.php';
    include 'include/mainnave.php';
    session_start();
    if(isset($_SESSION["user"])) {
        header("Location: admin/index.php");
    }
    
    //Informações que vêm do Index
    $codigo = "";
    $codigo = $_SESSION["codigo"];
    if(isset($_POST['regUser'])){    
      $_SESSION["codigo"] = $_POST['codigo'];

      $codigo = $_SESSION["codigo"];
    } 
    $selectCondInfo = "SELECT condominios.idCond, morada, lote, codigoPostal, localidade, cidade, andar, organizacao FROM condominios LEFT JOIN parcelas ON parcelas.idCond = condominios.idCond WHERE parcelas.codigo = '" . $codigo . "'";
    $resultCondInfo = mysqli_query($conn, $selectCondInfo);
    while($row = mysqli_fetch_assoc($resultCondInfo)){
      $stringMorada = $row['morada'] . " Lote Nº" . $row['lote'] . " <span style='color: #0071BC;'>" . $row['andar'] . "º" . $row['organizacao'] . "</span>, " . $row['codigoPostal'] . " " . $row['localidade'] . ", " . $row['cidade'];
    }
  ?>
      <script>

      $(document).ready(function() {
        $("#andarErrado").hide();
        $(".BlueSmall").click(function() {
          $("#andarErrado").slideToggle(400);
        });
      });

      </script>
      </head>
      <body>

        
        <div class="login-page"><h4 style="text-align:center; margin-top: 60px;"">Finalize o seu registo de utilizador</h4>
          <div class="form">
            <form class="login-form" action="" method="POST">
              <?php 

                if(mysqli_num_rows($resultCondInfo) == 1){
                  $queryVerifyUserCode = "SELECT full_name, email, password, telemovel FROM parcelas WHERE codigo = '" . $codigo . "'";
                  $resultVerifyUserCode = mysqli_query($conn, $queryVerifyUserCode);
                  $row = mysqli_fetch_assoc($resultVerifyUserCode);
                    if ($row['full_name'] === "" || $row['email'] === "" || $row['password'] === "" || $row['telemovel'] === ""){


               ?>


              <label>Condomino encontrado!</label><br>
              <label>Código de Condómino: <span style="color: #0071BC"><?php if(isset($codigo)){echo $codigo;} ?></span></label><br><br>
              <label>Morada</label><br>
              <label><?php if(isset($stringMorada)){echo $stringMorada;} ?></label><br>

              <span class="BlueSmall">Não é o seu andar?</span><br>

              <div id="andarErrado" style="text-align:justify;">
              <span>Por favor, confira se o andar disposto em cima é o ser andar. Caso o andar a cima indicado não seja o seu, peça ao seu administrador o código correspondente à sua parcela.</span>
              </div> 
            <br>
            <label>Nome Completo</label><br>
            <input type="text" name="nome" placeholder="Rui Pereira"  required/><br>
            <label>Telemóvel</label><br>
            <input type="text" name="telemovel" placeholder="911659874"  required/><br>
            <label>NIF</label><br>
            <input type="text" name="nifParc" placeholder="256598451"  required/><br>
            <label>Email</label><br>
            <input type="email" name="email" placeholder="rui.rereira@hotmail.com"  required/><br>
            <label>Password</label><br>
            <input type="password" name="password" placeholder="Password"  required/><br>

              <button type="submit" name="registarUser" id="bt"  class="btlogin">Registar</button>
              <?php

                if(isset($_POST['registarUser'])){
                  $nome = $_POST['nome'];
                  $password = $_POST['password'];
                  $email = $_POST['email'];
                  $telemovel = $_POST['telemovel'];
                  $nifParc = $_POST['nifParc'];

                  $stringRegUsers = "UPDATE parcelas SET full_name = '$nome', email = '$email', password = '$password', telemovel = '$telemovel', nifParcela = '$nifParc' WHERE codigo = '$codigo'";
                  
                  mysqli_query($conn, $stringRegUsers);

                  header("Location: login.php?s=1");
                }

            }else{
   ?>


              <label>Condomino encontrado, no entanto esse codigo já foi utilizado. Por favor, tente um novo código.</label><br>
              <label>Código de Condómino: <?php if(isset($codigo)){echo $codigo;} ?></label><br><br>

              <button type="submit" name="voltar" id="bt"  class="btlogin">Voltar</button>
              <?php
                if(isset($_POST['voltar'])){
                  header("Location: index.php");
                }

            }

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