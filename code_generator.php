<html>
<body>
	<form method="POST"><input type="submit" name="Gerar" value="Gerar"></form>
	<?php 
	if(isset($_POST["Gerar"])){
		function generateRandomString($length) {
		    $characters = '23456789abcdefghjkmnpqrstuvwxyzABCDEFGHJKLMNOPQRSTUVWXYZ'; //caracteres em falta devido ao facto de se poderem confundir
		    $charactersLength = strlen($characters);
		    $randomString = '';
		    for ($i = 0; $i < $length; $i++) {
		        $randomString .= $characters[rand(0, $charactersLength - 1)];
		    }
		    echo $randomString;
		    return $randomString;
	    }
	    generateRandomString(5);
	} 
?>	
</body>
</html>