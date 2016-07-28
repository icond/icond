<?php
	//------------------------------
	//Página para verificar o login
	//------------------------------

	include '/../include/connection.php';

	if(isset($_POST['login'])){
		$email = $_POST['email'];
		$password = $_POST['password'];

		//Query para ver se existe o condominio
		$loginQuery = "SELECT email, password from parcelas where email like '$email' and password like '$password'";

		$exec = mysqli_query($conn, $loginQuery);

		if (mysqli_num_rows($exec) !=0 )
	    {
	      header("Location: http://localhost/icond/admin/");
	    }
	    else
	    {
	      header("Location: http://localhost/icond/login.php?loginerror=1");
	    }
	}

?>