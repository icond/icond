<?php 
	include 'include/header.php';
  //dados do index
	  if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $nome = $_POST['nome'];
    $password = $_POST['password'];
    $tele = $_POST['tele'];
  }
	//Quando é feito o registo
  if(isset($_POST['registar'])){
    $nome = $_POST['nome'];
    $tele = $_POST['tele'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $rua = $_POST['rua'];
    $lote = $_POST['lote'];
    $codigoPostal = $_POST['postal1'].'-'.$_POST['postal2'];
    $cidade = $_POST['cidade'];
    $pais = 1;

    $sql = "INSERT INTO empresas(nomeEmpresa, teleEmpresa, emailEmpresa, passwordEmpresa, ruaEmpresa, loteEmpresa, codigoEmpresa, cidadeEmpresa, paisEmpresa) VALUES('$email', '$tele', '$email', '$password', '$rua', '$lote', '$codigoPostal', '$cidade', '$pais')";

    if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";
      $_SESSION['status'] = 1;
      header("Location: login.php");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
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
                  <a href="/index.php">
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
      <div class="login-page"><h4 style="text-align:center;">Finalize o seu registo de empresas de gestão</h4>
        <div class="form">
          <form class="login-form" action="" method="POST">
            <div class="iconTitle form-reg-title regempresa">Empresas</div>
                <label>Nome de empresa</label><br>
                <input type="text" name="nome" <?php if(isset($nome)){echo "value='".$nome."'";} ?> placeholder="eg. Construções inc" /><br>
                <label>Telemovél</label><br>
                <input type="text" name="tele" placeholder="eg. 912345678" <?php if(isset($tele)){echo "value='".$tele."'";} ?> /><br>
                <label>E-Mail</label><br>
                <input type="text" name="email" placeholder="eg. rui.pereira@gmail.com" <?php if(isset($email)){echo "value='".$email."'";} ?> /><br>
                <label>Palavra Passe</label><br>
                <input type="password" name="password" <?php if(isset($password)){echo "value='".$password."'";} ?> placeholder="Palavra Passe" ><br>
                <label>Morada</label><br>
              <label>Rua</label><br>
              <input type="text" name="rua" placeholder="Rua do condomínio" required /><br>
              <div style="width:50%; float:left;">
                <label>Lote</label><br>
                <input style="width:40%;" type="text" name="lote" placeholder="5" required/>
               </div>
               <div style="width:50%; float:right;"> 
                <label>Código Postal</label><br>
                <input style="width:45%;" type="text" name="postal1" placeholder="2500" maxlength="4" required /> - <input style="width:45%;" type="text" name="postal2" placeholder="300" maxlength="3" required/><br>
              </div>
              <label>Cidade</label><br>
              <input type="text" name="cidade" placeholder="eg. Lisboa" required /><br>
                <button type="submit" name="registar" class="btlogin">Registar</button>
            </div>
        </form>
      </div>
    </body>
</html> 