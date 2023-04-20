<?php
// beecrowd | 1151
// Easy Fibonacci
// Adapted by Neilor Tonin, URI  Brazil

// Timelimit: 1
// The following sequence of numbers 0 1 1 2 3 5 8 13 21 ... is known as the Fibonacci Sequence. Thereafter, each number after the first 2 is equal to the sum of the previous two numbers. Write an algorithm that reads an integer N (N < 46) and that print the first N numbers of this sequence.

// Input
// The input file contains an integer number N (0 < N < 46).

// Output
// The numbers ​​should be printed on the same line, separated by a blank space. There is no space after the last number.

$n = intval(fgets(STDIN));

$previous = 0;
$current = 1;

for ($i = 0; $i < $n; $i++) {
    echo $previous;
    if ($i == $n - 1) {
        echo "\n";
    } else {
        echo " ";
    }
    $next = $previous + $current;
    $previous = $current;
    $current = $next;
}

?>