<?php
//--------------------------------------------------------------------------------
// Deals with connections
//--------------------------------------------------------------------------------
//
// You only need to call the variable 'con' and you have everything you need
//
include 'config.php';
//switch on and off
$toConnect = false;

if($toConnect)
{
    $con = mysqli_connect($hostname, $username, $password, $database);
    mysqli_set_charset($con, 'utf-8');
}

