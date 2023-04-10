<?php
// beecrowd | 1061
// Event Time
// Adapted by Neilor Tonin, URI  Brazil

// Timelimit: 1
// Peter is organizing an event in his University. The event will be in April month, beginning and finishing within April month. The problem is: Peter wants to calculate the event duration in seconds, knowing obviously the begin and the end time of the event.

// You know that the event can take from few seconds to some days, so, you must help Peter to compute the total time corresponding to duration of the event.

// Input
// The first line of the input contains information about the beginning day of the event in the format: “Dia xx”. The next line contains the start time of the event in the format presented in the sample input. Follow 2 input lines with same format, corresponding to the end of the event.

// Output
// Your program must print the following output, one information by line, considering that if any information is null for example, the number 0 must be printed in place of W, X, Y or Z:

// W dia(s)
// X hora(s)
// Y minuto(s)
// Z segundo(s)

// Obs: Consider that the event of the test case have the minimum duration of one minute. “dia” means day, “hora” means hour, “minuto” means minute and “Segundo” means second in Portuguese.

$x = explode('Dia ', trim(fgets(STDIN)))[1];
[$a,$b,$c] = explode(' : ', trim(fgets(STDIN)));
$y = explode('Dia ', trim(fgets(STDIN)))[1];
[$d,$e,$f] = explode(' : ', trim(fgets(STDIN)));

$d1 = new DateTime(date("Y-m-$x $a:$b:$c"));
$d2 = new DateTime(date("Y-m-$y $d:$e:$f"));

$interval = $d1->diff($d2);

echo $interval->days . " dia(s)\n";
echo $interval->h . " hora(s)\n";
echo $interval->i . " minuto(s)\n";
echo $interval->s . " segundo(s)\n";