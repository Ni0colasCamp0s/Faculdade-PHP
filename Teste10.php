<?php

$i = 10;
echo "Primeiro while:";
while ($i>0) {
    echo "...";
    $i--;
}
$k = 10;
echo "\n Primeiro do.. while:";
do {
    echo "$k ...";
    $k--;
} while ($i>0);
echo "\n Segundo while (não teremos nenhuma interação):";
while ($i>0) {
    echo "$i/";
    $i--;
}
echo "\n Segundo do.. while (1 interação):";
do {
    echo "$k ...";
    $k--;
} while ($k>0);

/* Inicialmente a variável $i é inicializada com valor 10. 
O primeiro while irá realizar a repetição enquanto $i for maior que 0. 
O laço de repetição será realizado dez vezes (de 10 a 1), pois dentro do laço há o operador de decremento vinculado á variável $i ($i- -). 
O primeiro do.. while utiliza a variável $k inicializada com o valor 10. 
O teste é realizado no final e o loop é repetido por dez vezes ( de 10 a 1). 
No caso do segundo while, a condição de entrada no laço de repetição é enquanto $i for maior que 0. 
Como a variável $i está valendo zero, o laço não é executado e nenhuma interação é realizada. 
Para o segundo do.. while, como o teste é realizado no final, pelo menos uma vez o laço é realizado, imprimindo o valor de $k que é zero. */

?>