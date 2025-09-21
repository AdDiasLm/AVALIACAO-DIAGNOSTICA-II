<?php
$listaFrutas = [];

for ($i = 0; $i < 5; $i++) {
    $listaFrutas[] = readline("Informe uma fruta: ");
}

sort($listaFrutas);

echo "Frutas organizadas em ordem alfabética:\n";
foreach ($listaFrutas as $item) {
    echo "- $item\n";
}
?>