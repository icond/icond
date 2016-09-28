<?php 
	$_SESSION["user"] = "debug";

  	if($_SESSION["user"] != "") {
    	include '../include/headeradmin.php';
    	include '../include/connection.php';
    	$idCond = $_SESSION['idCond'];
    	$idParcela = $_SESSION["user"];
  	}else{
    	header("Location: ../login.php");
  	}
?>
</head>
<script>
          $( document ).ready(function() {
              $("#op1-data").show();
              $("#op2-data").hide();
              $("#op3-data").hide();

              $( "#op1" ).click(function() {
                $("#op1-data").show();
                $("#op2-data").hide();
                $("#op3-data").hide();

                if(!$("#op1").hasClass("admin-menu-item-active")){
                    $("#op1").addClass("admin-menu-item-active");
                }
                
                $("#op2").removeClass("admin-menu-item-active");
                $("#op3").removeClass("admin-menu-item-active");
              });

              $( "#op2" ).click(function() {
                $("#op1-data").hide();
                $("#op2-data").show();
                $("#op3-data").hide();

                if(!$("#op2").hasClass("admin-menu-item-active")){
                    $("#op2").addClass("admin-menu-item-active");
                }
                
                $("#op1").removeClass("admin-menu-item-active");
                $("#op3").removeClass("admin-menu-item-active");
              });
              $( "#op3" ).click(function() {
                $("#op1-data").hide();
                $("#op2-data").hide();
                $("#op3-data").show();

                if(!$("#op3").hasClass("admin-menu-item-active")){
                    $("#op3").addClass("admin-menu-item-active");
                }
                
                $("#op1").removeClass("admin-menu-item-active");
                $("#op2").removeClass("admin-menu-item-active");
              });


          });
        </script>
        <script>
            function drop(de, por){                    
                    var xmlhttp = new XMLHttpRequest();
                    xmlhttp.onreadystatechange = function() {
                        if (this.readyState == 4 && this.status == 200) {
                          document.getElementById("show").innerHTML = this.responseText;
                        }
                    };
                    xmlhttp.open("GET", "btManutencao.php?D=" + de + "&P=" + por, true);
                    xmlhttp.send();
            }
        </script>
        <script>
            drop(0,0);
        </script>
<body>
            <main>
                <div class="container">
                    <div class="info-panel">
                        <div class="panelheading"><h3>Informações do Condominio</h3></div>
                        <div class="panel-body" >
                            <div class="panel-menu">

                                <div class="admin-menu-item admin-menu-item-active" id="op1">
                                    <span class="glyphicon glyphicon-home"></span> Contabilidade
                                </div>
                                <div class="admin-menu-item" id="op2">
                                    <span class="glyphicon glyphicon-home"></span> Manutenção
                                </div>
                                <div class="admin-menu-item" id="op3">
                                    <span class="glyphicon glyphicon-home"></span> Frações
                                </div>
                            </div>

                            <div class="panel-menu-info" style="min-height: 180px">
                                <div id="op1-data">
                                    <a href="pdfUtilizadores.php" target="_black" class="btNice">Ola</a>
                                </div>

                                <div id="op2-data">
                                    <form action="pdfManutenção.php" method="post" target="_blank">
                                        Aqui pode visualizar e imprimir um ficheiro pdf com as informaçoes de todas as ocorencias do seu predio
                                        <!--Tabela de:  
                                        <select name="de" onchange="drop(de.value, por.value)">
                                            <option value="0" >Ocorrências</option>
                                            <option value="1" >Vistorias</option>
                                        </select><br><br>
                                        Escolher por:
                                        <select name="por" onchange="drop(de.value, por.value)">
                                            <option value="0" >Mes</option>
                                            <option value="1" >Estado</option>
                                        </select><br><br>
                                        <div id="show">
                                            
                                        </div>-->
                                        <br>
                                        <br>
                                        <button name="" class="btNice">Ola</button><br>
                                        Aqui pode visualizar e imprimir um ficheiro pdf com as informaçoes de todas as visturias realizadas no seu predio
                                        <br>
                                        <br>
                                        <button class="btNice">Ola</button>
                                    </form>
                                </div>

                                <div id="op3-data">
                                    <form action="pdfUtilizadores.php" method="post" target="_blank">
                                        Aqui pode visualizar e imprimir um ficheiro pdf com as informaçoes de todas as parcelas, tal como, email, codigo, telemovel, nome.
                                        <br>
                                        <br>
                                        <button class="btNice">Ola</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </body>
    </html>