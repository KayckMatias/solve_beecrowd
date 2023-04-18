<?php
// beecrowd | 1149
// Summing Consecutive Integers
// Adapted by Neilor Tonin, URI  Brazil

// Timelimit: 1
// Write an algorithm to read a value A and a value N. Print the sum of N numbers from A (inclusive). While N is negative or ZERO, a new N (only N) must be read. All input values are in the same line.

// Input
// The input contains only integer values, ​​can be positive or negative.

// Output
// The output contains only an integer value.

$input = explode(' ', trim(fgets(STDIN)));

$a = $input[0];
$n = 0;

foreach($input as $key => $value){
    if($key == 0){
        continue;
    }

    if($value > 0){
        $n = $value;
        break;
    }
}


$sum = 0;

for($x = 0; $x < $n; $x++){
    $sum += $a;
    $a++;
}

echo "$sum\n";

?>