<?php
// beecrowd | 1012
// Area
// Adapted by Neilor Tonin, URI  Brazil

// Timelimit: 1
// Make a program that reads three floating point values: A, B and C. Then, calculate and show:
// a) the area of the rectangled triangle that has base A and height C.
// b) the area of the radius's circle C. (pi = 3.14159)
// c) the area of the trapezium which has A and B by base, and C by height.
// d) the area of ​​the square that has side B.
// e) the area of the rectangle that has sides A and B.

// Input
// The input file contains three double values with one digit after the decimal point.

// Output
// The output file must contain 5 lines of data. Each line corresponds to one of the areas described above, always with a corresponding message (in Portuguese) and one space between the two points and the value. The value calculated must be presented with 3 digits after the decimal point.

fscanf(STDIN, "%f %f %f", $x, $y, $z);

function formatNumberDefault($x){
    return number_format($x, 3, '.', '');
}

$pi = 3.14159;

$triangulo = ($x*$z)/2;
$circulo = $pi*pow($z, 2);
$trapezio = (0.5*$z)*($x+$y);
$quadrado = pow($y, 2);
$retangulo = $x*$y;

echo "TRIANGULO: " . formatNumberDefault($triangulo) . "\n";
echo "CIRCULO: " . formatNumberDefault($circulo) . "\n";
echo "TRAPEZIO: " . formatNumberDefault($trapezio) . "\n";
echo "QUADRADO: " . formatNumberDefault($quadrado) . "\n";
echo "RETANGULO: " . formatNumberDefault($retangulo) . "\n";
?>