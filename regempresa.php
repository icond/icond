<?php 
	include 'include/header.php';
  include 'include/connection.php';
  session_start();
    //dados vindos do index
	  if(isset($_POST['regEmp'])){
    $email = $_POST['email'];
    $nome = $_POST['nome'];
    $password = $_POST['password'];
    $tele = $_POST['tele'];

    $sql = "INSERT INTO empresas(nomeEmpresa, teleEmpresa, emailEmpresa, passwordEmpresa) VALUES('$nome', '$tele', '$email', '$password')";

    $verificar = "SELECT * from empresas where emailEmpresa like '$email'";
    $query_ver = mysqli_query($conn, $verificar);

    if (mysqli_num_rows($query_ver) != 0){
      //Já existe este email
      //TODO CRIAR A PAGINA LOGINEMPRESA E OS CODIGOS GET S
      header("Location: loginempresa.php?s=2");
    }else{
      if(mysqli_query($conn, $sql)){
        //Registo feito com sucesso s=1
        header("Location: loginempresa.php?s=1");
      }else{
          echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }
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
      <?php
       if(isset($_SESSION['status']))
          {
            if($_SESSION['status'] === 2)
            {
              echo "<div class='alert alert-danger' role='alert' >Email ja esta em uso, por favor introduza um email bacano</div>";
              session_unset();
            }
          }
      ?>
        <div class="form">
          <form class="login-form" action="" method="POST">
            <div class="iconTitle form-reg-title regempresa">Empresas</div>
                <label>Nome de empresa</label><br>
                <input type="text" name="nome" <?php if(isset($nome)){echo "value='".$nome."'";} ?> placeholder="eg. Atec inc" /><br>
                <label>Telemovél</label><br>
                <input type="text" name="tele" placeholder="eg. 912345678" <?php if(isset($tele)){echo "value='".$tele."'";} ?> /><br>
                <label>E-Mail</label><br>
                <input type="text" name="email" placeholder="eg. rui.pereira@gmail.com" <?php if(isset($email)){echo "value='".$email."'";} ?> /><br>
                <label>Palavra Passe</label><br>
                <input type="password" name="password" <?php if(isset($password)){echo "value='".$password."'";} ?> placeholder="Palavra Passe" ><br>
                <br>
                <button type="submit" name="registar" class="btlogin">Registar</button>
            </div>
        </form>
      </div>
    </body>
</html> 