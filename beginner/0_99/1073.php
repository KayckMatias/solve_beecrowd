<?php
// beecrowd | 1073
// Even Square
// Adapted by Neilor Tonin, URI  Brazil

// Timelimit: 1
// Read an integer N. Print the square of each one of the even values from 1 to N including N if it is the case.

// Input
// The input contains an integer N (5 < N < 2000).

// Output
// Print the square of each one of the even values from 1 to N, as the given example.

// Be carefull! Some language automaticly print 1e+006 instead 1000000. Please configure your program to print the correct format setting the output precision.

$x = intval(fgets(STDIN));

for($i = 1; $i <= $x; $i++){
    if($i % 2 == 0){
        $power = pow($i, 2);
        echo "$i^2 = $power\n";
    }
}