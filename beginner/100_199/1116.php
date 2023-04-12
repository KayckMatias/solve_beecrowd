<?php
// beecrowd | 1116
// Dividing X by Y
// Adapted by Neilor Tonin, URI  Brazil

// Timelimit: 2
// Write a program that read two numbers X and Y and print the result of dividing the X by Y. If it's not possible, print the message "divisao impossivel".

// Input
// The input contains an integer number N. This N is the quantity of pairs of integer numbers X and Y read (dividend and divisor).

// Output
// For each test case print the result of this division with one digit after the decimal point, or “divisao impossivel” if it isn't possible to perform the calculation.

// Obs.: Be carefull. The division between two integers in some languages generates another integer. Use cast:)

$qntd_test = intval(fgets(STDIN));

$numbers = [];
for ($i = 0; $i < $qntd_test; $i++) {
  $exploded = explode(' ', trim(fgets(STDIN)));
  $x = $exploded[0];
  $y = $exploded[1];
  $numbers[$i] = [
    'x' => $x,
    'y' => $y,
  ];
}

foreach($numbers as $number){
    if($number['y'] == 0){
        echo "divisao impossivel\n";
    }else{
        $result = ($number['x']/$number['y']);
        echo sprintf('%.1f', $result)."\n";
    }
}