<?php

// beecrowd | 1158
// Sum of Consecutive Odd Numbers III
// Adapted by Neilor Tonin, URI  Brazil

// Timelimit: 1
// Read an integer N that is the number of test cases that follows. Each test case contains two integers X and Y. Print one output line for each test case that is the sum of Y odd numbers from X including it if is the case. For example:
// for the input 4 5, the output must be 45, that is: 5 + 7 + 9 + 11 + 13
// for the input 7 4, the output must be 40, that is: 7 + 9 + 11 + 13

// Input
// The first line of the input is an integer N that is the number of test cases that follow. Each test case is a line containing two integer X and Y.

// Output
// Print the sum of all consecutive odd numbers from X.

$x = intval(fgets(STDIN));

while($x > 0) {
    $sum = 0;

    fscanf(STDIN, "%d %d", $a, $b);

    for($i = 1; $i <= $b; $i++) {
        if($a % 2 != 0) {
            $sum += $a;
        } else {
            $i--;
        }

        $a++;
    }

    echo "$sum\n";

    $x--;
}
