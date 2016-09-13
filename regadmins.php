<?php 
  session_start();
  include 'include/header.php';
  include 'include/connection.php';
  //Informações que vêm do Index
  if(isset($_POST['regAdmin'])){    
    $_SESSION["email"] = $_POST['email'];
    $_SESSION["nifParc"] = $_POST['nifParc'];
    $_SESSION["password"] = $_POST['password'];

    $email = $_SESSION["email"];
    $nifParc = $_SESSION["nifParc"];
    $password = $_SESSION["password"];
  }
  

  if(isset($_POST['registar'])){ 
    $url = "";
    $nifC = $_POST['nifCond'];
    $mail = $_POST['email'];
    $nifP = $_POST['nifParc'];
    $checkIfNifCExists = "SELECT nifCond FROM condominios WHERE nifCond = '$nifC'";
    $checkIfMailExists = "SELECT email FROM parcelas WHERE email = '$mail'";
    $checkIfNifPExists = "SELECT nifParcela FROM parcelas WHERE nifParcela = '$nifP'";
    



    if(mysqli_num_rows(mysqli_query($conn, $checkIfNifCExists)) == 1){

      $url .= "C=1&";
      echo $url;
    }
    if(mysqli_num_rows(mysqli_query($conn, $checkIfMailExists)) == 1){
      $url .= "M=1&";
      echo $url;
    }
    if(mysqli_num_rows(mysqli_query($conn, $checkIfNifPExists)) == 1){
      $url .= "P=1";
      echo $url;
    }


      
    if($url == ""){

      $_SESSION["nome"] = $_POST['nome'];
      $_SESSION["nifCond"] = $_POST['nifCond'];
      $_SESSION["telemovel"] = $_POST['telemovel'];
      $_SESSION["morada"] = $_POST['rua'];
      $_SESSION["lote"] = $_POST['lote'];
      $_SESSION["codigoPostal"] = $_POST['postal1'].'-'.$_POST['postal2'];
      $_SESSION["localidade"] = $_POST['localidade'];
      $_SESSION["cidade"] = $_POST['cidade'];
      $_SESSION["pais"] = 1;
      $_SESSION["idEmpresa"] = 0;
      $_SESSION["ibanCond"] = 0;
      $_SESSION["email"] = $_POST['email'];
      $_SESSION["nifParc"] = $_POST['nifParc'];
      $_SESSION["password"] = $_POST['password'];

      header("Location: regfra.php");
    }else{
      header("Location: regadmins.php?" . $url);
    }
  }

  
  
?>
    <script type="text/javascript">
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
        $("#sonumeros2").keydown(function (e) {
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
        $("#sonumeros3").keydown(function (e) {
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
        $("#sonumeros4").keydown(function (e) {
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
        $("#sonumeros5").keydown(function (e) {
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
      function vernifcond(nif) {
        if(nif.length >= 8 ){
          var xmlhttp = new XMLHttpRequest();
          xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
              document.getElementById("shownifcond").innerHTML = this.responseText;
            }
          };
          xmlhttp.open("GET", "vernif.php?N=" + nif , true);
          xmlhttp.send(); 
        }
      }
    </script> 
    <script type="text/javascript">
      function vermail(email) {
        if(email.length != 0 ){
          var xmlhttp = new XMLHttpRequest();
          xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
              document.getElementById("showmail").innerHTML = this.responseText;
            }
          };
          xmlhttp.open("GET", "vermail.php?M=" + email , true);
          xmlhttp.send(); 
        }
      }
    </script>
    <script type="text/javascript">
      function vernifparc(nif) {
        if(nif.length >= 8 ){
          var xmlhttp = new XMLHttpRequest();
          xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
              document.getElementById("shownifparc").innerHTML = this.responseText;
            }
          };
          xmlhttp.open("GET", "verpnif.php?N=" + nif , true);
          xmlhttp.send(); 
        }
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
        if(isset($_GET['M'])){
          if($_GET['M'] == 1){
            echo "<div style='text-align:center;' class='alert alert-danger' role='alert'>Email já em uso, introduza um email novo </div>";
          }
        }
        if(isset($_GET['C'])){
          if($_GET['C'] == 1){
            echo "<div style='text-align:center;' class='alert alert-danger' role='alert'>NIF de Condominio já em uso, introduza um nif novo </div>";
          }
        }
        if(isset($_GET['P'])){
          if($_GET['P'] == 1){
            echo "<div style='text-align:center;' class='alert alert-danger' role='alert'>NIF de Parcela já em uso, introduza um nif novo </div>";
          }
        }
      ?>
       

        <div class="form">
          <form class="login-form" action="" method="POST">
            <label>E-Mail</label><br>
            <input type="text" name="email" placeholder="eg. rui.pereira@gmail.com" onkeyup="vermail(email.value)" onpaste="vermail(email.value)" oninput="vermail(email.value)" <?php if(isset($email)){echo "value='".$email."'";} ?> required/><br>
            <div id="showmail"></div>
            <label>Nome Completo</label><br>
            <input type="text" name="nome" placeholder="Rui Perreira"  required/><br>
            <label>Telemóvel</label><br>
            <input type="text" name="telemovel" placeholder="911659874"  required/><br>
            <label>NIF Parcela</label><br>
            <input id="sonumeros" type="text" name="nifParc" maxlength="9" minlength="9" onkeyup="vernifparc(nifParc.value)" onpaste="vernifparc(nifParc.value)" oninput="vernifparc(nifParc.value)" placeholder="Número de Identificação Fiscal do Utilizador" <?php if(isset($nifParc)){echo "value='".$nifParc."'";} ?> required/><br>
            <div id="shownifparc"></div>
            <label>Palavra Passe</label><br>
            <input type="password" name="password" placeholder="Palavra Passe" <?php if(isset($password)){echo "value='".$password."'";} ?> required /><br>
            <label>Morada</label><br>
            <label>Rua</label><br>
            <input type="text" name="rua" placeholder="Rua do condomínio" required /><br>
            <div style="width:50%; float:left;">
              <label>Lote</label><br>
              <input id="sonumeros2" style="width:40%;" type="text" name="lote" maxlength="3" placeholder="5" required/>
             </div>
             <div style="width:50%; float:right;"> 
              <label>Código Postal</label><br>
              <input id="sonumeros3" style="width:45%;" type="text" name="postal1" placeholder="2500" maxlength="4" required /> - <input id="sonumeros4" style="width:45%;" type="text" name="postal2" placeholder="300" maxlength="3" required/><br>
            </div>
            
            <label>NIF Condominio</label><br>
            <input id="sonumeros5" type="text" name="nifCond" maxlength="9" minlength="9" onkeyup="vernifcond(nifCond.value)" onpaste="vernifcond(nifCond.value)" oninput="vernifcond(nifCond.value)"  placeholder="Número de Identificação Fiscal do Condominio" required/><br>
            <div id="shownifcond"></div><br>
            <label>Localidade</label><br>
            <input type="text" name="localidade" placeholder="eg. Santos" required /><br>
            <label>Cidade</label><br>
            <input type="text" name="cidade" placeholder="eg. Lisboa" required /><br>
            <button type="submit" name="registar" id="bt"  class="btlogin">Registar</button>
        </form>

        </div>
      </div>
    </body>
</html>