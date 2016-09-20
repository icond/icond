<?php 
  include 'include/header.php';
  include 'include/connection.php';
    include 'include/mainnave.php';
  
    session_start();
    if(isset($_SESSION["user"])) {
        header("Location: admin/index.php");
    }

    //dados vindos do index
	if(isset($_POST['regEmp'])){
    $email = $_POST['email'];
    $nome = $_POST['nome'];
    $password = $_POST['password'];
    $tele = $_POST['tele'];

    $sql = "INSERT INTO empresas(nomeEmpresa, teleEmpresa, emailEmpresa, passwordEmpresa) VALUES('$nome', '$tele', '$email', '$password')";

    $verificar = "SELECT * from empresas where emailEmpresa = '$email'";
    $query_ver = mysqli_query($conn, $verificar);

    if (mysqli_num_rows($query_ver) != 0){
      //Já existe este email
      //TODO CRIAR A PAGINA LOGINEMPRESA E OS CODIGOS GET S
      echo "<script type='text/javascript'>document.location = 'regempresa.php?s=1';</script>";
    }else{
      if(mysqli_query($conn, $sql)){
        //Registo feito com sucesso s=1
        header("Location: loginempresa.php?s=1");
        echo "<script type='text/javascript'>document.location = 'loginempresa.php?s=1';</script>";
      }
    }
  }
?>
</head>
    <body>
      
      
      <div class="login-page"><h4 style="text-align:center;">Finalize o seu registo de empresas de gestão</h4>
      <?php
        if(isset($_GET['s'])){
            if($_GET['s'] == 1){
              echo "<div style='text-align:center;' class='alert alert-danger' role='alert'>Email já existente!</div>";
            }
          }
      ?>
        <div class="form">
          <form class="login-form" action="regempresa.php" method="POST">
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
                <button type="submit" name="regEmp" class="btlogin">Registar</button>
            </div>
        </form>
      </div>
    </body>
</html> 