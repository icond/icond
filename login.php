<?php 
    include 'include/header.php';
    include 'include/connection.php';
    session_start();
    if(isset($_SESSION["user"])) {
        header("Location: admin/index.php");
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
              <!--codigo para utilizador com sessão-->
              <!--<div class="collapse navbar-collapse" id="myNavbar">
                  <ul class="nav navbar-nav navbar-right">
                      <li><p class="navbar-text-data"><span style="color: #fff;"><b>Login</span></p></b></li>
                  </ul>
              </div>-->
          </div>
      </nav>

      
      <div class="login-page">
        <?php
          session_start();
          if(isset($_GET['s'])){
            if($_GET['s'] == 1){
              echo "<div style='text-align:center;' class='alert alert-success' role='alert'>Registado com sucesso!</div>";
            }elseif ($_GET['s'] == 2) {
              echo "<div style='text-align:center;' class='alert alert-danger' role='alert'>Login incorreto!</div>";
            }elseif ($_GET['s'] == 3) {
              echo "<div style='text-align:center;' class='alert alert-success' role='alert'>Login feito com sucesso!". $_SESSION['user'] ."</div>";
            }elseif ($_GET['s'] == 4) {
              echo "<div style='text-align:center;' class='alert alert-warning' role='alert'>Por favor faça login". $_SESSION['user'] ."</div>";
            }
          }
          
        ?> 

        <h2 style="text-align:center;">Login</h2>
        <div class="form">
          <form class="login-form" action="process/login.process.php" method="POST">
            <input name="email" type="email" placeholder="Email" required />
            <input name="password" type="password" placeholder="Password" required/>
            <button name="login" class="btlogin">Login</button>
            <p class="message">Não registado? <a href="index.php">Crie uma conta</a></p>
          </form>
        </div>
      </div>
    </body>
    <!--
        Não incluir o footer nesta página
    -->
</html>
