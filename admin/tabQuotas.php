<?php 
	session_start();
    include '../include/connection.php';
    $mes = $_GET['mes']; 	
    $idCond = $_SESSION['idCond'];


    echo"
	<div class="col-xs-12 col-sm-12 col-md-6 col-xl-6"><h3>Tabela De Quotas de <?php echo $mestexto; echo " ".$ano; ?></h3></div>
				<div class="col-xs-12 col-sm-12 col-md-6 col-xl-6" style="margin-top: 20px; margin-bottom: 10px;">
					<div style="float: right">
						<select id="drop" >
							<option value="2016" <?php if($ano == 2016) echo "selected" ?> >2016</option>
							<option value="2017" <?php if($ano == 2017) echo "selected" ?> >2017</option>
							<option value="2018" <?php if($ano == 2018) echo "selected" ?> >2018</option>
							<option value="2019" <?php if($ano == 2019) echo "selected" ?> >2019 </option>
									
						</select>
						<select id="drop" >
							<option value="1" <?php if($mes == 1) echo "selected" ?> >Janeiro</option>
							<option value="2" <?php if($mes == 2) echo "selected" ?> >Fevereiro</option>
							<option value="3" <?php if($mes == 3) echo "selected" ?> >Março</option>
							<option value="4" <?php if($mes == 4) echo "selected" ?> >Abril</option>
							<option value="5" <?php if($mes == 5) echo "selected" ?> >Maio</option>
							<option value="6" <?php if($mes == 6) echo "selected" ?> >Junho</option>
							<option value="7" <?php if($mes == 7) echo "selected" ?> >Julho</option>
							<option value="8" <?php if($mes == 8) echo "selected" ?> >Agosto</option>
							<option value="9" <?php if($mes == 9) echo "selected" ?> >Setembro</option>
							<option value="10" <?php if($mes == 10) echo "selected" ?> >Outubro</option>	
							<option value="11" <?php if($mes == 11) echo "selected" ?> >Novembro</option>	
							<option value="12" <?php if($mes == 12) echo "selected" ?> >Dezembro</option>		
						</select>
					</div>
				</div>	

				<?php 
					$query = 	"SELECT parcelas.full_name, parcelas.andar, parcelas.organizacao, quotas.valorQuota, quotas.pago FROM quotas LEFT JOIN parcelas ON parcelas.idParcela=quotas.idParcela WHERE parcelas.idCond = '$idCond' AND quotas.mesQuota = '$mes' AND quotas.anoQuota = '$ano'";
					echo "
							<table class='table table-striped table-hover'>
								<thead style='background-color: #0071BC; color: #fff'>
									<tr><td>Nome</td><td>Parcela</td><td>Valor</td><td>Estado</td></tr>
								</thead>
								<tbody>";
					$exequery = mysqli_query($conn, $query);
					while($row = mysqli_fetch_array($exequery)){
						$estado = "";
						if($row['pago'] == "1"){
							$estado = "Pago";
						}else{
							$estado = "Por Pagar";
						}
						echo 		"<tr><td>".$row['full_name']."</td><td>".$row['andar']." ".$row['organizacao']."</td><td>".$row['valorQuota']."</td><td>".$estado."</td></tr>";
					}


									
					echo		"</tbody>
							</table>";


				?"


?>