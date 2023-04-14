<?php

// beecrowd | 1133
// Rest of a Division
// Adapted by Neilor Tonin, URI  Brazil

// Timelimit: 1
// Write a program that reads two integer numbers X and Y. Print all numbers between X and Y which dividing it by 5 the rest is equal to 2 or equal to 3.

// Input
// The input file contains 2 any positive integers, not necessarily in ascending order.

// Output
// Print all numbers according to above description, always in ascending order.

$x = intval(fgets(STDIN));
$y = intval(fgets(STDIN));

$min = min($x, $y);
$max = max($x, $y);

for ($i = ($min+1); $i < $max; $i++) {
    if (($i % 5 == 2) || ($i % 5 == 3)) {
        echo $i . "\n";
    }
}