<?php
// beecrowd | 1043
// Triangle
// Adapted by Neilor Tonin, URI  Brazil

// Timelimit: 1
// Read three point floating values (A, B and C) and verify if is possible to make a triangle with them. If it is possible, calculate the perimeter of the triangle and print the message:

// Perimetro = XX.X

// If it is not possible, calculate the area of the trapezium which basis A and B and C as height, and print the message:

// Area = XX.X

// Input
// The input file has tree floating point numbers.

// Output
// Print the result with one digit after the decimal point.

fscanf(STDIN, "%f %f %f", $a, $b, $c);

if(($a < $b + $c) && ($b < $a + $c) && ($c < $a + $b)) {
    $perimetro = ($a+$b+$c);
    $perimetro = sprintf("%.1f", $perimetro);
    echo "Perimetro = " . $perimetro . "\n";
} else {
    $area = ((1/2)*($a+$b))*$c;
    $area = sprintf("%.1f", $area);
    echo "Area = " . $area . "\n";
}
