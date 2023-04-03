<?php
// beecrowd | 1041
// Coordinates of a Point
// Adapted by Neilor Tonin, URI  Brazil

// Timelimit: 1
// Write an algorithm that reads two floating values (x and y), which should represent the coordinates of a point in a plane. Next, determine which quadrant the point belongs, or if you are at one of the Cartesian axes or the origin (x = y = 0).

// If the point is at the origin, write the message "Origem".

// If the point is at X axis write "Eixo X", else if the point is at Y axis write "Eixo Y".

// Input
// The input contains the coordinates of a point.

// Output
// The output should display the quadrant in which the point is.

fscanf(STDIN, "%f %f", $x, $y);

if ($x == 0 && $y == 0) {
    echo "Origem\n";
} elseif ($x == 0) {
    echo "Eixo Y\n";
} elseif ($y == 0) {
    echo "Eixo X\n";
} else {
   $quadrante = (checkSign($x) == 1) ? (checkSign($y) == 1 ? "Q1" : "Q4") : (checkSign($y) == 1 ? "Q2" : "Q3");
   echo $quadrante . "\n";
}

function checkSign($x){
    return ($x > 0) ? 1 : -1;
}

?>