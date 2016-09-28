<?php	
    include '../include/connection.php';
	$g = $_GET['G'];

	$sqlGetVistoria = "SELECT *, parcelas.full_name FROM vistorias LEFT JOIN parcelas ON parcelas.idParcela = vistorias.idParcelaRegisto WHERE idVistoria = $g";

	$row = mysqli_fetch_assoc(mysqli_query($conn, $sqlGetVistoria));

?>

<form method="post" style="margin-top: 2%;">
<div class='table-responsive'>
<input type="hidden" name="idVistoria" value="<?php echo $g; ?>">
<table class='table'>
	<tbody>
		<tr>
			<td style="width: 30%;"><label>Ocorrencia: </label></td>
			<td><?php echo " " . $row['ocorrencias'];?></td>
		</tr>
		<tr>
			<td style="width: 30%;"><label>Utilizador que Registou: </label></td>
			<td><?php echo " " . $row['full_name'];?></td>
		</tr>
		<tr>
			<td style="width: 30%;"><label>Data: </label></td>
			<td><?php echo " " . $row['dataVistoria'];?></td>
		</tr>
		<tr>
			<td style="width: 50%; text-align: center;"><label>Estado</label><br>
						<select name="estado">
                        	<option value="0">Por Resolver</option>
                        	<option value="1">Resolvido</option>
                    	</select></td>
			<td style="width: 50%; text-align: center;"><button class="btNice" name="updateVistoria">Guardar</button></td>
		</tr>
	</tbody>
</table>
</div>
</form>