<?php

$func = function($valor, $exp) {
    return "$valor elevado a $exp é igual a " . pow($valor, $exp) . "\n";
};

echo "Nome da função: " . gettype($func) . "\n";
echo $func (13, 5);
echo $func (5, 7);
echo $func (2, 10);

/* O código é apresentado a criação de uma função anônima através do comando function, 
recebendo dois parâmetros, $valor e $exp e retornando o $valor elevado a $exp, 
utilizando para isso a função pow. Em vez de tentar obter o nome da função, 
usamos gettype($func) para mostrar o tipo da variável, que será "object" para funções anônimas. */

?>