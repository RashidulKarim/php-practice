<?php

// Complete the catAndMouse function below.
function catAndMouse($x, $y, $z) {
    $firstCatDistance = abs($z - $x);
    $secondCatDistance = abs($z - $y);

    if($firstCatDistance < $secondCatDistance){
        return "Cat A";
    } elseif( $firstCatDistance > $secondCatDistance){
        return "Cat B";
    }else{
        return "Mouse C";
    }

}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $q);

for ($q_itr = 0; $q_itr < $q; $q_itr++) {
    fscanf($stdin, "%[^\n]", $xyz_temp);
    $xyz = explode(' ', $xyz_temp);

    $x = intval($xyz[0]);

    $y = intval($xyz[1]);

    $z = intval($xyz[2]);

    $result = catAndMouse($x, $y, $z);

    fwrite($fptr, $result . "\n");
}

fclose($stdin);
fclose($fptr);
