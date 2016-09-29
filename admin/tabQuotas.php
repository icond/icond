<?php 
	session_start();
    include '../include/connection.php';
    $idCond = $_SESSION['idCond'];
    $mes = $_GET['M'];
  	$ano = $_GET['A'];
  	$mestexto = "";
  	switch($mes){
  		case 1:
  			$mestexto = "Janeiro";
  		break;
  		case 2:
  			$mestexto = "Fevereiro";
  		break;
  		case 3:
  			$mestexto = "Março";
  		break;
  		case 4:
  			$mestexto = "Abril";
  		break;
  		case 5:
  			$mestexto = "Maio";
  		break;
  		case 6:
  			$mestexto = "Junho";
  		break;
  		case 7:
  			$mestexto = "Julho";
  		break;
  		case 8:
  			$mestexto = "Agosto";
  		break;
  		case 9:
  			$mestexto = "Setembro";
  		break;
  		case 10:
  			$mestexto = "Outubro";
  		break;
  		case 11:
  			$mestexto = "Novembro";
  		break;
  		case 12:
  			$mestexto = "Dezembro";
  		break;
  	}


    echo "<div class='col-xs-12 col-sm-12 col-md-6 col-xl-6'><h3>Tabela De Quotas de ".$mestexto." de " .$ano. "</h3></div>
			<div class='col-xs-12 col-sm-12 col-md-6 col-xl-6' style='margin-top: 20px; margin-bottom: 10px;''>
				<div style='float: right'>
					<select id='dropAno' onchange='reloadTable(dropMes.value, dropAno.value)' >
						<option value='2016'" ;
						if($ano == 2016) echo "selected";
						echo ">2016</option><option value='2017'";
						if($ano == 2017) echo "selected";
						echo ">2017</option><option value='2018'";
						if($ano == 2018) echo "selected"; 
						echo ">2018</option><option value='2019'";
						if($ano == 2019) echo "selected";
						echo ">2019 </option>
								
					</select>
					<select id='dropMes' onchange='reloadTable(dropMes.value, dropAno.value)''>
						<option value='1'"; 
						if($mes == 1) echo "selected";
						echo ">Janeiro</option><option value='2'";
						if($mes == 2) echo "selected";
						echo ">Fevereiro</option><option value='3'"; 
						if($mes == 3) echo "selected"; 
						echo ">Março</option><option value='4'";
						if($mes == 4) echo "selected"; 
						echo ">Abril</option><option value='5'"; 
						if($mes == 5) echo "selected"; 
						echo ">Maio</option><option value='6'";
						if($mes == 6) echo "selected"; 
						echo ">Junho</option><option value='7'";
						if($mes == 7) echo "selected"; 
						echo ">Julho</option><option value='8'";
						if($mes == 8) echo "selected"; 
						echo ">Agosto</option><option value='9'";
						if($mes == 9) echo "selected"; 
						echo ">Setembro</option><option value='10'";
						if($mes == 10) echo "selected"; 
						echo ">Outubro</option><option value='11'";
						if($mes == 11) echo "selected"; 
						echo ">Novembro</option><option value='12'";
						if($mes == 12) echo "selected";  
						echo ">Dezembro</option>		
					</select>
				</div>
			</div>	
		</div>";
		

		$query = "SELECT parcelas.full_name, parcelas.andar, parcelas.organizacao, quotas.valorQuota, quotas.pago FROM quotas LEFT JOIN parcelas ON parcelas.idParcela=quotas.idParcela WHERE parcelas.idCond = '$idCond' AND quotas.mesQuota = '$mes' AND quotas.anoQuota = '$ano'";

		$exequery = mysqli_query($conn, $query);
		if(mysqli_num_rows($exequery) != 0 ){
		echo "	
				<br><br><br>
				<div class='col-xs-12 col-sm-12 col-md-12 col-xl-12'>
				<form method='post'>
				A parcela 
				<select name='parcelas'>";

					$parc = "SELECT idParcela, andar, organizacao FROM parcelas WHERE idCond=$idCond";
					$query2 = mysqli_query($conn, $parc);

			  		while($row3 = mysqli_fetch_array($query2)){
			  			echo "<option value='" . $row3["idParcela"] . "'>" . $row3["andar"] . " " . $row3["organizacao"] . "</option>";
			  		} ?>
				</select> <?php echo "no mes " . $mes . " e no ano " . $ano ?>
				<button name="pagou">Pagou</button>
				</form>

				<?php if (isset($_POST['pagou'])) {
					$parcela= $_POST['parcelas'];
					$comissao = "SELECT comissaoMensal from parcelas where idParcela=$parcela";
					$query = mysqli_query($conn, $comissao);

			  		while($row2 = mysqli_fetch_array($query)){
			  			$comissaoMensal = $row2['comissaoMensal'];
			  		}

			  		mysqli_query($conn, "UPDATE quotas SET valorQuota = $comissaoMensal, pago='1' WHERE idParcela=$parcela");

			  		echo "<script> window.location = 'gestQuotas.php'</script>";

				} 
				echo "<br><br>
				<table class='table table-striped table-hover'>
					<thead style='background-color: #0071BC; color: #fff'>
						<tr><td>Nome</td><td>Parcela</td><td>Valor Pago</td><td>Estado</td></tr>
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
							echo 	"<tr><td>".$row['full_name']."</td><td>".$row['andar']." ".$row['organizacao']."</td><td>".$row['valorQuota']."</td><td>".$estado."</td></tr>";
						}


						
		echo		"</tbody>
				</table>";
		}else{
			echo "Nao existem registos deste mes!";
		}

				


?>