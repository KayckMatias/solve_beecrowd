<?php
// beecrowd | 1145
// Logical Sequence 2
// Adapted by Neilor Tonin, URI  Brazil

// Timelimit: 1
// Write an program that reads two numbers X and Y (X < Y). After this, show a sequence of 1 to y, passing to the next line to each X numbers.

// Input
// The input contains two integer numbers X (1 < X < 20) and Y (X < Y < 100000).

// Output
// Each sequence must be printed in one line, with a blank space between each number, like the following example.

fscanf(STDIN, "%d %d", $input, $sub_max);

$current = 1;
while(true){
    for($j = 0; $j < $input; $j++){
        echo ($j == ($input-1)) ? ($current + $j) : ($current + $j) . " ";
        if(($current + $j) >= $sub_max){
            echo "\n";
            break 2;
        }
    } 
    $current += $input;
    echo "\n";
}
