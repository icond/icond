<?php
// ------------------------------------------------------------------
// Includes config file - global variables
// ------------------------------------------------------------------

include $_SERVER['DOCUMENT_ROOT'] . "/icond/config.php";
global $servername, $database, $password, $username;

// ------------------------------------------------------------------

//Cria a conecção
$conn = new mysqli($servername, $username, $password, $database);


//Verifica se há conecção
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}
?>