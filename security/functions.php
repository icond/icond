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
// Generates password hashes
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
function passwordHash($value)
{
    $options = [
        'cost' => 12
    ];
    return password_hash($value, PASSWORD_BCRYPT, $options);
}
//--------------------------------------------------------------------------------
// ENCRYPTS PLAIN TEXT
//--------------------------------------------------------------------------------
// It is based upon SHA-512 encryption algorithm.
// in order to work, it needs to generate a custom salt based upon given
// parameters: 2 integers. So we need to pass 3 arguments:
// 1) The pain text to encrypt
// 2) One integer
// 3) Another integer
//
// RETURN: a password encrypted by auto-generated salt
//
function textCrypt ($password)
{
    //alterar depois consoante o input da base de dados
    $hash = exec('C:\xampp\htdocs\Projects\icond\c++\script\saltKeyGen3 8 23');
    return crypt($password, $hash);
}

//--------------------------------------------------------------------------------
// VERIFIES IF PLAIN TEXT PASSWORD EQUALS ENCRYPTED ONE
//--------------------------------------------------------------------------------
// It takes 3 arguments:
// 1) Plain text password to authenticate
// 2) Encrypted Password from level 2
// 3) hash code used to encrypt plain text
//
// RETURN: a boolean. If true then the passwords match. Else, they don't.
//
function cryptText($password, $hash, $passwordEncrypted)
{
    $hash = '$6$8dN.92jwu/?mdMDK29Dmdc';        //implementar mais tarde a cena de gerar automaticamente salts
    if(crypt($password, $hash) == $passwordEncrypted)
        return true;
    else
        return false;
}