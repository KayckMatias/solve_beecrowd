<?php
// beecrowd | 1165
// Prime Number
// Adapted by Neilor Tonin, URI  Brazil

// Timelimit: 1
// A Prime Number is a number that is divisible only by 1 (one) and by itself. For example the number 7 is Prime, because it can be divided only by 1 and by 7.

// Input
// The input contains several test cases. The first contains the number of test cases N (1 ≤ N ≤ 100). Each one of the following N lines contains an integer X (1 < X ≤ 107), that can be or not a prime number.

// Output
// For each test case print the message “X eh primo” (X is prime) or “X nao eh primo” (X isn't prime) according with to above specification.

function isPrime($num) {
    $primes = 0;
    for($i = 1; $i <= $num; $i ++){
        if($num % $i == 0){
            $primes++;
        }
    }
    return ($primes <= 2);
}

$x = intval(fgets(STDIN));

for ($i = 0; $i < $x; $i++) {
    $a = intval(fgets(STDIN));

    echo isPrime($a) ? "$a eh primo\n" : "$a nao eh primo\n";
}
