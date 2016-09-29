<?php 
  include '../include/headerempresa.php';
  include 'code_generator.php';
  $idEmp = $_SESSION['user'];

  if(isset($_POST['registar'])){ 
    $rua = $_POST['rua'];
    $lote = $_POST['lote'];
    $codigopostal = $_POST['postal1'] . "-" . $_POST['postal2'];
    $nifCond = $_POST['nifCond'];
    $localidade = $_POST['localidade'];
    $cidade = $_POST['cidade'];
    $andares = $_POST['andares'];
    $parcelas = $_POST['parcelas'];
    $orientacao = $_POST['orientacao'];
    $idCond = "";
    $parc = $_POST['adminparc'];
    $pais = "1";
    $ibanCond = "0";
                //Registo de Condominios
                $sqlCondos = "INSERT INTO condominios(morada, lote, codigoPostal, localidade, cidade, idPais, nifCond, nAndares, ibanCond, idEmpresa) 
                  VALUES('$rua', '$lote', '$codigopostal', '$localidade', '$cidade', '$pais', '$nifCond', '$andares', '$ibanCond', '$idEmp')";
                
                if(mysqli_query($conn, $sqlCondos)) {
                  $idCondo = "SELECT idCond FROM condominios WHERE nifCond = '$nifCond'";
                  $result = mysqli_query($conn, $idCondo);
                  if(mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_assoc($result)){
                      $idCond = $row["idCond"];
                    }
                  }else{
                    //talvez faça mais coisas
                  }
                }
                //Fim do Registo de Condominios 

                //Registo de Parcelas
                for($x=0;$x<=$andares;$x++){
                  for($y=1;$y<=$parcelas;$y++){
                    if($orientacao==0){
                      if($parcelas < 4){
                        if($y==1)
                          $z = "Esquerdo";
                        if($y==2)
                          $z = "Direito";
                        if($y==3)
                          $z = "Frente";
                      }else{
                        if($y==1)
                          $z = "Esquerdo";
                        if($y==2)
                          $z = "Frente Esquerdo";
                        if($y==3)
                          $z = "Frente Direito";
                        if($y==4)
                          $z = "Direito";
                      }
                    }else{
                      if($y==1)
                        $z="A";
                      if($y==2)
                        $z="B";
                      if($y==3)
                        $z="C";
                      if($y==4)
                        $z="D";
                      if($y==5)
                        $z="E";
                      if($y==6)
                        $z="F";
                      if($y==7)
                        $z="G";
                      if($y==8)
                        $z="H";
                      if($y==9)
                        $z="I";
                    }
                    $sair = true;
                    while($sair){
                      $codigo = generateRandomString(5);
                      $verificarExiste = "SELECT codigo FROM parcelas WHERE codigo = '$codigo'";
                      $correr = mysqli_query($conn, $verificarExiste);
                      if(mysqli_num_rows($correr) == 0 ){
                        $sair = false;
                      }
                    }
                    $query = "INSERT INTO parcelas(codigo, andar, organizacao, idCond) 
                      VALUES('$codigo', '$x', '$z', '$idCond')";
                    mysqli_query($conn, $query);
                  }
                }
                //Fim do Registo de Parcelas

                  
                  session_destroy();
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
      });
    </script>
    <script>
      function sim(and, par, ori) {
        if (and.length == 0 ) { 
            document.getElementById("show").innerHTML = "";
            return;
        }else{
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                  document.getElementById("show").innerHTML = this.responseText;
                }
            };
            xmlhttp.open("GET", "simfrac.php?A=" + and + "&P=" + par + "&O=" + ori , true);
            xmlhttp.send();
        }
      }
    </script>
    <script type="text/javascript">
      function verificar(andares, parcelas, orientacao){
        if(parcelas == 0 ){
          document.getElementById("bt").disabled = true;
        }else{
          document.getElementById("bt").disabled = false;
        }
        if(parcelas > 4 && orientacao  == 0){
          document.getElementById("ori").selectedIndex = "1";
        }
      }
    </script>
    <script type="text/javascript">
      function correr(andares, parcelas, orientacao){
        verificar(andares, parcelas, orientacao);
        var orientacao = document.getElementById("ori").value; 
        sim(andares, parcelas, orientacao);
      }
    </script>
   <!-- <script>
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
    </script>-->
    </head>
    
    <body>

      
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
          <form class="login-form" action="index.php" method="POST">
            <label>Morada</label><br>
            <label>Rua</label><br>
            <input type="text" name="rua" placeholder="Rua do condomínio" required /><br>
            <div style="width:50%; float:left;">
            <label>Lote</label><br>
            <input id="sonumeros" style="width:40%;" type="text" name="lote" maxlength="3" placeholder="5" required/>
            </div>
            <div style="width:50%; float:right;"> 
            <label>Código Postal</label><br>
            <input id="sonumeros1" style="width:45%;" type="text" name="postal1" placeholder="2500" maxlength="4" required /> - <input id="sonumeros2" style="width:45%;" type="text" name="postal2" placeholder="300" maxlength="3" required/><br>
            </div>
            <label>NIF Condominio</label><br>
            <input id="sonumeros3" type="text" name="nifCond" maxlength="9" minlength="9" placeholder="Número de Identificação Fiscal do Condominio" required/><br>
            <div id="shownifcond"></div><br>
            <label>Localidade</label><br>
            <input type="text" name="localidade" placeholder="eg. Santos" required /><br>
            <label>Cidade</label><br>
            <input type="text" name="cidade" placeholder="eg. Lisboa" required /><br>
            Andares <br>
            <input id="sonumeros" style="text-align: center;" maxlength="2" name="andares" type="text" placeholder="Numero de andares do edificio" required onkeydown="sim(andares.value, parcelas.value, orientacao.value)" /><br>
            Parcelas por Andar<br>
            <input id="sonumeros" style="text-align: center;" maxlength="1" name="parcelas" type="text" placeholder="Numero maximo de parcelas por andar" required onkeyup="correr(andares.value, parcelas.value, orientacao.value)" /> <br>
                    Orientação das parcelas <br>
                    <select name="orientacao" id="ori" onchange="correr(andares.value, parcelas.value, orientacao.value)">
                        <option value="0">Direções</option>
                        <option value="1">Letras</option>
                    </select><br>
            <div>
              <span id="show"></span>   
            </div>      
            <br><br>
            <button type="submit" name="registar" id="bt"  class="btlogin">Registar</button>
        </form>

        </div>
      </div>
    </body>
</html>