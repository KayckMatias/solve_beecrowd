<?php
// beecrowd | 1074
// Even or Odd
// Adapted by Neilor Tonin, URI  Brazil

// Timelimit: 1
// Read an integer value N. After, read these N values and print a message for each value saying if this value is odd, even, positive or negative. In case of zero (0), although the correct description would be "EVEN NULL", because by definition zero is even, your program must print only "NULL", without quotes.

// Input
// The first line of input is an integer N (N < 10000), that indicates the total number of test cases. Each case is a integer number X (-107 < X <107)..

// Output
// For each test case, print a corresponding message, according to the below example. All messages must be printed in uppercase letters and always will have one space between two words in the same line.

$qntd_test = intval(fgets(STDIN));

$numbers = [];
for ($i = 0; $i < $qntd_test; $i++) {
    $numbers[] = intval(fgets(STDIN));
}

foreach ($numbers as $number) {
    if ($number == 0) {
        echo "NULL\n";
    } elseif ($number % 2 == 0) {
        echo ($number > 0) ? "EVEN POSITIVE\n" : "EVEN NEGATIVE\n";
    } else {
        echo ($number > 0) ? "ODD POSITIVE\n" : "ODD NEGATIVE\n";
    }

    // full ternary version, but I think it's a bit readable...
    // if ($number == 0) {
    //     echo "NULL\n";
    // } else {
    //     echo ($number % 2 == 0) ? (($number > 0) ? "EVEN POSITIVE\n" : "EVEN NEGATIVE\n") : (($number > 0) ? "ODD POSITIVE\n" : "ODD NEGATIVE\n");
    // }
}
