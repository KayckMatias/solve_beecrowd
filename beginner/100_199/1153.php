<?php
// beecrowd | 1153
// Simple Factorial
// Adapted by Neilor Tonin, URI  Brazil

// Timelimit: 1
// Read a value N. Calculate and write its corresponding factorial. Factorial of N = N * (N-1) * (N-2) * (N-3) * ... * 1.

// Input
// The input contains an integer value N (0 < N < 13).

// Output
// The output contains an integer value corresponding to the factorial of N.

$n = intval(fgets(STDIN));
$factorial = 1;

for ($i = 1; $i <= $n; $i++) {
    $factorial *= $i;
}

echo $factorial . "\n";

?>