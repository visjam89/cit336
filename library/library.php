<?php

function conGrt2User(){
    $server = 'localhost';
    $database = 'websterf_guitar2';
    $username = 'websterf_iuser';
    $password = '2b%V9b?E.[C7';
    $dsn = "mysql:host=$server; dbname=$database";
    $options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
    
    try{
        $conGuitar2 = new PDO($dsn, $username, $password, $options);
    } catch (Exception $ex) {
        header('location: /errordocs/500.php');
        exit;
    }
    return $conGuitar2;
}

function conGrt2Admin(){
    $server = 'localhost';
    $database = 'websterf_guitar2';
    $username = 'websterf_iAdmin';
    $password = 'SWx)(&KX)ySA';
    $dsn = "mysql:host=$server; dbname=$database";
    $options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
    
    try{
        $conGuitar2 = new PDO($dsn, $username, $password, $options);
    } catch (Exception $ex) {
        header('location: /errordocs/500.php');
        exit;
    }
    return $conGuitar2;
}
/*-------------------Password Functions--------------*/

//1st function creates password

//2nd compare password to guidelines 