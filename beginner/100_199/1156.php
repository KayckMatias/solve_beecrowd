<?php
// beecrowd | 1156
// S Sequence II
// Adapted by Neilor Tonin, URI  Brazil

// Timelimit: 1
// Write an algorithm to calculate and write the value of S, S being given by:
// S = 1 + 3/2 + 5/4 + 7/8 + ... + 39/?

// Input
// There is no input in this problem.

// Output
// The output contains a value corresponding to the value of S.
// The value should be printed with two digits after the decimal point.

$sum = 1;

$x = 3;
$y = 2;

while($x <= 39){
    $sum += ($x/$y);
    $x += 2;
    $y *= 2;
}

$sum = sprintf('%.2f', $sum);

echo "$sum\n";

?>