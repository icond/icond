<?php
// ------------------------------------------------------------------
// Includes config file - global variables
// ------------------------------------------------------------------
include "/../config.php";
global $servername, $dbname, $password, $username;

// ------------------------------------------------------------------

//Cria a conecção
$conn = new mysqli($servername, $username, $password, $dbname);

//Verifica se há conecção
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
?>