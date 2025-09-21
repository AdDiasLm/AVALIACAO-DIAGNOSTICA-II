<?php
function cParaF($celsius) {
    return ($celsius * 9/5) + 32;
}

function fParaC($fahrenheit) {
    return ($fahrenheit - 32) * 5/9;
}

$valorTemp = (float) readline("Informe a temperatura: ");
$destino = strtoupper(readline("Converter para (C/F)? "));

if ($destino == "F") {
    echo "$valorTemp °C corresponde a " . cParaF($valorTemp) . " °F\n";
} elseif ($destino == "C") {
    echo "$valorTemp °F corresponde a " . fParaC($valorTemp) . " °C\n";
} else {
    echo "Opção inválida!\n";
}
?>