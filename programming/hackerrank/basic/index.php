<?php

/*
 * Complete the 'gradingStudents' function below.
 *
 * The function is expected to return an INTEGER_ARRAY.
 * The function accepts INTEGER_ARRAY grades as parameter.
 */

function gradingStudents($grades) {
    $numberOfStudent = count($grades);
    
    for ($i = 0; $i < $numberOfStudent; $i++){
        if($grades[$i] >= 38 && (ceil($grades[$i] / 5) * 5 - $grades[$i] < 3)){
            
            $grades[$i] = $grades[$i] + (ceil($grades[$i] / 5) * 5 - $grades[$i]);
        }
    }
    
    return $grades;
}

$fptr = fopen("output.txt", "w");

$grades_count = intval(trim(fgets(STDIN)));

$grades = array();

for ($i = 0; $i < $grades_count; $i++) {
    $grades_item = intval(trim(fgets(STDIN)));
    $grades[] = $grades_item;
}

$result = gradingStudents($grades);

fwrite($fptr, implode("\n", $result) . "\n");

fclose($fptr);
