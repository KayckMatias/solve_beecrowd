<?php

// beecrowd | 1070
// Six Odd Numbers
// Adapted by Neilor Tonin, URI  Brazil

// Timelimit: 1
// Read an integer value X and print the 6 consecutive odd numbers from X, a value per line, including X if it is the case.

// Input
// The input will be a positive integer value.

// Output
// The output will be a sequence of six odd numbers.

$x = intval(fgets(STDIN));

if ($x % 2 == 0) {
    $x++;
}

for ($i = 0; $i < 6; $i++) {
    echo "$x\n";
    $x += 2;
}
