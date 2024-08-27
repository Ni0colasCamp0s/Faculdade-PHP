<?php

$valor = 250;
if ($valor<=10) {
    echo "Valor menor que 10";
}
else if ($valor > 10 && $valor<=150) {
    echo "Valor entre 10 e 150";
}
else if ($valor>150 && $valor<=1500) {
    echo "Valor maior que 150 e menor ou igual a 1500";
} else
echo "Valor acima de 1000";

/* O if vai verificar se o conteúdo da variável $valor é menor ou igual que 10. S
e o teste resultar em verdadeiro, será impresso “Valor menor que 10” e os testes são encerrados. 
No caso se o teste ser falso ($valor ser maior que 10), será executado o primeiro elseif. 
O elseif irá testar se o conteúdo da variável $valor é menor ou igual a 100 e o teste resultar verdadeiro, será impresso “Valor entre 10 e 15”. 
Caso o teste seja falso ($valor maior que 150), o próximo elseif será testado. 
O elseif irá testar se o conteúdo da variável $valor é menor ou igual a 1500. 
Se o teste resultar em verdadeiro, será impresso “Valor maior que 150 e menor ou igual a 1500. 
Caso o teste seja falso ($valor maior que 1500) e, como não há mais comandos elseif, o comando else será executado, imprimindo “Valor acima de 1500). */

?>