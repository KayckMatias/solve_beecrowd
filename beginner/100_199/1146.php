<?php
// beecrowd | 1146
// Growing Sequences
// Adapted by Neilor Tonin, URI  Brazil

// Timelimit: 2
// Your program must read an integer X indefinited times (the program must stop when X is equal to zero). For each X print the sequence from 1 to X, with one space between each one of these numbers.

// PS: Be carefull. Don't leave any space after the last number of each line, otherwise you'll get Presentation Error.

// Input
// The input file contains many integer numbers. The last one is zero.

// Output
// For each number N of the input file, one output line must be printed, from 1 to N like the following example. Be careful with blank spaces after the last line number.

while(true){
    $input = intval(fgets(STDIN));
    if($input == 0){
        echo "\n";
        break;
    }

    for($x = 1; $x <= $input; $x++){
        echo ($x == $input) ? $x : $x . " ";
    }
    echo "\n";
}
