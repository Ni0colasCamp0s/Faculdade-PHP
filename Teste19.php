<?php

function quadrado (& $valor) {
    $val_orig = $valor;
    $valor *= $val_orig;
    echo "Quadrado de $val_orig é: " . $valor;
}

$valor = 12;
echo "Valor original: $valor \n";
quadrado ($valor);
echo "\nValor atual: $valor";

/*  O código é apresentado um exemplo de passagem de parâmetro por referência.
 A variável $valor possui o valor 12. Ao chamar a função quadrado (), o valor 12 é enviado por parâmetro para a função. 
 A função recebe $valor com a inclusão do & antes do nome da variável $valor, indicando que se refere ao endereço de memória da variável $valor. 
 Dentro da função, a variável $valo passa a valer 144 (o valor de 12 ao quadrado). 
 Assim o conteúdo da variável de origem $valor, que era 12, passa a ser 144 também. */

?>