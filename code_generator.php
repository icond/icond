<?php 
    include '/include/connection.php';
	function generateRandomString($length) {
	    $characters = '23456789abcdefghjkmnpqrstuvwxyzABCDEFGHJKLMNOPQRSTUVWXYZ'; //caracteres em falta devido ao facto de se poderem confundir
	    $charactersLength = strlen($characters);
	    $randomString = '';
	    for ($i = 0; $i < $length; $i++) {
	        $randomString .= $characters[rand(0, $charactersLength - 1)];
	    }
	    return $randomString;
    }
?>	