<?php
// beecrowd | 1042
// Simple Sort
// Adapted by Neilor Tonin, URI  Brazil

// Timelimit: 1
// Read three integers and sort them in ascending order. After, print these values in ascending order, a blank line and then the values in the sequence as they were readed.

// Input
// The input contains three integer numbers.

// Output
// Present the output as requested above.

$x = explode(' ', trim(fgets(STDIN)));
$x_asc = $x;
asort($x_asc);

foreach($x_asc as $y){
    echo "$y\n";
}

echo "\n";

foreach($x as $y){
    echo "$y\n";
}

?>