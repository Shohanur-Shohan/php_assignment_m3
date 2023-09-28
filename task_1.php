<?php

$text = "The brown fox jumps over the lazy dog";

function manipulate(&$text){
    $lower = strtolower($text); 
    $text = str_replace("brown", "red", $lower);
    return $text;
}

manipulate($text);

print_r($text);

?>
