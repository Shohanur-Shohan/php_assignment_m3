<?php

$students = [
    "student1" => ["Math" => 85, "English" => 92, "Science" => 78],
    "student2" => ["Math" => 75, "English" => 72, "Science" => 78],
    "student3" => ["Math" => 65, "English" => 62, "Science" => 78],
];

function calculateGrades($students) {
    foreach ($students as $student => $grades) {
        $total = array_sum($grades);
        $count = count($grades);
        $average = $total / $count;
        
        echo "Average grade for $student: " . round($average, 2) . "\n";
    }
}

calculateGrades($students);
?>