<?php
// beecrowd | 1018
// Banknotes
// Adapted by Neilor Tonin, URI  Brazil

// Timelimit: 1
// In this problem you have to read an integer value and calculate the smallest possible number of banknotes in which the value may be decomposed. The possible banknotes are 100, 50, 20, 10, 5, 2 e 1. Print the read value and the list of banknotes.

// Input
// The input file contains an integer value N (0 < N < 1000000).

// Output
// Print the read number and the minimum quantity of each necessary banknotes in Portuguese language, as the given example. Do not forget to print the end of line after each line, otherwise you will receive “Presentation Error”.

$x = intval(fgets(STDIN));

$notes = [100, 50, 20, 10, 5, 2, 1];

echo "$x\n";
foreach($notes as $note){
    $qntd_notes = intval($x/$note);
    echo "$qntd_notes nota(s) de R$ $note,00\n";
    $x -= $qntd_notes*$note;
}

?>