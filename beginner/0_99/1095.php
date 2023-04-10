<?php
// beecrowd | 1095
// Sequence IJ 1
// Adapted by Neilor Tonin, URI  Brazil

// Timelimit: 1
// Make a program that prints the sequence like the following example.

// Input
// This problem doesn't have input.

// Output
// Print the sequence like the example below.

$i = 1;
for ($j = 60; $j >= 0; $j-=5) {
    echo "I=$i J=$j\n";
    $i += 3;
}