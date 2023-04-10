<?php

// URI Online Judge | 1048
// Salary Increase
// By Neilor Tonin, URI  Brazil

// Timelimit: 1
// The company ABC decided to give a salary increase to its employees, according to the following table:


// Salary	Readjustment Rate
// 0 - 400.00
// 400.01 - 800.00
// 800.01 - 1200.00
// 1200.01 - 2000.00
// Above 2000.00

// 15%
// 12%
// 10%
// 7%
// 4%


// Read the employee's salary, calculate and print the new employee's salary, as well the money earned and the increase percentual obtained by the employee, with corresponding messages in Portuguese, as the below example.
// Input
// The input contains only a floating-point number, with 2 digits after the decimal point.

// Output
// Print 3 messages followed by the corresponding numbers (see example) informing the new salary, the among of money earned (both must be shown with 2 decimal places) and the percentual obtained by the employee. Note:
// Novo salario:  means "New Salary"
// Reajuste ganho: means "Money earned"
// Em percentual: means "In percentage"

$x = fgets(STDIN);

$readjustment = [
    0 => ['min' => 00.00, 'max' => 400.00, 'readjustment' => 0.15],
    1 => ['min' => 400.01, 'max' => 800.00, 'readjustment' => 0.12],
    2 => ['min' => 800.01, 'max' => 1200.00, 'readjustment' => 0.10],
    3 => ['min' => 1200.01,'max' => 2000.00, 'readjustment' => 0.07],
    4 => ['min' => 2000.01, 'max' => PHP_FLOAT_MAX, 'readjustment' => 0.04],
];

foreach($readjustment as $salary) {
    if ($x >= $salary['min'] && $x <= $salary['max']) {
        $increase = sprintf("%.2f", ($x*$salary['readjustment']));
        $new_salary = sprintf("%.2f", ($x+$increase));
        $percent = ($salary['readjustment']*100). " %";

        echo "Novo salario: $new_salary\n";
        echo "Reajuste ganho: $increase\n";
        echo "Em percentual: $percent\n";

        break;
    }
}
