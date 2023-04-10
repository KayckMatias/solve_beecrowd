<?php

// beecrowd | 1101
// Sequence of Numbers and Sum
// Adapted by Neilor Tonin, URI  Brazil

// Timelimit: 1
// Read an undetermined number of pairs values M and N (stop when any of these values is less or equal to zero). For each pair, print the sequence from the smallest to the biggest (including both) and the sum of consecutive integers between them (including both).

// Input
// The input file contains pairs of integer values M and N. The last line of the file contains a number zero or negative, or both.

// Output
// For each pair of numbers, print the sequence from the smallest to the biggest and the sum of these values, as shown below.

while(true) {
    $exploded = explode(' ', trim(fgets(STDIN)));
    $x = min($exploded);
    $y = max($exploded);

    if($x <= 0 || $y <= 0) {
        break;
    }

    $numbers[] = [
      'x' => $x,
      'y' => $y,
    ];
}

foreach($numbers as $xy) {
    $result = [];
    $message = '';
    for ($i = $xy['x']; $i <= $xy['y']; $i++) {
        $result[] = $i;
        $message .= "$i ";
    }

    $message .= "Sum=".array_sum($result);
    echo "$message\n";
}
