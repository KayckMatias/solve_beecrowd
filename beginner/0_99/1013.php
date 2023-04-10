<?php
// beecrowd | 1013
// The Greatest
// Adapted by Neilor Tonin, URI  Brazil

// Timelimit: 1
// Make a program that reads 3 integer values and present the greatest one followed by the message "eh o maior". Use the following formula:



// Input
// The input file contains 3 integer values.

// Output
// Print the greatest of these three values followed by a space and the message “eh o maior”.

$values = explode(' ', trim(fgets(STDIN)));

$greatest = max($values);

echo "$greatest eh o maior\n";
?>