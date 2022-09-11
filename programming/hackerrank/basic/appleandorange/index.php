<?php

/*
 * Complete the 'countApplesAndOranges' function below.
 *
 * The function accepts following parameters:
 *  1. INTEGER s
 *  2. INTEGER t
 *  3. INTEGER a
 *  4. INTEGER b
 *  5. INTEGER_ARRAY apples
 *  6. INTEGER_ARRAY oranges
 */

function countApplesAndOranges($s, $t, $a, $b, $apples, $oranges) {
    // Write your code here
    //house starting point $s
    //house end point $t
    //Apple tree position $a
    //orange tree position $b
    // apple array $apples
    // orange array $oranges
    $numberOfAppleFallInHouse = 0;
    $numberOfOrangeFallInHouse = 0;
    
    for($i = 0; $i < count($apples); $i++ ){
        if($apples[$i] + $a >= $s && $t >= $apples[$i] + $a ){
            $numberOfAppleFallInHouse += 1;
        }
    }
    
    for($i = 0; $i < count($oranges); $i++ ){
        if($oranges[$i] + $b >= $s && $oranges[$i] + $b <= $t){
            $numberOfOrangeFallInHouse += 1;
        }
    }
    echo  "$numberOfAppleFallInHouse\n";
    echo  "$numberOfOrangeFallInHouse\n";

}

$first_multiple_input = explode(' ', rtrim(fgets(STDIN)));

$s = intval($first_multiple_input[0]);

$t = intval($first_multiple_input[1]);

$second_multiple_input = explode(' ', rtrim(fgets(STDIN)));

$a = intval($second_multiple_input[0]);

$b = intval($second_multiple_input[1]);

$third_multiple_input = explode(' ', rtrim(fgets(STDIN)));

$m = intval($third_multiple_input[0]);

$n = intval($third_multiple_input[1]);

$apples_temp = rtrim(fgets(STDIN));

$apples = array_map('intval', preg_split('/ /', $apples_temp, -1, PREG_SPLIT_NO_EMPTY));

$oranges_temp = rtrim(fgets(STDIN));

$oranges = array_map('intval', preg_split('/ /', $oranges_temp, -1, PREG_SPLIT_NO_EMPTY));

countApplesAndOranges($s, $t, $a, $b, $apples, $oranges);
