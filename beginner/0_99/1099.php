<?php
// beecrowd | 1099
// Sum of Consecutive Odd Numbers II
// Adapted by Neilor Tonin, URI  Brazil

// Timelimit: 1
// Read an integer N that is the number of test cases. Each test case is a line containing two integer numbers X and Y. Print the sum of all odd values between them, not including X and Y.

// Input
// The first line of input is an integer N that is the number of test cases that follow. Each test case is a line containing two integer X and Y.

// Output
// Print the sum of all odd numbers between X and Y.

$qntd_test = intval(fgets(STDIN));

$numbers = [];
for ($i = 0; $i < $qntd_test; $i++) {
  $exploded = explode(' ', trim(fgets(STDIN)));
  $x = min($exploded);
  $y = max($exploded);
  $numbers[$i] = [
    'x' => $x,
    'y' => $y,
  ];
}

foreach($numbers as $xy){
    $result = 0;
    for ($i = $xy['x']+1; $i < $xy['y']; $i++) {
        if ($i % 2 != 0) {
            $result += $i;
        }
    }
    echo "$result\n";
}