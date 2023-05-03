<?php
// beecrowd | 1155
// S Sequence
// Adapted by Neilor Tonin, URI  Brazil

// Timelimit: 1
// Write an algorithm to calculate and write the value of S, S being given by:
// S = 1 + 1/2 + 1/3 + … + 1/100

// Input
// There is no input in this problem.

// Output
// The output contains a value corresponding to the value of S.
// The value should be printed with two digits after the decimal point.

$sum = 1;

for($x = 2; $x <= 100; $x++){
    $sum += (1/$x); 
}

$sum = sprintf('%.2f', $sum);

echo "$sum\n";

?>