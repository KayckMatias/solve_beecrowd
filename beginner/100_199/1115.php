<?php
// beecrowd | 1115
// Quadrant
// Adapted by Neilor Tonin, URI  Brazil

// Timelimit: 1
// Write a program to read the coordinates (X, Y) of an indeterminate number of points in Cartesian system. For each point write the quadrant to which it belongs. The program finish when at least one of two coordinates is NULL (in this situation without writing any message).

// Input
// The input contains several tests cases. Each test case contains two integer numbers.

// Output
// For each test case, print the corresponding quadrant which these coordinates belong, as in the example.

while(true) {
    fscanf(STDIN, "%f %f", $x, $y);

    if($x == 0 || $y == 0) {
        break;
    }

   $quadrante = (checkSign($x) == 1) ? (checkSign($y) == 1 ? "primeiro" : "quarto") : (checkSign($y) == 1 ? "segundo" : "terceiro");
   echo $quadrante . "\n";
}

function checkSign($x){
    return ($x > 0) ? 1 : -1;
}