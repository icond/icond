<?php
	//------------------------------
	//Página para efectuar o login
	//------------------------------

	include '/../include/connection.php';
  var_dump($conn);
	session_start();

    //Codigo para login
    if(isset($_POST['login'])){
    	$email = $_POST['email'];
    	$password = $_POST['password'];

    	//Converter a pass em plaintext para md5
    	//$passmd5 = md5($password);

    	//SQL para login
    	$sqlLogin = "SELECT idParcela, email, password, isAdmin FROM parcelas WHERE email = '$email' AND password = '$password'";
    	$result = mysqli_query($conn, $sqlLogin);
    	$count = mysqli_num_rows($result);

    	$row = mysqli_fetch_array($result);
    	$idLogged = $row['idParcela'];

    	if($count == 1){
      		//Login com sucesso
      		$_SESSION['user'] = $idLogged;
      		header("Location: ../login.php?s=3");
    	}
      else{
      		//Login falhado, mensagem de erro
      		header("Location: ../login.php?s=2&".$count);
    	}

    }

?>