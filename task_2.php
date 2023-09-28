<?php

$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

$filterNumbers = array_filter($numbers, function($num) {
    return $num % 2 != 0;
});

print_r($filterNumbers);
?>
