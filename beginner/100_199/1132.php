<?php
// beecrowd | 1132
// Multiples of 13
// Adapted by Neilor Tonin, URI  Brazil

// Timelimit: 1
// Write a program that reads two integer numbers X and Y and calculate the sum of all number not divisible by 13 between them, including both.

// Input
// The input file contains 2 integer numbers X and Y without any order.

// Output
// Print the sum of all numbers between X and Y not divisible by 13, including them if it is the case.

$x = intval(fgets(STDIN));
$y = intval(fgets(STDIN));

$min = min($x, $y);
$max = max($x, $y);

$sum = 0;

for ($i = $min; $i <= $max; $i++) {
  if ($i % 13 != 0) {
    $sum += $i;
  }
}

echo $sum . "\n";