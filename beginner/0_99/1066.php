<?php
// beecrowd | 1066
// Even, Odd, Positive and Negative
// Adapted by Neilor Tonin, URI  Brazil

// Timelimit: 1
// Make a program that reads five integer values. Count how many   of these values are even, odd, positive and negative. Print these information like following example.

// Input
// The input will be 5 integer values.

// Output
// Print a message like the following example with all letters in lowercase, indicating how many of these values ​​are even, odd, positive and negative.

$numbers = [];
for ($i = 0; $i < 5; $i++) {
  $numbers[] = intval(fgets(STDIN));
}

$count = [
    'par' => ['count' => 0, 'name' => 'par(es)'],
    'impar' => ['count' => 0, 'name' => 'impar(es)'],
    'positivo' => ['count' => 0, 'name' => 'positivo(s)'],
    'negativo' => ['count' => 0, 'name' => 'negativo(s)'],
];

foreach($numbers as $number){
    $count[($number % 2 == 0) ? 'par' : 'impar']['count']++;
    $count[($number > 0) ? 'positivo' : 'negativo']['count'] += ($number != 0 ) ? 1 : 0;
}

foreach($count as $type){
    echo $type['count']." valor(es) " . $type['name'] . "\n";
}
