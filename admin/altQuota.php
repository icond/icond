<?php 
	session_start();
    include '../include/connection.php';
    $V = $_GET['V'];
    $idCond = $_SESSION['idCond'];
    
    $getPracID  = "SELECT idParcela FROM parcelas WHERE idCond = '$idCond' and comissaoMensal = 0";
    $exegetParcID = mysqli_query($conn, $getPracID);
    while($row = mysqli_fetch_array($exegetParcID)){
    	$idParc = $row['idParcela'];
    	$update = "UPDATE parcelas SET comissaoMensal = '$V' WHERE idParcela = $idParc";
    	mysqli_query($conn, $update);
    }
?>