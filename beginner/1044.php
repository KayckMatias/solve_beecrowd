<?php
// beecrowd | 1044
// Multiples
// Adapted by Neilor Tonin, URI  Brazil

// Timelimit: 1
// Read two nteger values (A and B). After, the program should print the message "Sao Multiplos" (are multiples) or "Nao sao Multiplos" (aren’t multiples), corresponding to the read values.

// Input
// The input has two integer numbers.

// Output
// Print the relative message to the input as stated above.

fscanf(STDIN, "%d %d", $x, $y);

$is_multiple = (max($x,$y)%min($x,$y) == 0) ? "Sao Multiplos" : "Nao sao Multiplos";

echo "$is_multiple\n";

