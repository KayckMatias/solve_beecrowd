<?php
// beecrowd | 1037
// Interval
// Adapted by Neilor Tonin, URI  Brazil

// Timelimit: 1
// You must make a program that read a float-point number and print a message saying in which of following intervals the number belongs: [0,25] (25,50], (50,75], (75,100]. If the read number is less than zero or greather than 100, the program must print the message “Fora de intervalo” that means "Out of Interval".

// The symbol '(' represents greather than. For example:
// [0,25] indicates numbers between 0 and 25.0000, including both.
// (25,50] indicates numbers greather than 25 (25.00001) up to 50.0000000.

// Input
// The input file contains a floating-point number.

// Output
// The output must be a message like following example.

$x = floatval(fgets(STDIN));

$between = [
    25 => "Intervalo [0,25]",
    50 => "Intervalo (25,50]",
    75 => "Intervalo (50,75]",
    100 => "Intervalo (75,100]"
];

foreach($between as $key => $interval){
    if ($x <= $key) {
        $result = $interval;
        break;
    }
}

$result = ($x < 0 || $x > 100) ? "Fora de intervalo" : $result;

echo $result . "\n";

?>