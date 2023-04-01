<?php
// beecrowd | 1036
// Bhaskara's Formula
// Adapted by Neilor Tonin, URI  Brazil

// Timelimit: 1
// Read 3 floating-point numbers. After, print the roots of bhaskara’s formula. If it's impossible to calculate the roots because a division by zero or a square root of a negative number, presents the message “Impossivel calcular”.

// Input
// Read 3 floating-point numbers (double) A, B and C.

// Output
// Print the result with 5 digits after the decimal point or the message if it is impossible to calculate.

fscanf(STDIN, "%f %f %f", $a, $b, $c);

$delta = pow($b, 2) - (4 * $a * $c);

if ($a == 0 || $delta < 0) {
    echo "Impossivel calcular\n";
} else {
    $bhaskara1 = (-$b + sqrt($delta)) / (2 * $a);
    $bhaskara2 = (-$b - sqrt($delta)) / (2 * $a);

    $bhaskara1 = number_format($bhaskara1, 5, '.', '');
    $bhaskara2 = number_format($bhaskara2, 5, '.', '');

    echo "R1 = $bhaskara1\n";
    echo "R2 = $bhaskara2\n";
}

// I want use try catch with exception DivisionByZeroError, but beecrowd dont support :(

// try{
//     $delta = pow($b, 2)-(4*$a*$c);
//     $bhaskara1 = (-$b+sqrt($delta))/(2*$a);
//     $bhaskara2 = (-$b-sqrt($delta))/(2*$a);

//     $bhaskara1 = number_format($bhaskara1, 5, '.', '');
//     $bhaskara2 = number_format($bhaskara2, 5, '.', '');

//     echo "R1 = $bhaskara1\n";
//     echo "R2 = $bhaskara2\n";

// }catch(DivisionByZeroError){
//     echo "Impossivel calcular\n";
// }

?>