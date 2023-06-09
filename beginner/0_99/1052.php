<?php
// beecrowd | 1052
// Month
// Adapted by Neilor Tonin, URI  Brazil

// Timelimit: 1
// Read an integer number between 1 and 12, including. Corresponding to this number, you must print the month of the year, in english, with the first letter in uppercase.

// Input
// The input contains only an integer number.

// Output
// Print the name of the month according to the input number, with the first letter in uppercase.

$x = intval(fgets(STDIN));

$date   = DateTime::createFromFormat('!m', $x);
$monthName = $date->format('F');

echo "$monthName\n";
