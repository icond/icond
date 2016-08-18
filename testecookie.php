<?php
include 'security/functions.php';
global $timestamp, $hostname, $HTTPS;


$domain = ($_SERVER['HTTP_HOST'] != 'localhost') ? $_SERVER['HTTP_HOST'] : false;
setcookie("username", $username, time() + $timestamp, '/', null, $HTTPS, true);

setcookie("password", textCrypt("passwrd", 1, 1), time() + $timestamp, '/', null, $HTTPS, true);

var_dump($HTTPS);
echo "<br>";
var_dump($timestamp);
echo "<br>";
var_dump($domain);
echo "<br>";
var_dump($username);
echo "<br>";
