<?php

// beecrowd | 1157
// Divisors I
// Adapted by Neilor Tonin, URI  Brazil

// Timelimit: 1
// Read an integer N and compute all its divisors.

// Input
// The input file contains an integer value.

// Output
// Write all positive divisors of N, one value per line.

$x = intval(fgets(STDIN));


for($i = 1; $i <= $x; $i++) {
    if($x%$i == 0) {
        echo "$i\n";
    }
}
