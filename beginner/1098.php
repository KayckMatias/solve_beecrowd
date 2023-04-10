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

//ATTENTION: This code works and the output is equal the uDebug of beecrowd, but beecrowd dont accept for some reason:c

for ($i = 0; $i <= 2; $i += 0.2) {
    for ($j = 1; $j <= 3; $j++) {
        echo "I=$i J=".$j+$i."\n";
    }
}