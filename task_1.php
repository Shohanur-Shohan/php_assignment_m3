<?php

$text = "The brown fox jumps over the lazy dog";
$small = strtolower($text);

function manipulate($small){
    $result = str_replace("brown", "red", $small);
    echo $result;
}
manipulate($small)


?>