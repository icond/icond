<?php 
  include 'include/header.php';
session_start();
  //Informações que vêm do Index
  if(isset($_POST['registar'])){
    $email = $_POST['email'];
    $nif = $_POST['nif'];
    $password = $_POST['password'];
    $rua = $_POST['rua'];
    $lote = $_POST['lote'];
   //$codigopostal = echo $_POST['postal1'].'-'. echo $_POST['postal2'];
    $cidade = $_POST['cidade'];
    

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
      <div class="login-page"><h4 style="text-align:center;">Finalize o seu registo de administrador</h4>
        <div class="form">
          <form class="login-form" action="" method="POST">
            <label>E-Mail</label><br>
            <input type="text" name="email" placeholder="eg. rui.pereira@gmail.com" <?php if(isset($email)){echo "value='".$email."'";} ?> required/><br>
            <label>NIF</label><br>
            <input id="sonumeros" type="text" name="nif" maxlength="9" placeholder="Número de Identificação Fiscal" <?php if(isset($nif)){echo "value='".$nif."'";} ?> required/><br>
            <label>Palavra Passe</label><br>
            <input type="password" name="password" placeholder="Palavra Passe" <?php if(isset($password)){echo "value='".$password."'";} ?> required /><br>
            <label>Morada</label><br>
            <label>Rua</label><br>
            <input type="text" name="rua" placeholder="Rua do condomínio" required /><br>
            <div style="width:50%; float:left;">
              <label>Lote</label><br>
              <input style="width:40%;" type="text" name="lote" maxlength="3" placeholder="5" required/>
             </div>
             <div style="width:50%; float:right;"> 
              <label>Código Postal</label><br>
              <input style="width:45%;" type="text" name="postal1" placeholder="2500" maxlength="4" required /> - <input style="width:45%;" type="text" name="postal2" placeholder="300" maxlength="3" required/><br>
            </div>
            <label>Cidade</label><br>
            <input type="text" name="cidade" placeholder="eg. Lisboa" required /><br>
            <button type="submit" name="registar" class="btlogin">Registar</button><?php
       echo $email;
    ?>
        </form>
        <?php
          //Quando é feiro o registo
          if(isset($_POST['registar'])){
            $con = mysqli_connect("localhost","root","","icond");
            if (mysqli_connect_error())
            {
              echo "Failed to connect to MySQL: " . mysqli_connect_error();
            }
            else
            {
              
              $_SESSION['postal1'] = $_POST['postal1'];
              $_SESSION['postal2'] = $_POST['postal2'];
              //header('Location: try.php');
              exit;
            }
          }
        ?>
        </div>
      </div>
    </body>
</html> 