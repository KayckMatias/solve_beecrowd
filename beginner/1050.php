<?php
// beecrowd | 1050
// DDD
// Adapted by Neilor Tonin, URI  Brazil

// Timelimit: 1
// Read an integer number that is the code number for phone dialing. Then, print the destination according to the following table:

// If the input number isn’t found in the above table, the output must be:
// DDD nao cadastrado
// That means “DDD not found” in Portuguese language.

// Input
// The input consists in a unique integer number.

// Output
// Print the city name corresponding to the input DDD. Print DDD nao cadastrado if doesn't exist corresponding DDD to the typed number.

$x = trim(fgets(STDIN));

$ddd = [
    61 => 'Brasilia',
    71 => 'Salvador',
    11 => 'Sao Paulo',
    21 => 'Rio de Janeiro',
    32 => 'Juiz de Fora',
    19 => 'Campinas',
    27 => 'Vitoria',
    31 => 'Belo Horizonte',
];

$return = $ddd[$x] ?? "DDD nao cadastrado";

echo $return."\n";
