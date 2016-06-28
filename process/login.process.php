<?php
	//------------------------------
	//Página para verificar o login
	//------------------------------

	include '/../include/connection.php';

	if(isset($_POST['login'])){
		$email = $_POST['email'];
		$password = $_POST['password'];

		echo $email . ' ' .$password;
	}

?>