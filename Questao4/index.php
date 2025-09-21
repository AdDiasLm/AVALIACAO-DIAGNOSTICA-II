<?php
$matA = [];
$matB = [];
$soma = [];

echo "Valores da primeira matriz (3x3):\n";
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        $matA[$i][$j] = (int) readline("A[$i][$j]: ");
    }
}

echo "Valores da segunda matriz (3x3):\n";
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        $matB[$i][$j] = (int) readline("B[$i][$j]: ");
    }
}

echo "\nResultado da soma das matrizes:\n";
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        $soma[$i][$j] = $matA[$i][$j] + $matB[$i][$j];
        echo $soma[$i][$j] . "\t";
    }
    echo "\n";
}
?>