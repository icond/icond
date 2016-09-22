<?php
    include '../include/headeradmin.php';
    include '../include/connection.php';

    //Utilizador Logado
    if(isset($_SESSION["user"])) {

    $idCond = $_SESSION["idCond"];

    $queryOcorrenciasTerminadas = "SELECT idOcorrencia, tituloOcorrencia, ocorrencia, parcelas.full_name, ocorrencias.idCond, dataRegOcorrencia, estado FROM ocorrencias LEFT JOIN parcelas ON parcelas.idParcela = ocorrencias.idParcela WHERE ocorrencias.idCond = $idCond AND estado = '1'";
    $resultOcorrenciasTerminadas = mysqli_query($conn, $queryOcorrenciasTerminadas);


    $queryOcorrenciasPorTerminar = "SELECT idOcorrencia, tituloOcorrencia, ocorrencia, parcelas.full_name, ocorrencias.idCond, dataRegOcorrencia, estado FROM ocorrencias LEFT JOIN parcelas ON parcelas.idParcela = ocorrencias.idParcela WHERE ocorrencias.idCond = $idCond AND estado = '0'";
    $resultOcorrenciasPorTerminar = mysqli_query($conn, $queryOcorrenciasPorTerminar);


    ?>

        <body>
            <main>
                <div class="container">
                    <div class="info-panel">
                        <div class="panelheading"><h3>Ocorrencias do Condominio <?php echo $idCond; ?></h3></div>
                        <div class="panel-body">
                            <div class="panel-menu">

                                <div class="admin-menu-item admin-menu-item-active" id="op1">
                                    <span class="glyphicon glyphicon-remove"></span> Ocorrências por Terminar
                                </div>
                                <div class="admin-menu-item" id="op2">
                                    <span class="glyphicon glyphicon-ok"></span> Ocorrências Terminadas
                                </div>
                            </div>

                            <div class="panel-menu-info">
                                <div id="op1-data">
                                <?php 
                                	$ct = 0;
                                	if(mysqli_num_rows($resultOcorrenciasPorTerminar) > 0){
                					echo "<div class='table-responsive'><table class='table table-striped table-hover'><thead><tr style='background-color: #0071BC; color: #fff'><td>Nome</td><td>Ocorrência</td><td>Data</td><td></td></tr></thead><tbody>";
                						while($row = mysqli_fetch_assoc($resultOcorrenciasPorTerminar)){
                							echo "<tr><td>" . $row["full_name"] . "</td><td>" . $row["tituloOcorrencia"] . "</td><td>" . $row["dataRegOcorrencia"] . "</td><td><button value='". $row["idOcorrencia"] ."' onclick='myFunc(this.value)'><span class='glyphicon glyphicon-pencil'></span></button></td></tr>";
                							$ct++;
                						}
                						echo "</tbody></table></div>";
                					}else{
                						echo "Não existem registos para apresentar.";
                					}

                	 			?>
                	 			<script>
                	 				function myFunc(val){
                						var xmlhttp = new XMLHttpRequest();
									      xmlhttp.onreadystatechange = function() {
									        if (this.readyState == 4 && this.status == 200) {
									          document.getElementById("infoOco").innerHTML = this.responseText;
									        }
									      };
									      xmlhttp.open("GET", "getShowOcorrencia.php?G=" + val , true);
									      xmlhttp.send(); 
                					}
                	 			</script>
                                </div>

                                <div id="op2-data">
                                <?php 
                                	if(mysqli_num_rows($resultOcorrenciasTerminadas) > 0){
                					echo "<div class='table-responsive'><table class='table table-striped table-hover'><thead><tr style='background-color: #0071BC; color: #fff'><td>Nome</td><td>Ocorrência</td><td>Data</td></tr></thead><tbody>";
                						while($row = mysqli_fetch_assoc($resultOcorrenciasTerminadas)){
                							echo "<tr><td>" . $row["full_name"] . "</td><td>" . $row["tituloOcorrencia"] . "</td><td>" . $row["dataRegOcorrencia"] . "</td></tr>";
                						}
                						echo "</tbody></table></div>";
                					}else{
                						echo "Não existem registos para apresentar.";
                					}
                	 			?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="infoOco"></div>
                </div>
            </main>
        </body>
    </html>

<?php

  }else{
    // aqui podia-se enviar um parametro para pedir para fazer outra vez login
    header("Location: ../login.php");
  }

 ?>