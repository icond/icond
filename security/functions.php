<?php
//--------------------------------------------------------------------------------
// Security related Functions
//--------------------------------------------------------------------------------
// For the sake of the user's security and for further easier development, it was
// created this file that contains a set of functions that include utilities
// against cyber attacks, and other useful tools, such as password hash generators
// password hash verifiers, and some other cool stuff. This file will be maintained
// by every member of the group.
//
// Any further updates are welcomed!
//

//Global Configurations
include '/../config.php';
include '/../connection.php';

//--------------------------------------------------------------------------------
// Prevents XSS attacks (Cross-site Scripting).
//--------------------------------------------------------------------------------
// This is important because it prevents the user from executing clever
// scripts into the page. This way, the attacker would get, for example
// the user's cookies via javascript, which means he would have access to
// sessions variables.
// We protect against this scripts by removing  special characters
// from any string provided by the user, which would make the
// script useless.
//
// The function htmlspecialchars() receives 3 arguments in this case:
// 1) the string we want to verify
// 2) the flag we're using (finds and replaces specific special characters)
// 3) what charset we use
//
// The flag will be in this case:
// ENT_QUOTES	"Will convert both double and single quotes."
//
function xss_verify($value)
{
    return htmlspecialchars($value, ENT_QUOTES, "UTF-8");
}

//--------------------------------------------------------------------------------
// Generates password hashes (3rd level of encryption)
//--------------------------------------------------------------------------------
// This function is pretty straight forward. It receives a given password
// and generates an hash code for it. It is based upon CRYPT_BLOWFISH algorithm
// to create the hash (Note that it generates a 60 chars long string).
//
// It is possible to handle to the password_hash function some options:
// 1) salt - to manually provide a salt to use when hashing the password.
// (note that if you add this option, you will be preventing it from
// being generated automatically, and as a matter of fact, PHP 7
// documentation is not recommending the use of salt option anymore)
// 2) cost - which denotes the algorithmic cost that should be used.
// If omitted, a default value of 10 will be used. This is a good baseline cost,
// but you may want to consider increasing it depending on your hardware.
//
// use password_verify() function to check whatever the passwords match
//
function securePassword($username, $password, $ID, $IDCond)
{
    // get config.php variables
    global $timestamp, $hostname, $HTTPS;
    global $cppThirdPath;
    // se existir cookie para username
    if(!isset($_COOKIE["username"]))
    {
        // se existir cookie para password
        if(!isset($_COOKIE["password"]))
        {
            //username's cookie
            setcookie("username", $username, time() + $timestamp, '/', $hostname, $HTTPS, true);
            //password
            setcookie("password", textCrypt($password, $ID, $IDCond), time() + $timestamp, '/', $hostname, $HTTPS, true);
            //get password
            $password = $_COOKIE["password"];
        }
    }
    //se existirem cookies
    else
    {
        $password = $_COOKIE["password"];
    }
    $salt = $cppThirdPath . $ID;
    $options = [
        'cost' => 12,
        'salt' => $salt
    ];
    return password_hash($password, PASSWORD_BCRYPT, $options);
}
//--------------------------------------------------------------------------------
// ENCRYPTS PLAIN TEXT (2nd level of encryption)
//--------------------------------------------------------------------------------
// It is based upon SHA-512 encryption algorithm.
// in order to work, it needs to generate a custom salt based upon given
// parameters: 2 integers. So we need to pass 3 arguments:
// 1) The pain text to encrypt
// 2) One integer
// 3) Another integer
//
// RETURN: a password encrypted by auto-generated salt - If something goes wrong, it returns 'ERROR'
//
function textCrypt($password, $ID, $IDCond)
{
    //alterar depois consoante o input da base de dados
    global $cppSecondPath;
    $options = '$6$rounds=5000$';

    $hash = exec($cppSecondPath . $ID . ' ' . $IDCond);
    if($hash == 'ERROR')
        return 'ERROR';

    $finalhash = $options . $hash;
    return crypt($password, $finalhash);
}
//--------------------------------------------------------------------------------
// ENCRYPTS SECOND LEVEL TO THIRD LEVEL
//--------------------------------------------------------------------------------
// Receives second level encryption and turns it into third level
// RETURN: a third level encryption
//
function cryptHash($secondlevel, $ID)
{
    global $cppThirdPath;
    $salt = exec($cppThirdPath . $ID);
    $options = [
        'cost' => 12,
        'salt' => $salt
    ];
    return password_hash($secondlevel, PASSWORD_BCRYPT, $options);
}
//--------------------------------------------------------------------------------
// VERIFIES IF PLAIN TEXT PASSWORD EQUALS ENCRYPTED ONE
//--------------------------------------------------------------------------------
// It takes 3 arguments:
// 1) Plain text $password to authenticate
// 2) Encrypted Password from level 3
//
// RETURN: a boolean. If true then the passwords match. Else, they don't.
//
function isRightPassword($password, $passwordEncrypted, $ID, $IDCond)
{
    $lvltwo = "";
    if(isset($_COOKIE["username"]))
    {
        if(isset($_COOKIE["password"]))
            $leveltwo = $_COOKIE["password"];
    }
    else
    {
        $leveltwo = textCrypt($password, $ID, $IDCond);
        if($leveltwo === 'ERROR')
            return false;
    }

    //check if password is correct
    if(cryptHash($leveltwo, $ID) === $passwordEncrypted)
        return true;
    else
        return false;
}