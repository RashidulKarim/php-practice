<?php

/*
 * Complete the 'matchingStrings' function below.
 *
 * The function is expected to return an INTEGER_ARRAY.
 * The function accepts following parameters:
 *  1. STRING_ARRAY strings
 *  2. STRING_ARRAY queries
 */

function matchingStrings($strings, $queries) {
    $result = [];
    $stringsLength = count($strings);
    $queriesLength = count($queries);

    for($i = 0; $i < $queriesLength; $i++){
        $m = 0;
        for($j = 0; $j < $stringsLength; $j++){
            if($queries[$i] === $strings[$j]){
               $m++;
            }
        }
        $result[] = $m;
    }

    return $result;

}

$fptr = fopen(("output.txt"), "w");

$strings_count = intval(trim(fgets(STDIN)));

$strings = array();

for ($i = 0; $i < $strings_count; $i++) {
    $strings_item = rtrim(fgets(STDIN), "\r\n");
    $strings[] = $strings_item;
}

$queries_count = intval(trim(fgets(STDIN)));

$queries = array();

for ($i = 0; $i < $queries_count; $i++) {
    $queries_item = rtrim(fgets(STDIN), "\r\n");
    $queries[] = $queries_item;
}

$res = matchingStrings($strings, $queries);

fwrite($fptr, implode("\n", $res) . "\n");

fclose($fptr);
