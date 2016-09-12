<?php
	$mail = $_GET['M'];
	include 'include/connection.php';
    //SQL para ver se o email existe na BD
    $checkIfMailExists = "SELECT email FROM parcelas WHERE email = '$mail'";
    $ifRows = mysqli_query($conn, $checkIfMailExists);
    if(mysqli_num_rows($ifRows) != 0){
      echo "<div style='text-align:center;'  class='alert alert-danger' role='alert'>Email já em uso.</div>";
    }
?>