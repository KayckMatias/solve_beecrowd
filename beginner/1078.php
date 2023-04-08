<?php
// beecrowd | 1078
// Multiplication Table
// Adapted by Neilor Tonin, URI  Brazil

// Timelimit: 1
// Read an integer N (2 < N < 1000). Print the multiplication table of N.
// 1 x N = N      2 x N = 2N        ...       10 x N = 10N  

// Input
// The input is an integer N (1 < N < 1000).

// Output
// Print the multiplication table of N., like the following example.

$x = intval(fgets(STDIN));

for($i = 1; $i <= 10; $i++){
    $multi = $i*$x;
    echo "$i x $x = $multi\n"; 
}