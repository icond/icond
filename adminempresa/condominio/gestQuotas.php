<?php 
	//User só para debug

    	include 'insiderheader.php';
    	include '../../include/connection.php';
    	$idCond = $_SESSION['idCond'];
    	$idParcela = $_SESSION["user"];

  	$mes = date('m');
  	$ano = date('Y');
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
  	
  	//Query para verificar se existe quotas deste mes
  	$query = 	"SELECT * FROM quotas LEFT JOIN parcelas 
  				ON parcelas.idParcela=quotas.idParcela 
  				WHERE parcelas.idCond = '$idCond' 
  				AND quotas.mesQuota = '$mes' 
  				AND quotas.anoQuota = '$ano'";

  	if(mysqli_num_rows(mysqli_query($conn, $query)) == 0){
  		$queryidparc = "SELECT idParcela FROM parcelas WHERE idCond = '$idCond'";
  		$exequeryidparc = mysqli_query($conn, $queryidparc);
  		while($row = mysqli_fetch_array($exequeryidparc)){
  			$idparc = $row['idParcela'];
  			mysqli_query($conn, "INSERT INTO quotas(idParcela, mesQuota, anoQuota, valorQuota, pago) VALUES ('$idparc','$mes','$ano','0','0')");
  		}
  	}

?>
<body>
	<main>
		<script >
			function drop(val){
				document.getElementById("drop").select = val;
			}
		</script>
		<script type='text/javascript'>
					$(document).ready(function() {
						$('.number').keypress(function(event) {
						    var $this = $(this);
						    if ((event.which != 46 || $this.val().indexOf('.') != -1) &&
						       ((event.which < 48 || event.which > 57) &&
						       (event.which != 0 && event.which != 8))) {
						           event.preventDefault();
						    }

						    var text = $(this).val();
						    if ((event.which == 46) && (text.indexOf('.') == -1)) {
						        setTimeout(function() {
						            if ($this.val().substring($this.val().indexOf('.')).length > 3) {
						                $this.val($this.val().substring(0, $this.val().indexOf('.') + 3));
						            }
						        }, 1);
						    }

						    if ((text.indexOf('.') != -1) &&
						        (text.substring(text.indexOf('.')).length > 2) &&
						        (event.which != 0 && event.which != 8) &&
						        ($(this)[0].selectionStart >= text.length - 2)) {
						            event.preventDefault();
						    }      
						});
					});
				</script>

		<script >
			function reloadTable(mes, ano){
				var xmlhttp = new XMLHttpRequest();
		      	xmlhttp.onreadystatechange = function() {
			        if (this.readyState == 4 && this.status == 200) {
			          	document.getElementById("table").innerHTML = this.responseText;
			        }
		      	};
		      	xmlhttp.open("GET", "tabQuotas.php?M=" + mes + "&A=" + ano , true);
		      	xmlhttp.send(); 
			}
		</script>
		<div class="container">
			<div id="shower">
				<?php
					$verificarComissao = "SELECT * FROM `parcelas` WHERE idCond = '$idCond' AND comissaoMensal != 0";
					$exeVerificacao = mysqli_query($conn, $verificarComissao);
					if(mysqli_num_rows($exeVerificacao) === 0){
					echo "	<div class='panel panel-primary'>
					
					<script>
						function valuePicker(val){
		            		
		            			var xmlhttp = new XMLHttpRequest();
		            			xmlhttp.onreadystatechange = function() {
			                		if (this.readyState == 4 && this.status == 200) {
			                  			document.getElementById('shower').innerHTML = this.responseText;
			                  		}
					            };
					            xmlhttp.open('GET', 'altQuota.php?V=' + val , true);
					            xmlhttp.send();
					    }
					</script>
					<div class='panel-body' id='quotasPreco'>
						<div class='col-xs-12 col-sm-12 col-md-8 col-xl-10'>Introduza o valor base que as parcelas iram pagar por mes</div>
						<div class='col-xs-12 col-sm-12 col-md-4 col-xl-2'><input type='text' name='valor' class='number' id='valor'>
						<button onclick='valuePicker(valor.value)''> Definir! </button></div>
					</div>
				</div>";}
				?>
			</div>
			<div class='table-responsive' id="table">
				<div class="col-xs-12 col-sm-12 col-md-6 col-xl-6"><h3>Tabela De Quotas de <?php echo $mestexto; echo " ".$ano; ?></h3></div>
				<div class="col-xs-12 col-sm-12 col-md-6 col-xl-6" style="margin-top: 20px; margin-bottom: 10px;">
					<div style="float: right">
						<select id="dropAno" onchange="reloadTable(dropMes.value, dropAno.value)">
							<option value="2016" <?php if($ano == 2016) echo "selected" ?> >2016</option>
							<option value="2017" <?php if($ano == 2017) echo "selected" ?> >2017</option>
							<option value="2018" <?php if($ano == 2018) echo "selected" ?> >2018</option>
							<option value="2019" <?php if($ano == 2019) echo "selected" ?> >2019 </option>
									
						</select>
						<select id="dropMes" onchange="reloadTable(dropMes.value, dropAno.value)">
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
						echo 		"<tr><td>".$row['full_name']."</td><td>".$row['andar']." ".$row['organizacao']."</td><td>".$row['valorQuota']."</td><td>".$estado."</td></tr>";
					}


									
					echo		"</tbody>
							</table>";


				?>
			</div>
			<div>
				<form method="post">
				A parcela 
				<select name="parcelas">
					<?php 
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

				} ?>
			</div>
		</div>
	</main>
</body>