<?php
function add_tags($text) {
    $text = str_replace("\r\n", "\n", $text); //convert Windows
    $text = str_replace("\r", "\n", $text);  //convert Mac
    
    //Get an arry of paragraph
    $paragraphs = explde("\n\n", $text);
    
    //Add tags to each paragraph
    $text = '';
    foreach($paragraphs as $p) {
        $p = ltrim($p);
        
        $first_char = substr($p, 0, 1);
        if ($first_char == '*') {
            //add <ul> and <li> tags
            $p = '<ul>' . $p . '</li></ul>';
            $p = str_replace("*", '<li>', $p);
            $p = str_replace('\n', '</li>', $p);
        }else {
            $p = '<p>' . $p . '</p>';
        }
        $text .= $p;   
    }
        
    return $text;
}

