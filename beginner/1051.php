<?php
// beecrowd | 1051
// Taxes
// By Neilor Tonin, URI  Brasil

// Timelimit: 1
// In an imaginary country called Lisarb, all the people are very happy to pay their taxes because they know that doesn’t exist corrupt politicians and the taxes are used to benefit the population, without any misappropriation. The currency of this country is Rombus, whose symbol is R$.

// Read a value with 2 digits after the decimal point, equivalent to the salary of a Lisarb inhabitant. Then print the due value that this person must pay of taxes, according to the table below.

// Remember, if the salary is R$ 3,002.00 for example, the rate of 8% is only over R$ 1,000.00, because the salary from R$ 0.00 to R$ 2,000.00 is tax free. In the follow example, the total rate is 8% over R$ 1000.00 + 18% over R$ 2.00, resulting in R$ 80.36 at all. The answer must be printed with 2 digits after the decimal point.

// Input
// The input contains only a float-point number, with 2 digits after the decimal point.

// Output
// Print the message "R$" followed by a blank space and the total tax to be payed, with two digits after the decimal point. If the value is up to 2000, print the message "Isento".

$x = floatval(fgets(STDIN));

$taxes = [
    0 => ['min' => 00.00, 'max' => 2000.00, 'tax' => 0],
    1 => ['min' => 2000.01, 'max' => 3000.00, 'tax' => 0.08],
    2 => ['min' => 3000.01, 'max' => 4500.00, 'tax' => 0.18],
    3 => ['min' => 4500.01, 'max' => PHP_FLOAT_MAX, 'tax' => 0.28],
];

$total_tax = 0;

if($x > 2000.00) {
    $max_tax = count($taxes);

    while ($max_tax > 0) {
        foreach($taxes as $key => $salary) {
            if ($x >= $salary['min'] && $x <= $salary['max'] && $key > 0) {
                $y = $taxes[$key-1]['max'];

                $total_tax += ($x-$y)*$salary['tax'];

                $x = $y;
            }
        }
        
        $max_tax--;
    }

    $total_tax = "R$ " . sprintf('%.2f', $total_tax);
}else{
    $total_tax = "Isento";

}
echo  $total_tax . "\n";