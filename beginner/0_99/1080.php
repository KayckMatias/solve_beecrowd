<?php
// beecrowd | 1080
// Highest and Position
// Adapted by Neilor Tonin, URI  Brazil

// Timelimit: 1
// Read 100 integer numbers. Print the highest read value and the input position.

// Input
// The input file contains 100 distinct positive integer numbers.

// Output
// Print the highest number read and the input position of this value, according to the given example.

$numbers = [];
for ($i = 1; $i <= 100; $i++) {
  $numbers[] = intval(fgets(STDIN));
}

$highest = max($numbers);
$position = array_search($highest, $numbers)+1;

echo $highest."\n";
echo $position."\n";