<?php
// beecrowd | 1134
// Type of Fuel
// Adapted by Neilor Tonin, URI  Brazil

// Timelimit: 1
// A gas station wants to determine which of their products is the preference of their customers. Write a program to read the type of fuel supplied (coded as follows: 1. Alcohol 2. Gasoline 3. Diesel 4. End). If you enter an invalid code (outside the range of 1 to 4) a new code must be requested. The program will end when the inserted code is the number 4.

// Input
// The input contains only integer and positive values.

// Output
// It should be written the message: "MUITO OBRIGADO" and the amount of customers who fueled each fuel type, as an example.

$types = [
    'Alcool' => ['digit' => 1, 'value' => 0],
    'Gasolina' => ['digit' => 2, 'value' => 0],
    'Diesel' => ['digit' => 3, 'value' => 0],
];

while (true) {
    $x = intval(fgets(STDIN));

    if ($x <= 3) {
        foreach ($types as $key => $item) {
            if ($x == $item['digit']) {
                $types[$key]['value']++;
            }
        }
    } elseif ($x == 4) {
        break;
    }
}

echo "MUITO OBRIGADO\n";

foreach ($types as $key => $item) {
    echo $key . ": " . $item['value'] . "\n";
}
