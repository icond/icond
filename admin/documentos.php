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

                if(!$("#op2").hasClass("admin-menu-item-active")){
                    $("#op2").addClass("admin-menu-item-active");
                }
                
                $("#op1").removeClass("admin-menu-item-active");
                $("#op2").removeClass("admin-menu-item-active");
              });


          });
        </script>
<body>
            <main>
                <div class="container">
                    <div class="info-panel">
                        <div class="panelheading"><h3>Informações do Condominio</h3></div>
                        <div class="panel-body">
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

                            <div class="panel-menu-info">
                                <div id="op1-data">
                                    <div class="panel-menu-info-titles">
                                        <span class="title">Morada</span><br><br>
                                        <span class="title">Lote</span><br><br>
                                        <span class="title">Codigo Postal</span><br><br>
                                        <span class="title">Localidade</span><br><br>
                                        <span class="title">Cidade</span><br><br>
                                        <span class="title">Pais</span><br><br>
                                        <span class="title">Nif</span><br>
                                    </div>
                                    <div class="panel-menu-info-data">
                                        <span class="data"><?php echo $morada; ?></span><br><br>
                                        <span class="data"><?php echo $lote; ?></span><br><br>
                                        <span class="data"><?php echo $codigoPostal; ?></span><br><br>
                                        <span class="data"><?php echo $localidade; ?></span><br><br>
                                        <span class="data"><?php echo $cidade; ?></span><br><br>
                                        <!-- TODO Ir buscar o país de acordo com o ID à tabela dos países -->
                                        <span class="data"><?php echo "ID País: ".$idPais." (Portugal)"; ?></span><br><br>
                                        <span class="data"><?php echo $nifCond; ?></span><br>
                                    </div>
                                </div>

                                <div id="op2-data">
                                    <div class="panel-menu-info-titles">
                                        <span class="title">Nome</span><br><br>
                                        <span class="title">Telemsdasdsadovel</span><br><br>
                                        <span class="title">Email</span><br><br>
                                        <span class="title">Lote</span><br>
                                    </div>
                                    <div class="panel-menu-info-data">
                                        <span class="data"><?php echo $nome; ?></span><br><br>
                                        <span class="data"><?php echo $telemovel; ?></span><br><br>
                                        <span class="data"><?php echo $email; ?></span><br><br>
                                        <span class="data"><?php echo $loteAdmin; ?></span><br>
                                    </div>
                                </div>

                                <div id="op3-data">
                                    <div class="panel-menu-info-titles">
                                        <span class="title">Nome</span><br><br>
                                        <span class="title">Teleasdasdmovel</span><br><br>
                                    </div>
                                    <div class="panel-menu-info-data">
                                        <span class="data"><?php echo $nome; ?></span><br><br>
                                        <span class="data"><?php echo $telemovel; ?></span><br><br>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </body>
    </html>