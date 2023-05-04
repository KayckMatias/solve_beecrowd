<?php
// beecrowd | 1164
// Perfect Number
// Adapted by Neilor Tonin, URI  Brazil

// Timelimit: 1
// In mathematics, a perfect number is an integer for which the sum of all its own positive divisors (excluding itself) is equal to the number itself. For example the number 6 is perfect, because 1+2+3 is equal to 6. Your task is to write a program that read integer numbers and print a message informing if these numbers are perfect or are not perfect.

// Input
// The input contains several test cases. The first contains the number of test cases N (1 ≤ N ≤ 100). Each one of the following N lines contains an integer X (1 ≤ X ≤ 108), that can be or not a perfect number.

// Output
// For each test case print the message “X eh perfeito” (X is perfect) or “X nao eh perfeito” (X isn't perfect) according with to above specification.

function isPerfect($num) {
    $sum = 0;
    for ($i = 1; $i < $num; $i++) {
        if ($num % $i == 0) {
            $sum += $i;
        }
    }
    return $sum == $num;
}

$x = intval(fgets(STDIN));

for ($i = 0; $i < $x; $i++) {
    $a = intval(fgets(STDIN));

    echo isPerfect($a) ? "$a eh perfeito\n" : "$a nao eh perfeito\n";
}
