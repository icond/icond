<?php
	include '../include/connection.php';
	session_start();
	$de = $_GET['D'];
	$por = $_GET['P'];
	$idCond = $_SESSION['idCond'];

	$sql = "SELECT dataRegOcorrencia FROM ocorrencias WHERE idCond = 2";
	$query = mysqli_query($conn, $sql);
	if(mysqli_num_rows($query)){
	echo 	"<select name='select' onchange='drop(de.value, por.value)''>";
		while($row = mysqli_fetch_assoc($query)){
			echo "<option value='0'>" . $row['dataRegOcorrencia'] . "</option>";
		}
	echo "</select><br><br>";
	}
?>