<?php
	$nif = $_GET['N'];
	include 'include/connection.php';
    //SQL para ver se o NIF existe na BD
    $checkIfNifExists = "SELECT nifParcela FROM parcelas WHERE nifParcela = '$nif'";
    $ifRows = mysqli_query($conn, $checkIfNifExists);
    if(mysqli_num_rows($ifRows) != 0){
      echo "<div style='text-align:center;'  class='alert alert-danger' role='alert'>NIF de parcela já em uso.</div>";
    }
?>