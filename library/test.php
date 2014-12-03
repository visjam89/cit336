<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include 'library.php';
$con = conGrt2Admin();

if($con) {
    echo "connection works";
}else {
    echo "connection failed.";
}