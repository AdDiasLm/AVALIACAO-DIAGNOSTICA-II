<?php
function calcQuadrado($lado) {
    return $lado * $lado;
}

function calcRetangulo($base, $altura) {
    return $base * $altura;
}

function calcCirculo($raio) {
    return pi() * pow($raio, 2);
}

$formato = strtolower(readline("Escolha (quadrado/retangulo/circulo): "));

switch ($formato) {
    case "quadrado":
        $l = (float) readline("Lado: ");
        echo "Área do quadrado = " . calcQuadrado($l) . "\n";
        break;

    case "retangulo":
        $b = (float) readline("Base: ");
        $h = (float) readline("Altura: ");
        echo "Área do retângulo = " . calcRetangulo($b, $h) . "\n";
        break;

    case "circulo":
        $r = (float) readline("Raio: ");
        echo "Área do círculo = " . calcCirculo($r) . "\n";
        break;

    default:
        echo "Figura não reconhecida!\n";
}
?>