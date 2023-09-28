<?php

$grades = [85, 92, 78, 88, 95];


function gradeDescending($grades) {
    arsort($grades);
    return $grades;
}

$result = gradeDescending($grades);

print_r($result);

?>
