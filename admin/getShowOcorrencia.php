<?php	
    include '../include/connection.php';
	$g = $_GET['G'];

	$sqlGetOcorrencia = "SELECT *, parcelas.full_name FROM ocorrencias LEFT JOIN parcelas ON parcelas.idParcela = ocorrencias.idParcela WHERE idOcorrencia = $g";

	$row = mysqli_fetch_assoc(mysqli_query($conn, $sqlGetOcorrencia));

?>

<form method="post" style="margin-top: 2%;">
<div class='table-responsive'>
<table class='table'>
	<tbody>
		<tr><td style="width: 30%;"><label>Titulo da Ocorrencia: </label></td><td><?php echo " " . $row['tituloOcorrencia'];?></td></tr>
		<tr><td style="width: 30%;"><label>Ocorrencia: </label></td><td><?php echo " " . $row['ocorrencia'];?></td></tr>
		<tr><td style="width: 30%;"><label>Utilizador que Registou: </label></td><td><?php echo " " . $row['full_name'];?></td></tr>
		<tr><td style="width: 30%;"><label>Data: </label></td><td><?php echo " " . $row['dataRegOcorrencia'];?></td></tr>
		<tr><td style="width: 50%; text-align: center;"><label>Data: </label></td><td style="width: 50%; text-align: center;"><?php echo " " . $row['dataRegOcorrencia'];?></td></tr>
	</tbody>
</table>
</div>
</form>