<?php
// beecrowd | 1159
// Sum of Consecutive Even Numbers
// Adapted by Neilor Tonin, URI  Brazil

// Timelimit: 1
// The program must read an integer X indefinite times (stop when X=0). For each X, print the sum of five consecutive even numbers from X, including it if X is even. If the input number is 4, for example, the output must be 40, that is the result of the operation: 4+6+8+10+12. If the input number is 11, for example, the output must be 80, that is the result of 12+14+16+18+20.

// Input
// The input file contains many integer numbers. The last one is zero.

// Output
// Print the output according to the example below.


while(true) {
    $x = intval(fgets(STDIN));

    if($x == 0){
        break;
    }

    $sum = 0;

    for($i = 1; $i <= 5; $i++) {
        if($x % 2 == 0) {
            $sum += $x;
        } else {
            $i--;
        }

        $x++;
    }

    echo "$sum\n";
}
