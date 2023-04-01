<?php
// beecrowd | 1006
// Average 2
// Adapted by Neilor Tonin, URI  Brazil

// Timelimit: 1
// Read three values (variables A, B and C), which are the three student's grades. Then, calculate the average, considering that grade A has weight 2, grade B has weight 3 and the grade C has weight 5. Consider that each grade can go from 0 to 10.0, always with one decimal place.

// Input
// The input file contains 3 values of floating points (double) with one digit after the decimal point.

// Output
// Print the message "MEDIA"(average in Portuguese) and the student's average according to the following example, with a blank space before and after the equal signal.

$x = fgets(STDIN);
$y = fgets(STDIN);
$z = fgets(STDIN);

$weight_x = $x*2;
$weight_y = $y*3;
$weight_z = $z*5;

$avg = ($weight_x+$weight_y+$weight_z)/10;
$avg = number_format($avg, 1, '.', '');

echo "MEDIA = $avg\n";

?>