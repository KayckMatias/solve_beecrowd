<?php
// beecrowd | 1172
// Array Replacement I
// Adapted by Neilor Tonin, URI  Brazil

// Timelimit: 1
// Read an array X[10]. After, replace every null or negative number of X ​by 1. Print all numbers stored in the array X.

// Input
// The input contains 10 integer numbers. These numbers ​​can be positive or negative.

// Output
// For each position of the array, print "X [i] = x", where i is the position of the array and x is the number stored in that position.

$x = 10;
$array = [];

for ($i = 0; $i < $x; $i++) {
    $a = intval(fgets(STDIN));
    $array[] = ($a >= 1) ? $a : 1;
}

foreach($array as $key => $item){
    echo "X[" . $key . "] = " . $item . "\n";
}
