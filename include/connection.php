<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "icond";

	//Cria a conecção
	$conn = new mysqli($servername, $username, $password, $dbname);

	//Verifica se há conecção
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
?>