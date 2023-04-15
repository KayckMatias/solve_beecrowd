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

for($x = 1; $x <= $input; $x++){

    for($j = 1; $j <= 3; $j++){
        echo ($j != 3)  ? pow($x, $j) . " " : pow($x, $j);
    } 
    echo "\n";
}
