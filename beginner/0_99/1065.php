<?php
// beecrowd | 1065
// Even Between five Numbers
// Adapted by Neilor Tonin, URI  Brazil

// Timelimit: 1
// Make a program that reads five integer values. Count how many of these values ​​are even and  print this information like the following example.

// Input
// The input will be 5 integer values.

// Output
// Print a message like the following example with all letters in lowercase, indicating how many even numbers were typed.

$a = trim(fgets(STDIN));
$b = trim(fgets(STDIN));
$c = trim(fgets(STDIN));
$d = trim(fgets(STDIN));
$e = trim(fgets(STDIN));

$numbers = [$a,$b,$c,$d,$e];

[$count] = 0;

foreach($numbers as $number){
    if(abs($number) % 2 == 0){
        $count++;
    }
}

echo "$count valores pares\n";