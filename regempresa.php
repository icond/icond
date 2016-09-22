<?php 
  include 'include/header.php';
  include 'include/connection.php';
    include 'include/mainnave.php';
  
    session_start();
    if(isset($_SESSION["user"])) {
        header("Location: admin/index.php");
    }

    //dados vindos do index
  if (isset($_POST['regAux'])) {
    # code...
    $nome1 = $_POST['nome'];
    $email1 = $_POST['email'];
    $password1 = $_POST['password']; 
  }

	if(isset($_POST['regEmp'])){ 
    $url = "";
    $email = $_POST['email'];
    $nome = $_POST['nome'];
    $password = $_POST['password'];
    $tele = $_POST['tele'];
    $checkIfNomeExists = "SELECT nomeEmpresa FROM empresas WHERE nomeEmpresa = '$nome'";
    $checkIfMailExists = "SELECT emailEmpresa FROM empresas WHERE emailEmpresa = '$mail'";
    



    if(mysqli_num_rows(mysqli_query($conn, $checkIfNomeCExists)) == 1){
      $url .= "N=1&";    
    }
    if(mysqli_num_rows(mysqli_query($conn, $checkIfMailExists)) == 1){
      $url .= "M=1&";
    }

    if($url == ""){
      $sql = "INSERT INTO empresas(nomeEmpresa, teleEmpresa, emailEmpresa, passwordEmpresa) VALUES('$nome', '$tele', '$email', '$password')";
      mysqli_query($conn, $sql);
      //Registo feito com sucesso s=1
      header("Location: loginempresa.php?s=1");
    }else{
      header("Location: regempresa.php?".$url);
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
      });
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

</head>
    <body>
      
      
      <div class="login-page"><h4 style="text-align:center;">Finalize o seu registo de empresas de gestão</h4>
      <?php
        if(isset($_GET['M'])){
          if($_GET['M'] == 1){
            echo "<div style='text-align:center;' class='alert alert-danger' role='alert'>Email já em uso, introduza um email novo </div>";
          }
        }
        if(isset($_GET['N'])){
          if($_GET['C'] == 1){
            echo "<div style='text-align:center;' class='alert alert-danger' role='alert'>NIF de Condominio já em uso, introduza um nif novo </div>";
          }
        }
      ?>
        <div class="form">
          <form class="login-form" action="regempresa.php" method="POST">
            <div class="iconTitle form-reg-title regempresa">Empresas</div>
                <label>Nome de empresa</label><br>
                <input type="text" name="nome" <?php if(isset($nome1)){echo "value='".$nome1."'";} ?> placeholder="eg. Atec inc" /><br>
                <label>Telemovél</label><br>
                <input id="sonumeros" type="text" maxlength="9" name="tele" placeholder="eg. 912345678"  /><br>
                <label>E-Mail</label><br>
                <input type="email" name="email" placeholder="eg. rui.pereira@gmail.com" onkeyup="vermail(email.value)" onpaste="vermail(email.value)" oninput="vermail(email.value)" <?php if(isset($email1)){echo "value='".$email1."'";} ?> required/><br>
                <label>Palavra Passe</label><br>
                <input type="password" name="password" <?php if(isset($password1)){echo "value='".$password1."'";} ?> placeholder="Palavra Passe" ><br>
                <br>
                <button type="submit" name="regEmp" class="btlogin">Registar</button>
            </div>
        </form>
      </div>
    </body>
</html> 