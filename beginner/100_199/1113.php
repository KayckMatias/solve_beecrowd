<?php
// beecrowd | 1113
// Ascending and Descending
// Adapted by Neilor Tonin, URI  Brazil

// Timelimit: 1
// Read an undetermined number of pairs of integer values. Write a message for each pair indicating if this two numbers are in ascending or descending order.

// Input
// The input file contains several test cases. Each test case contains two integer numbers X and Y. The input will finished when X = Y.

// Output
// For each test case print “Crescente”, if the values X and Y are in ascending order, otherwise print “Decrescente”.

while(true) {
    $exploded = explode(' ', trim(fgets(STDIN)));
    $x = $exploded[0];
    $y = $exploded[1];

    if($x == $y) {
        break;
    }

    $numbers[] = [
      'x' => $x,
      'y' => $y,
    ];
}

foreach($numbers as $xy) {
    echo ($xy['x'] > $xy['y']) ? "Decrescente\n" : "Crescente\n";
}