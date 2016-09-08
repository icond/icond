<?php
	//------------------------------
	//Página para efectuar o login
	//------------------------------
	include '../include/connection.php';
  session_start();
    //Codigo para login
    if(isset($_POST['login'])){
    	$email = $_POST['email'];
    	$password = $_POST['password'];
    	//Converter a pass em plaintext para md5
    	//$passmd5 = md5($password);
      
    	//SQL para login
    	$sqlLogin = "SELECT idParcela, email, password, isAdmin, idCond FROM parcelas WHERE email = '$email' AND password = '$password'";
    	$result = mysqli_query($conn, $sqlLogin);
    	$count = mysqli_num_rows($result);
    	$row = mysqli_fetch_array($result);
    	$idLogged = $row['idParcela'];
      $_SESSION['idCond'] = $row['idCond'];
    	if($count == 1){
      		//Login com sucesso
      		$_SESSION['user'] = $idLogged;
      		header("Location: ../admin/");
    	}else{
      		//Login falhado, mensagem de erro
      		header("Location: ../login.php?s=2");
    	}

    }

?>