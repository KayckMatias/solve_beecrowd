<?php
// beecrowd | 1064
// Positives and Average
// Adapted by Neilor Tonin, URI  Brazil

// Timelimit: 1
// Read 6 values that can be floating point numbers. After, print how many of them were positive. In the next line, print the average of all positive values typed, with one digit after the decimal point.

// Input
// The input consist in 6 numbers that can be integer or floating point values. At least one number will be positive.

// Output
// The first output value is the amount of positive numbers. The next line should show the average of the positive values ​typed.

$a = trim(fgets(STDIN));
$b = trim(fgets(STDIN));
$c = trim(fgets(STDIN));
$d = trim(fgets(STDIN));
$e = trim(fgets(STDIN));
$f = trim(fgets(STDIN));

$numbers = [$a,$b,$c,$d,$e,$f];

[$count, $sum] = 0;

foreach($numbers as $number){
    if($number > 0){
        $count++;
        $sum += $number;
    }
}

$avg = sprintf('%.1f', $sum/$count);

echo "$count valores positivos\n";
echo "$avg\n";
