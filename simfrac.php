<?php

$a = $_GET['A'];
$p = $_GET['P'];
$o = $_GET['O'];

if($p != 0){
	echo "<br>Escolha a sua parcela";
	echo "<br><select name='adminparc'>";
	for($x = 1 ; $x <= $a ; $x++ ){
		for($y= 1 ; $y <= $p ; $y++){
		    if($o==0){
		        if($y==1)
		            echo "<option value='" . $x . " Esquerdo'>" . $x . "º Esquerdo</option>";
		        if($y==2)
		            echo "<option value='" . $x . " Direito'>" . $x . "º Direito</option>";
		        if($y==3)
		            echo "<option value='" . $x . " Frente'>" . $x . "º Frente</option>";
		    }else{
		        if($y==1)
		            echo "<option value='" . $x . " A'>" . $x . " A</option>";
		        if($y==2)
		            echo "<option value='" . $x . " B'>" . $x . " B</option>";
		        if($y==3)
		            echo "<option value='" . $x . " C'>" . $x . " C</option>";
		        if($y==4)
		            echo "<option value='" . $x . " D'>" . $x . " D</option>";
		        if($y==5)
		            echo "<option value='" . $x . " E'>" . $x . " E</option>";
		        if($y==6)
		            echo "<option value='" . $x . " F'>" . $x . " F</option>";
		    }
		}
	}
	echo "</select> <br>";
}
?>
