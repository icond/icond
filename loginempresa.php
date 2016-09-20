<?php 
    include 'include/header.php';
    include 'include/connection.php';
    include 'include/mainnave.php';

?>
    </head>
    <body>
      

      
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
            <button name="loginEmpresa" class="btlogin">Login</button>
            <p class="message">Não registado? <a href="index.php">Crie uma conta</a></p>
          </form>
        </div>
      </div>
    </body>
    <!--
        Não incluir o footer nesta página
    -->
</html>
