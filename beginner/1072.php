<?php
// beecrowd | 1072
// Interval 2
// Adapted by Neilor Tonin, URI  Brazil

// Timelimit: 1
// Read an integer N. This N will be the number of integer numbers X that will be read.

// Print how many these numbers X are in the interval [10,20] and how many values are out of this interval.
 

// Input
// The first line of input is an integer N (N < 10000), that indicates the total number of test cases.
// Each case is an integer number X (-107 < X < 107).

 

// Output
// For each test case, print how many numbers are in and how many values are out of the interval.

$qntd_test = intval(fgets(STDIN));

$numbers = [];
for ($i = 0; $i < $qntd_test; $i++) {
  $numbers[] = intval(fgets(STDIN));
}

[$in, $out] = 0;

foreach($numbers as $number){
    if($number >= 10 && $number <= 20){
        $in++;
    }else{
        $out++;
    }
}

echo "$in in\n";
echo "$out out\n";