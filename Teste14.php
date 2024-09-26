<?php

function soma ($valor) {
    if ($valor==0) {
        return -1;
    }
    return $valor + 5;

}

$valor = 0;
$resultado = soma($valor);
echo "Resultado: $resultado\n";

/* O código acima ilustra o comando do return. 
A função soma recebe por parâmetro a variável $valor e retorna $valor somando a 5. 
Se $valor for igual a zero, retorna -1. */

?>