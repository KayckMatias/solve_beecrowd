<?php
// beecrowd | 1154
// Ages
// Adapted by Neilor Tonin, URI  Brazil

// Timelimit: 1
// Write an algorithm to read an undeterminated number of data, each containing an individual's age. The final data, which will not enter in the calculations, contains the value of a negative age. Calculate and print the average age of this group of individuals.

// Input
// The input contains an undetermined number of integers. The input will be stop when a negative value is read.

// Output
// The output contains a value corresponding to the average age of individuals.

// The average should be printed with two digits after the decimal point.

$numbers = [];

while(true){
    $x = intval(fgets(STDIN));

    if($x < 0){
        break;
    }

    $numbers[] = $x;
}

$avg = (array_sum($numbers)/count($numbers));
$avg = sprintf('%.2f', $avg);

echo "$avg\n";

?>