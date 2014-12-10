<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
if (isset($_GET['action'])){
    $action= $_GET['action'];
}else {
    $action = 'Home';
}
    

if ($action=='Home') {
    $content .= "<h1>About PHP Travel</h1><p>This site is dedicated to giving valuable information on various locations</p>";
}
else if ($action=='Europe') {
    $content =  "<h1>Europe</h1><p>So many white people</p>";
    
}else if ($action=='Africa') {
    $content =  "<h1>Africa</h1><p>Fantastic wildlife</p>";
    
}else if ($action=='North America') {
    $content = "<h1>North America</h1><p>Come see Obama!</p>";
    
}else if ($action=='Antarctica') {
    $content =  "<h1>Antarctica</h1><p>IT IS COLD</p>";
    
}else if ($action=='Asia') {
    $content =  "<h1>Asia</h1><p>Great Wall of China!</p>";
    
}else if ($action=='South America') {
    $content =  "<h1>South America</h1><p>It is South of North America</p>";
    
}else if ($action=='Oceania') {
    $content =  "<h1>Oceania</h1><p>This place is in the ocean</p>";
    
}else {
   $content = "<h1>About PHP Travel</h1><p>This site is dedicated to giving valuable information on various locations</p>"; 
}

include 'view.php';

