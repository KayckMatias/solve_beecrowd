<?php

$x = intval(fgets(STDIN));

$date   = DateTime::createFromFormat('!m', $x);
$monthName = $date->format('F');

echo "$monthName\n";
