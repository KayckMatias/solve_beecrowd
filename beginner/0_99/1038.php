<?php
// beecrowd | 1038
// Snack
// Adapted by Neilor Tonin, URI  Brazil

// Timelimit: 1
// Using the following table, write a program that reads a code and the amount of an item. After, print the value to pay. This is a very simple program with the only intention of practice of selection commands.



// Input
// The input file contains two integer numbers X and Y. X is the product code and Y is the quantity of this item according to the above table.

// Output
// The output must be a message "Total: R$ " followed by the total value to be paid, with 2 digits after the decimal point.

fscanf(STDIN, "%d %d", $x, $y);

$list = [
    1 => ['specification' => 'Cachorro Quente', 'price' => 4.00],
    2 => ['specification' => 'X-Salada', 'price' => 4.50],
    3 => ['specification' => 'X-Bacon', 'price' => 5.00],
    4 => ['specification' => 'Torrada simples', 'price' => 2.00],
    5 => ['specification' => 'Refrigerante', 'price' => 1.50],
];

$total_price = $list[$x]['price']*$y;

$total_price = number_format($total_price, 2,  '.', '');

echo "Total: R$ $total_price\n";


?>