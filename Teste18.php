<?php

function soma ($valor1, $valor2) {
    $resultado = $valor1 + $valor2;
    echo "Soma: $resultado";
}

$valor1 = 10;
$valor2 = 20;
soma ($valor1, $valor2);

/*No código é apresentado um exemplo de passagem de parâmetro por valor. 
A variável %valor1 recebe o valor dez e $valor2 recebe o valor 20. 
Ao chamar a função soma (), os valores 10 e 20 são enviados por parâmetro para a função. 
Dentro da função, a variável $resultado recebe a soma dos valores, passando a valer 30.*/

?>