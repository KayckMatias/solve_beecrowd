<?php
// beecrowd | 1096
// Sequence IJ 2
// Adapted by Neilor Tonin, URI  Brazil

// Timelimit: 1
// Make a program that prints the sequence like the following exemple.

// Input
// This problem doesn't have input.

// Output
// Print the sequence like the example below.

for ($i = 1; $i <= 9; $i++) {
    if ($i % 2 != 0) {
        for ($j = 7; $j >= 5; $j--) {
            echo "I=$i J=$j\n";
        }
    }
}
