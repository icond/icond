<?php
	//------------------------------
	//Página para verificar o login
	//------------------------------

	include '/../include/connection.php';

	if(isset($_POST['login'])){
		$email = $_POST['email'];
		$password = $_POST['password'];

		//Query para ver se existe o condominio
		$loginQuery = "SELECT ";
	}

?>