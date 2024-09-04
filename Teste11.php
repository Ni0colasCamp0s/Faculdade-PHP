<?php

for ($i=0; $i<=15; $i++) {
    echo "$i ...";
}

for (print "\n"; $i>=0; $i--) {
    echo "$i ...";
}

/* O primeiro laço for inicializa a variável de controle $i com valor 0. 
A condição de repetição é enquanto o $i for menor ou igual a 15. 
A expressão $i++ faz o incremento da variável $i em uma unidade a cada interação. 
Dessa forma, o laço será executado 16 vezes (de 0 a 16). 
O segundo laço for inicializa com uma quebra de linha (através do <br>) e a condição d repetição é quando $i for maior ou igual a zero. 
A expressão $i— faz o decremento da variável de controle. 
Dessa forma o laço será executado 16 vezes de 15 a 0. */

?>