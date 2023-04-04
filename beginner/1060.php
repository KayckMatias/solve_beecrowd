<?php
// beecrowd | 1060
// Positive Numbers
// Adapted by Neilor Tonin, URI  Brazil

// Timelimit: 1
// Write a program that reads 6 numbers. These numbers will only be positive or negative (disregard null values). Print the total number of positive numbers.

// Input
// Six numbers, positive and/or negative.

// Output
// Print a message with the total number of positive numbers.

$a = trim(fgets(STDIN));
$b = trim(fgets(STDIN));
$c = trim(fgets(STDIN));
$d = trim(fgets(STDIN));
$e = trim(fgets(STDIN));
$f = trim(fgets(STDIN));

$numbers = [$a,$b,$c,$d,$e,$f];

$count = 0;

foreach($numbers as $number){
    if($number > 0){
        $count++;
    }
}

echo "$count valores positivos\n";