<?php
// beecrowd | 1117
// Score Validation
// Adapted by Neilor Tonin, URI  Brazil

// Timelimit: 1
// Write a program that reads two scores of a student. Calculate and print the average of these scores. Your program must accept just valid scores [0..10]. Each score must be validated separately.

// Input
// The input file contains many floating-point numbers​​, positive or negative. The program execution will be finished after the input of two valid scores.

// Output
// When an invalid score is read, you should print the message "nota invalida".
// After the input of two valid scores, the message "media = " must be printed followed by the average of the student. The average must be printed with 2 numbers after the decimal point.

$valid = [];
while(true) {
    $x = trim(fgets(STDIN));

    if($x >= 0 && $x <= 10){
        $valid[] = $x;
        if(count($valid) == 2){
            $media = ($valid[0]+$valid[1])/2;
            $media = sprintf('%.2f', $media);
            echo "media = $media\n";
            break;
        }
    }else{
        echo "nota invalida\n";
    }

}