<?php

function generatePassword($length) {
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+';
    $password = '';
    
    for ($i = 0; $i < $length; $i++) {
        $randomNum = rand(0, strlen($characters) - 1);
        $password .= $characters[$randomNum];
    }

    return $password;
}

$password = generatePassword(12);

echo $password;

?>
