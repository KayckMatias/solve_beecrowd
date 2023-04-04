<?php
// beecrowd | 1047
// Game Time with Minutes
// Adapted by Neilor Tonin, URI  Brazil

// Timelimit: 1
// Read the start time and end time of a game, in hours and minutes (initial hour, initial minute, final hour, final minute). Then print the duration of the game, knowing that the game can begin in a day and finish in another day,

// Obs.: With a maximum game time of 24 hours and the minimum game time of 1 minute.

// Input
// Four integer numbers representing the start and end time of the game.

// Output
// Print the duration of the game in hours and minutes, in this format: “O JOGO DUROU XXX HORA(S) E YYY MINUTO(S)” . Which means: the game lasted XXX hour(s) and YYY minutes.

fscanf(STDIN, "%d %d %d %d", $a, $b, $c, $d);

if ($c > $a || ($c == $a && $d > $b)) {
    $minutes = ($c - $a) * 60 + ($d - $b);
} else {
    $minutes = ((24 - $a) + $c) * 60 + ($d - $b);
}

$hours = intval($minutes / 60);
$minutes = $minutes % 60;

echo "O JOGO DUROU " . $hours . " HORA(S) E " . $minutes . " MINUTO(S)\n"
?>