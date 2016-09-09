<?php 
  session_start();
  include 'include/header.php';
  
  //Informações que vêm do Index
  if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $nifParc = $_POST['nifParc'];
    $password = $_POST['password'];
  }

  
  
?>
    </head>
    <script>
      function ver(nif) {
          if(nif.length != 0 ){
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                  document.getElementById("show").innerHTML = this.responseText;
                }
            };
            xmlhttp.open("GET", "vernif.php?N=" + nif , true);
            xmlhttp.send();
            if(document.getElementById('show').innerHTML != "";){
              document.getElementById('bt').disabled = true;
            }
        }
      }
    </script>
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
       
       <div id="show">
          
          

        </div>

        <div class="form">
          <form class="login-form" action="regfra.php" method="POST">
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
            <input type="text" name="rua" placeholder="Rua do condomínio" required /><br>
            <div style="width:50%; float:left;">
              <label>Lote</label><br>
              <input style="width:40%;" type="text" name="lote" maxlength="3" placeholder="5" required/>
             </div>
             <div style="width:50%; float:right;"> 
              <label>Código Postal</label><br>
              <input style="width:45%;" type="text" name="postal1" placeholder="2500" maxlength="4" required /> - <input style="width:45%;" type="text" name="postal2" placeholder="300" maxlength="3" required/><br>
            </div>
            
            <label>NIF Condominio</label><br>
            <input id="sonumeros" type="text" name="nifCond" maxlength="9" onkeyup="ver(nifCond.value)" placeholder="Número de Identificação Fiscal do Condominio" required/><br>
            <label>Localidade</label><br>
            <input type="text" name="localidade" placeholder="eg. Santos" required /><br>
            <label>Cidade</label><br>
            <input type="text" name="cidade" placeholder="eg. Lisboa" required /><br>
            <button type="submit" name="registar" id="bt" class="btlogin">Registar</button>
        </form>

        </div>
      </div>
    </body>
</html>