<?php
// beecrowd | 1094
// Experiments
// Adapted by Neilor Tonin, URI  Brazil

// Timelimit: 1
// Maria acaba de começar como estudante de pós-graduação em uma faculdade de medicina e ela está precisando de sua ajuda para organizar um experimento de laboratório que ela é responsável. Ela quer saber, no final do ano, quantos animais foram utilizados neste laboratório e a porcentagem de cada tipo de animal é usado.

// Este laboratório utiliza, em particular, três tipos de animais: rãs, ratos e coelhos. Para obter essas informações, ele sabe exatamente o número de experimentos que foram realizados, o tipo e a quantidade de cada animal utilizado em cada experimento.

// Input
// The first line of input contains an integer N indicating the number of test cases that follows. Each test case contains an integer Amount (1 ≤ Amount ≤ 15) which represents the amount of animal used and a character Type ('C', 'R' or 'S'), indicating the type of animal:
// - C: Coelho (rabbit in portuguese)
// - R: Rato (rat  in portuguese)
// - S: Sapo (frog in portuguese)

// Output
// Print the total of animals used, the total of each type of animal and the percentual of each one in relation of the total of animals used. The percentual must be printed with 2 digits after the decimal point.

$qntd_test = intval(fgets(STDIN));

$total = [
    'C' => 0,
    'R' => 0,
    'S' => 0,
];

$total_count = 0;

for ($i = 0; $i < $qntd_test; $i++) {
  $new_test = explode(' ', trim(fgets(STDIN)));
  $total[$new_test[1]] += $new_test[0];
  $total_count += $new_test[0];
}

$percent = [];

foreach($total as $key => $item){
    $percent[$key] = ($item/$total_count)*100;
}

echo "Total: " . $total_count . " cobaias\n";
echo "Total de coelhos: " . $total['C'] . "\n";
echo "Total de ratos: " . $total['R'] . "\n";
echo "Total de sapos: " . $total['S'] . "\n";
echo "Percentual de coelhos: " . sprintf('%.2f', $percent['C']) . " %\n";
echo "Percentual de ratos: " . sprintf('%.2f', $percent['R']) . " %\n";
echo "Percentual de sapos: " . sprintf('%.2f', $percent['S']) . " %\n";