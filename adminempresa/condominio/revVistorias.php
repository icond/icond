<?php
        include 'insiderheader.php';
    include '../../include/connection.php';

    //Utilizador Logado
    if(isset($_SESSION["user"])) {

    $idCond = $_SESSION["idCond"];

    $queryVistoriasTerminadas = "SELECT idVistoria, ocorrencias, dataVistoria, parcelas.full_name, vistorias.idCond, estado FROM vistorias LEFT JOIN parcelas ON parcelas.idParcela = vistorias.idParcelaRegisto WHERE vistorias.idCond = $idCond AND estado = '1'";
    $resultVistoriasTerminadas = mysqli_query($conn, $queryVistoriasTerminadas);


    $queryVistoriasPorTerminar = "SELECT idVistoria, ocorrencias, dataVistoria, parcelas.full_name, vistorias.idCond, estado FROM vistorias LEFT JOIN parcelas ON parcelas.idParcela = vistorias.idParcelaRegisto WHERE vistorias.idCond = $idCond AND estado = '0'";
    $resultVistoriasPorTerminar = mysqli_query($conn, $queryVistoriasPorTerminar);

    if (isset($_POST['updateVistoria'])) {
        $idVistoria = $_POST['idVistoria'];
        $estado = $_POST['estado'];
        $sqlUpdateVistorias = "UPDATE vistorias SET estado='$estado' WHERE idVistoria = $idVistoria";
        mysqli_query($conn, $sqlUpdateVistorias);
        echo "<script> window.location = 'revVistorias.php'</script>";
    }

    ?>
        <body>
            <main>
                <div class="container">
                    <div class="info-panel">
                        <div class="panelheading"><h3>Vistorias do Condominio <?php echo $idCond; ?></h3></div>
                        <div class="panel-body">
                            <div class="panel-menu">

                                <div class="admin-menu-item admin-menu-item-active" id="op1" onclick="hideVistoria()">
                                    <span class="glyphicon glyphicon-remove"></span> Vistorias por Resolver
                                </div>
                                <div class="admin-menu-item" id="op2" onclick="hideVistoria()">
                                    <span class="glyphicon glyphicon-ok" ></span> Vistorias Resolvidas
                                </div>
                            </div>
                                <script>
                                    function hideVistoria(){
                                              document.getElementById("infoVis").innerHTML = " ";
                                    }
                                </script>
                            <div class="panel-menu-info">
                                <div id="op1-data">
                                <?php 
                                	$ct = 0;
                                	if(mysqli_num_rows($resultVistoriasPorTerminar) > 0){
                					echo "<div class='table-responsive'><table class='table table-striped table-hover'><thead><tr style='background-color: #0071BC; color: #fff'><td>Ocorrências</td><td style='width: 15%;'>Data</td><td></td></tr></thead><tbody>";
                						while($row = mysqli_fetch_assoc($resultVistoriasPorTerminar)){
                							echo "<tr><td>" . $row["ocorrencias"] . "</td><td>" . $row["dataVistoria"] . "</td><td><button value='". $row["idVistoria"] ."' onclick='porTerminarFunc(this.value)'><span class='glyphicon glyphicon-pencil'></span></button></td></tr>";
                							$ct++;
                						}
                						echo "</tbody></table></div>";
                					}else{
                						echo "Não existem registos para apresentar.";
                					}

                	 			?>
                	 			<script>
                	 				function porTerminarFunc(val){
                						var xmlhttp = new XMLHttpRequest();
									      xmlhttp.onreadystatechange = function() {
									        if (this.readyState == 4 && this.status == 200) {
									          document.getElementById("infoVis").innerHTML = this.responseText;
									        }
									      };
									      xmlhttp.open("GET", "getShowVistoria.php?G=" + val , true);
									      xmlhttp.send(); 
                					}
                	 			</script>
                                </div>

                                <div id="op2-data">
                                <?php 
                                	if(mysqli_num_rows($resultVistoriasTerminadas) > 0){
                                    echo "<div class='table-responsive'><table class='table table-striped table-hover'><thead><tr style='background-color: #0071BC; color: #fff'><td>Ocorrências</td><td style='width: 15%;'>Data</td><td></td></tr></thead><tbody>";
                						while($row = mysqli_fetch_assoc($resultVistoriasTerminadas)){
                                            echo "<tr><td>" . $row["ocorrencias"] . "</td><td>" . $row["dataVistoria"] . "</td><td><button value='". $row["idVistoria"] ."' onclick='terminadasFunc(this.value)'><span class='glyphicon glyphicon-eye-open'></span></button></td></tr>";
                						}
                						echo "</tbody></table></div>";
                					}else{
                						echo "Não existem registos para apresentar.";
                					}
                	 			?>
                                <script>
                                    function terminadasFunc(val){
                                        var xmlhttp = new XMLHttpRequest();
                                          xmlhttp.onreadystatechange = function() {
                                            if (this.readyState == 4 && this.status == 200) {
                                              document.getElementById("infoVis").innerHTML = this.responseText;
                                            }
                                          };
                                          xmlhttp.open("GET", "showVistoria.php?G=" + val , true);
                                          xmlhttp.send(); 
                                    }
                                </script>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="infoVis"></div>
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