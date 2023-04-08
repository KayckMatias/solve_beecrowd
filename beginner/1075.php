<?php
// beecrowd | 1075
// Remaining 2
// Adapted by Neilor Tonin, URI  Brazil

// Timelimit: 1
// Read an integer N. Print all numbers between 1 and 10000, which divided by N will give the rest = 2.

// Input
// The input is an integer N (N < 10000)

// Output
// Print all numbers between 1 and 10000, which divided by n will give the rest = 2, one per line.

$x = intval(fgets(STDIN));


for($i = 1; $i < 10000; $i++){
    if($i % $x == 2){
        echo "$i\n";
    }
}