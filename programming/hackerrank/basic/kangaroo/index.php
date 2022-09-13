<?php

/*
 * Complete the 'kangaroo' function below.
 *
 * The function is expected to return a STRING.
 * The function accepts following parameters:
 *  1. INTEGER x1
 *  2. INTEGER v1
 *  3. INTEGER x2
 *  4. INTEGER v2
 */

function kangaroo($x1, $v1, $x2, $v2) {
    $kangaroo1 = $x1 + $v1;
    $kangaroo2 = $x2 + $v2;

    if(($x1 > $x2 && $v1 > $v2) || ($x1 < $x2 && $v1 < $v2)){
        return "NO";
    }elseif ($kangaroo1 % $kangaroo2 === 0 || $kangaroo2 % $kangaroo1 === 0){
        return "YES";
    }
    
    $x = 1;

    while($x <= 10000) {
    if($x1 + $v1 * $x === $x2 + $v2 * $x){
        return "YES";
    }
    $x++;
    }
    return "NO";
}

$fptr = fopen(("output.txt"), "w");

$first_multiple_input = explode(' ', rtrim(fgets(STDIN)));
print_r($first_multiple_input);

$x1 = intval($first_multiple_input[0]);

$v1 = intval($first_multiple_input[1]);

$x2 = intval($first_multiple_input[2]);

$v2 = intval($first_multiple_input[3]);

$result = kangaroo($x1, $v1, $x2, $v2);

fwrite($fptr, $result . "\n");

fclose($fptr);
