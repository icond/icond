<?php
    include 'security/functions.php';
	$um = 2;
	$dois = 4;
	echo exec('C:\xampp\htdocs\Projects\icond\c++\script\saltKeyGen3 8 23') . "<br>";
	echo exec('C:\xampp\htdocs\Projects\icond\c++\script\saltKeyGen3 4 8') . "<br>";
	echo exec('C:\xampp\htdocs\Projects\icond\c++\script\saltKeyGen3 200 1238');

    echo "<br /><br />Para teste:" . textCrypt("password") . "";

?>