<?php

/*
 * Complete the 'birthday' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts following parameters:
 *  1. INTEGER_ARRAY s
 *  2. INTEGER d
 *  3. INTEGER m
 */

function birthday($s, $d, $m) {
    

}

$fptr = fopen("output.txt", "w");

$n = intval(trim(fgets(STDIN)));

$s_temp = rtrim(fgets(STDIN));

$s = array_map('intval', preg_split('/ /', $s_temp, -1, PREG_SPLIT_NO_EMPTY));

$first_multiple_input = explode(' ', rtrim(fgets(STDIN)));

$d = intval($first_multiple_input[0]);

$m = intval($first_multiple_input[1]);

$result = birthday($s, $d, $m);

fwrite($fptr, $result . "\n");

fclose($fptr);
\
