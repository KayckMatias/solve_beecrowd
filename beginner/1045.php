<?php
// beecrowd | 1045
// Triangle Types
// Adapted by Neilor Tonin, URI  Brazil

// Timelimit: 1
// Read 3 double numbers (A, B and C) representing the sides of a triangle and arrange them in decreasing order, so that the side A is the biggest of the three sides. Next, determine the type of triangle that they can make, based on the following cases always writing an appropriate message:
// if A ≥ B + C, write the message: NAO FORMA TRIANGULO
// if A2 = B2 + C2, write the message: TRIANGULO RETANGULO
// if A2 > B2 + C2, write the message: TRIANGULO OBTUSANGULO
// if A2 < B2 + C2, write the message: TRIANGULO ACUTANGULO
// if the three sides are the same size, write the message: TRIANGULO EQUILATERO
// if only two sides are the same and the third one is different, write the message: TRIANGULO ISOSCELES
// Input
// The input contains three double numbers, A (0 < A) , B (0 < B) and C (0 < C).

// Output
// Print all the classifications of the triangle presented in the input.

$numbers = explode(' ', trim(fgets(STDIN)));
rsort($numbers);

[$a, $b, $c] = $numbers;

$types = [
    0 => ['name' => 'TRIANGULO RETANGULO', 'verify' => (pow($a, 2) == ((pow($b, 2) + pow($c, 2))))],
    1 => ['name' => 'TRIANGULO OBTUSANGULO', 'verify' => (pow($a, 2) > (pow($b, 2) + pow($c, 2)))],
    2 => ['name' => 'TRIANGULO ACUTANGULO', 'verify' => (pow($a, 2) < (pow($b, 2) + pow($c, 2)))],
    3 => ['name' => 'TRIANGULO EQUILATERO', 'verify' => ($a == $b && $a == $c)],
    4 => ['name' => 'TRIANGULO ISOSCELES', 'verify' => (($a == $b && $a != $c) || ($a == $c && $a != $b) || ($b == $c && $b != $a))],
];

if($a >= ($b+$c)) {
    echo "NAO FORMA TRIANGULO\n";
} else {
    foreach($types as $type) {
        if($type['verify'] == true){
            echo $type['name']."\n";
        }
    }
}
