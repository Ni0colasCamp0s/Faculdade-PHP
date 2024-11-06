<?php

function media ($valor1, $valor2) {
    $m = ($valor1 + $valor2)/2;
    return $m;
}

$valor1 = 9;
$valor2 = 8;
echo "A média dos valores é " . media($valor1, $valor2);

/* O código ilustra a função média, que recebe por parâmetro dois valores, 9 e 8. 
A função calcula a média e armazena seu resultado em $m, retornando a média calculada (8,5) para o ponto de chamada. */

?>