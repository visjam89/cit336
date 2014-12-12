<?php

function websterUser(){
    $server = 'localhost';
    $database = 'websterf_webster';
    $username = 'websterf_iuser';
    $password = '2b%V9b?E.[C7';
    $dsn = "mysql:host=$server; dbname=$database";
    $options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
    
    try{
        $webster = new PDO($dsn, $username, $password, $options);
    } catch (Exception $ex) {
        header('location: /errordocs/500.php');
        exit;
    }
    if(is_object($webster)) {
        return $webster;
    }
    return FALSE;
}

function websterAdmin(){
    $server = 'localhost';
    $database = 'websterf_webster';
    $username = 'websterf_iAdmin';
    $password = 'SWx)(&KX)ySA';
    $dsn = "mysql:host=$server; dbname=$database";
    $options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
    
    try{
        $websterAdmin = new PDO($dsn, $username, $password, $options);
    } catch (Exception $ex) {
        header('location: /errordocs/500.php');
        exit;
    }
    if(is_object($websterAdmin)) {
        return $websterAdmin;
    }
    return FALSE;
    
}
/*-------------------Password Functions--------------*/

//1st function creates password

//2nd compare password to guidelines 

// Use with registration and update (if password is being updated)
function hashPassword($password) {
    $salt = '$6$rounds=9000$' . substr(md5(uniqid(rand(), true)), 0, 16); // SHA-512   
    return crypt($password, $salt); // Result is ~120 character password including salt
}
// Use with login, remember that the password must be queried out of the database first
function comparePassword($password, $hashedPassword) {
    return crypt($password, $hashedPassword) == $hashedPassword;
}
/* ------------ Data Input Cleanup Functions --------------- */
// Three versions, use the one appropriate for what you want to do
function filterString($string){
    $string = filter_var(trim($string), FILTER_SANITIZE_STRING); // Encodes special chars
 // $string = filter_var(trim($string), FILTER_SANITIZE_SPECIAL_CHARS); // Removes a small list of special chars
 // $string = filter_var(trim($string), FILTER_SANITIZE_FULL_SPECIAL_CHARS); // Removes all special chars
    return $string;
}
// Always sanitize first (remove potentially bad things), then validate remains for acceptability
function filterNumber($number){
 $number = filter_var(trim($number), FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
 $number = filter_var($number, FILTER_VALIDATE_FLOAT, FILTER_FLAG_ALLOW_THOUSAND);
 return $number;
}
function validateEmail($email){
    $email = filter_var(trim($email), FILTER_SANITIZE_EMAIL);
    $email = filter_var(trim($email), FILTER_VALIDATE_EMAIL);
    return $email;
}