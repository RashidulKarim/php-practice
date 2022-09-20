<?php

/*
 * Complete the 'getTotalX' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts following parameters:
 *  1. INTEGER_ARRAY a
 *  2. INTEGER_ARRAY b
 */

function getTotalX($a, $b) {
   $count = 0;
   for($i = $a[0]; $i <= $b[count($b)-1]; $i++){
    $tag = false; 
    $tag = ItemDivided($a, $i);
    if($tag){
        $tag = ItemDivisor($b, $i);
        if($tag){
            $count++;
        }
    }
   }
   return $count;
}

function ItemDivided ($a, $i){
    foreach($a as $value){
        if($i % $value != 0){
            return false;
        }
    }
    return true;
}

function ItemDivisor ($b, $i){
    foreach($b as $value){
        if($value % $i != 0){
            return false;
        }
    }
    return true;
}

$fptr = fopen(("output.txt"), "w");

$first_multiple_input = explode(' ', rtrim(fgets(STDIN)));

$n = intval($first_multiple_input[0]);

$m = intval($first_multiple_input[1]);

$arr_temp = rtrim(fgets(STDIN));

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

$brr_temp = rtrim(fgets(STDIN));

$brr = array_map('intval', preg_split('/ /', $brr_temp, -1, PREG_SPLIT_NO_EMPTY));

$total = getTotalX($arr, $brr);

fwrite($fptr, $total . "\n");

fclose($fptr);