<?php
$conjunto = [];
$valoresPares = [];
$valoresImpares = [];

for ($i = 0; $i < 10; $i++) {
    $valor = (int) readline("Digite um valor: ");
    $conjunto[] = $valor;
}

foreach ($conjunto as $elemento) {
    if ($elemento % 2 == 0) {
        $valoresPares[] = $elemento;
    } else {
        $valoresImpares[] = $elemento;
    }
}

echo "Lista de pares: " . implode(", ", $valoresPares) . "\n";
echo "Lista de ímpares: " . implode(", ", $valoresImpares) . "\n";
?>