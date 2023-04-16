<?php
// beecrowd | 1144
// Logical Sequence
// Adapted by Neilor Tonin, URI  Brazil

// Timelimit: 1
// Write a program that reads an integer N. N * 2 lines must be printed by this program according to the example below. For numbers with more than 6 digits, all digits must be printed (no cientific notation allowed).

// Input
// The input file contains an integer N (1 < N < 1000).

// Output
// Print the output according to the given example.

$input = intval(fgets(STDIN));

for($x = 1; $x <= $input; $x++){

    echo $x . " ";
    for($j = 2; $j <= 3; $j++){
        echo ($j != 3)  ? pow($x, $j) . " " : pow($x, $j);
    }
    echo "\n";

    echo $x . " ";
    for($j = 2; $j <= 3; $j++){
        echo ($j != 3)  ? (pow($x, $j)+1) . " " : (pow($x, $j)+1);
    } 
    echo "\n";
}
