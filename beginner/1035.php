<?php
// beecrowd | 1035
// Selection Test 1
// Adapted by Neilor Tonin, URI  Brazil

// Timelimit: 1
// Read 4 integer values A, B, C and D. Then if B is greater than C and D is greater than A and if the sum of C and D is greater than the sum of A and B and if C and D were positives values and if A is even, write the message “Valores aceitos” (Accepted values). Otherwise, write the message “Valores nao aceitos” (Values not accepted).

// Input
// Four integer numbers A, B, C and D.

// Output
// Show the corresponding message after the validation of the values​​.

fscanf(STDIN, "%d %d %d %d", $a, $b, $c, $d);

$conditions = [
    0 => ($b > $c),
    1 => ($d > $a),
    2 => (($c+$d) > ($a+$b)),
    3 => ($c >= 0 && $d >= 0),
    4 => ($a % 2 == 0),
];

echo (in_array(false, $conditions, true)) ? "Valores nao aceitos\n" : "Valores aceitos\n";

?>