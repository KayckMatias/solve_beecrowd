<?php
// beecrowd | 1071
// Sum of Consecutive Odd Numbers I
// Adapted by Neilor Tonin, URI  Brazil

// Timelimit: 1
// Read two integer values X and Y. Print the sum of all odd values between them.

// Input
// The input file contain two integer values.

// Output
// The program must print an integer number. This number is the sum off all odd values between both input values that must fit in an integer number.

$x = intval(fgets(STDIN));
$y = intval(fgets(STDIN));

$lower = min($x, $y);
$highest = max($x, $y);

$result = 0;

for ($i = $lower+1; $i < $highest; $i++) {
    if ($i % 2 != 0) {
        $result += $i;
    }
}

echo "$result\n";
