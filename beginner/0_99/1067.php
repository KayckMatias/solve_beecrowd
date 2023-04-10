<?php
// beecrowd | 1067
// Odd Numbers
// Adapted by Neilor Tonin, URI  Brazil

// Timelimit: 1
// Read an integer value X (1 <= X <= 1000).  Then print the odd numbers from 1 to X, each one in a line, including X if is the case.

// Input
// The input will be an integer value.

// Output
// Print all odd values between 1 and X, including X if is the case.

$x = trim(fgets(STDIN));

for($i = 1; $i <= $x; $i++){
    if($i % 2 != 0){
        echo "$i\n";
    }
}

