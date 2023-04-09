<?php
// beecrowd | 1097
// Sequence IJ 3
// Adapted by Neilor Tonin, URI  Brazil

// Timelimit: 1
// Make a program that prints the sequence like the following exemple.

// Input
// This problem doesn't have input.

// Output
// Print the sequence like the example below.

$j_new = 7;
$j_old = 5;
for ($i = 1; $i <= 9; $i++) {
    if ($i % 2 != 0) {
        for ($j = $j_new; $j >= $j_old; $j--) {
            echo "I=$i J=$j\n";
        }
        $j_new += 2;
        $j_old += 2;
    }
}
