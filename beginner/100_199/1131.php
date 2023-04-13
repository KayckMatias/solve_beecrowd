<?php
// beecrowd | 1131
// Grenais
// Adapted by Neilor Tonin, URI  Brazil

// Timelimit: 1
// The Federação Gaúcha de Futebol invited you to write a program to present a statistical result of several GRENAIS. Write a program that read the number of goals scored by Inter and the number of goals scored by Gremio in a GRENAL. Write the message "Novo grenal (1-sim 2-nao)" and request a response. If the answer is 1, two new numbers must be read (another input case) asking the number of goals scored by the teams in a new departure, otherwise the program must be finished, printing:

// - How many GRENAIS were part of the statistics.
// - The number of victories of Inter.
// - The number of victories of Gremio.
// - The number of Draws.
// - A message indicating the team that won the largest number of GRENAIS (or the message: "Não houve vencedor" if both team won the same quantity of GRENAIS).

// Input
// The input contains two integer values​​, corresponding to the goals scored by both teams. Then there is an integer (1 or 2), corresponding to the repetition of the algorithm.

// Output
// After each reading of the goals it must be printed the message "Novo grenal (1-sim 2-nao)". When the program is finished, the program must print the statistics as the example below.

$grenais = [
    'empates' => 0,
    'inter' => 0,
    'gremio' => 0,
];

fscanf(STDIN, "%d %d", $inter, $gremio);
newGrenal($inter, $gremio);

while (true) {
    echo "Novo grenal (1-sim 2-nao)\n";
    $y = trim(fgets(STDIN));

    if ($y == 1) {
        fscanf(STDIN, "%d %d", $inter, $gremio);
        newGrenal($inter, $gremio);
    } elseif ($y == 2) {
        break;
    }
}

function newGrenal($inter, $gremio)
{
    global $grenais;

    if ($inter == $gremio) {
        $grenais['empates']++;
    } elseif ($inter > $gremio) {
        $grenais['inter']++;
    } else {
        $grenais['gremio']++;
    }
}

echo array_sum($grenais) . " grenais\n";
echo "Inter:" . $grenais['inter'] .  "\n";
echo "Gremio:" . $grenais['gremio'] .  "\n";
echo "Empates:" . $grenais['empates'] .  "\n";

if ($grenais['inter'] == $grenais['gremio']) {
    echo "Não houve vencedor\n";
} elseif ($grenais['inter'] > $grenais['gremio']) {
    echo "Inter venceu mais\n";
} else {
    echo "Gremio venceu mais\n";
}