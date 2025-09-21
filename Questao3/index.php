<?php
$catalogo = [];

for ($i = 0; $i < 4; $i++) {
    $nomeItem = readline("Nome do item: ");
    $qtd = (int) readline("Quantidade: ");
    $valorUnitario = (float) readline("Preço unitário: ");
    $subtotal = $qtd * $valorUnitario;

    $catalogo[] = [
        "item" => $nomeItem,
        "qtd" => $qtd,
        "unitario" => $valorUnitario,
        "subtotal" => $subtotal
    ];
}

echo "\nRelação de Produtos:\n";
echo "--------------------------------------\n";
echo "Item\tQtd\tValor\tSubtotal\n";
echo "--------------------------------------\n";

foreach ($catalogo as $linha) {
    echo "{$linha['item']}\t{$linha['qtd']}\t{$linha['unitario']}\t{$linha['subtotal']}\n";
}
?>