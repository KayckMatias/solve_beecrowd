<?php
// beecrowd | 1046
// Game Time
// Adapted by Neilor Tonin, URI  Brazil

// Timelimit: 1
// Read the start time and end time of a game, in hours. Then calculate the duration of the game, knowing that the game can begin in a day and finish in another day, with a maximum duration of 24 hours. The message must be printed in portuguese “O JOGO DUROU X HORA(S)” that means “THE GAME LASTED X HOUR(S)”

// Input
// Two integer numbers representing the start and end time of a game.

// Output
// Print the duration of the game as in the sample output.

fscanf(STDIN, "%d %d", $x, $y);

$duration = ($x < $y) ? ($y-$x) : (24-$x+$y);

echo "O JOGO DUROU " . $duration . " HORA(S)\n";
?>