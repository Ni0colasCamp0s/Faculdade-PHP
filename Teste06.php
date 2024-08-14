<?php

$valor = 10;
function dobro () {
    global $valor;
    $valor = $valor*2;
    echo "\$valor na função = $valor";
}

echo "\$valor = $valor \n";
dobro ();
echo "\n\$valor = $valor";

/* O código ilustra o conceito de escopo de variável. 
A variável $valor inicializada com valor 10 e a variável $valor inicializada com valor 6, 
dentro da função dobro(), só existe dentro da função, não sendo visualizada nem disponivel fora da função. 
Para tornar uma variável global seguida do nome da variável. */

?>