<?php
// beecrowd | 1142
// PUM
// Adapted by Neilor Tonin, URI  Brazil

// Timelimit: 1
// Write a program that reads an integer N. This N is the number of output lines printed by this program.

// Input
// The input file contains an integer N.

// Output
// Print the output according to the given example.

$input = intval(fgets(STDIN));

$current = 1;
for($x = 1; $x <= $input; $x++){

    for($j = 0; $j < 3; $j++){
        echo ($current + $j) . " ";
    } 
    $current += 4;
    echo "PUM\n";
}
