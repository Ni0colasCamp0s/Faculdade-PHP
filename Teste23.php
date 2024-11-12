<?php

function fatorial($n) {
    if($n<0) {
        return "Não existe fatorial de número negativo";
    }
    elseif($n<=1) {
        return 1;
    }
    else {
        return $n * fatorial($n-1);
    }
}

$v = 10;
echo "Fatorial de $v = " . fatorial($v);

/* O código é um exemplo de uma função recursiva fatorial (). 
Dentro do corpo da função (), sendo uma chamada recursiva. 
O ponto de parada das chamadas é quando $n for igual a zero. 
A recursividade faz uso da estrutura de dados pilha, realocando todas as variáveis envolvidas no processo recursivo. */

?>