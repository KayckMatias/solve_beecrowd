<?php
// beecrowd | 1021
// Banknotes and Coins
// By Neilor Tonin, URI  Brazil

// Timelimit: 1
// Read a value of floating point with two decimal places. This represents a monetary value. After this, calculate the smallest possible number of notes and coins on which the value can be decomposed. The considered notes are of 100, 50, 20, 10, 5, 2. The possible coins are of 1, 0.50, 0.25, 0.10, 0.05 and 0.01. Print the message “NOTAS:” followed by the list of notes and the message “MOEDAS:” followed by the list of coins.

// Input
// The input file contains a value of floating point N (0 ≤ N ≤ 1000000.00).

// Output
// Print the minimum quantity of banknotes and coins necessary to change the initial value, as the given example.

$x = fgets(STDIN);

$notas = ['100.00', '50.00', '20.00', '10.00', '5.00', '2.00'];

$moedas = ['1.00', '0.50', '0.25', '0.10', '0.05', '0.01'];

echo "NOTAS:\n";
foreach ($notas as $key => $nota){
    $current_note = intval($x/$nota);
    echo "$current_note nota(s) de R$ $nota\n";

    $x -= ($current_note*$nota);
}

$x = round($x, 2);

echo "MOEDAS:\n";
foreach ($moedas as $key => $moeda){
    $current_moeda = intval($x/$moeda);
    echo "$current_moeda moeda(s) de R$ $moeda\n";
    
    $x -= ($current_moeda*$moeda);
    $x = round($x, 2);
}
?>