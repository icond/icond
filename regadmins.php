<?php 
  session_start();
  include 'include/header.php';
  include 'include/connection.php';
  
  //Informações que vêm do Index
  if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $nifParc = $_POST['nifParc'];
    $password = $_POST['password'];
  }

  //Quando é feito o registo
  if(isset($_POST['registar'])){


    $_SESSION["email"] = $_POST['email'];
    $_SESSION["nome"] = $_POST['nome'];
    $_SESSION["nifParc"] = $_POST['nifParc'];
    $_SESSION["nifCond"] = $_POST['nifCond'];
    $_SESSION["password"] = $_POST['password'];
    $_SESSION["morada"] = $_POST['rua'];
    $_SESSION["lote"] = $_POST['lote'];
    $_SESSION["codigoPostal"] = $_POST['postal1'].'-'.$_POST['postal2'];
    $_SESSION["localidade"] = $_POST['localidade'];
    $_SESSION["cidade"] = $_POST['cidade'];
    $_SESSION["pais"] = 1;
    $_SESSION["idEmpresa"] = 0;

    //SQL para ver se o NIF existe na BD
    $checkIfNifExists = "SELECT nifCond FROM condominios WHERE nifCond = '$nif'";
    $ifRows = mysqli_query($conn, $checkIfNifExists);
    if(mysqli_num_rows($ifRows) != 0){
      $nifAlreadyExists = 1;
    }else{
      header("Location: regfra.php");
    }
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
      <div class="login-page"><h4 style="text-align:center; margin-top: 60px;"">Finalize o seu registo de administrador</h4>
       
       <?php 

          if(isset($nifAlreadyExists)){
            echo "<div style='text-align:center;' class='alert alert-danger' role='alert'>NIF já em uso.</div>";
          }

        ?>

        <div class="form">
          <form class="login-form" action="" method="POST">
            <label>E-Mail</label><br>
            <input type="text" name="email" placeholder="eg. rui.pereira@gmail.com" <?php if(isset($email)){echo "value='".$email."'";} ?> required/><br>
            <label>Nome Completo</label><br>
            <input type="text" name="nome" placeholder="Rui Perreira"  required/><br>
            <label>NIF Parcela</label><br>
            <input id="sonumeros" type="text" name="nifParc" maxlength="9" placeholder="Número de Identificação Fiscal do Utilizador" <?php if(isset($nifParc)){echo "value='".$nifParc."'";} ?> required/><br>
            <label>Palavra Passe</label><br>
            <input type="password" name="password" placeholder="Palavra Passe" <?php if(isset($password)){echo "value='".$password."'";} ?> required /><br>
            <label>Morada</label><br>
            <label>Rua</label><br>
            <input type="text" name="rua" placeholder="Rua do condomínio" <?php if(isset($morada)){echo "value='".$morada."'";} ?> required /><br>
            <div style="width:50%; float:left;">
              <label>Lote</label><br>
              <input style="width:40%;" type="text" name="lote" maxlength="3" placeholder="5" <?php if(isset($lote)){echo "value='".$lote."'";} ?> required/>
             </div>
             <div style="width:50%; float:right;"> 
              <label>Código Postal</label><br>
              <input style="width:45%;" type="text" name="postal1" placeholder="2500" maxlength="4" <?php if(isset($postal1)){echo "value='".$postal1."'";} ?> required /> - <input style="width:45%;" type="text" name="postal2" placeholder="300" maxlength="3" <?php if(isset($postal2)){echo "value='".$postal2."'";} ?> required/><br>
            </div>
            
            <label>NIF Condominio</label><br>
            <input id="sonumeros" type="text" name="nifCond" maxlength="9" placeholder="Número de Identificação Fiscal do Condominio" <?php if(isset($nif)){echo "value='".$nif."'";} ?> required/><br>
            <label>Localidade</label><br>
            <input type="text" name="localidade" placeholder="eg. Santos" <?php if(isset($localidade)){echo "value='".$localidade."'";} ?> required /><br>
            <label>Cidade</label><br>
            <input type="text" name="cidade" placeholder="eg. Lisboa" <?php if(isset($cidade)){echo "value='".$cidade."'";} ?> required /><br>
            <button type="submit" name="registar" class="btlogin">Registar</button>
        </form>

        </div>
      </div>
    </body>
</html>