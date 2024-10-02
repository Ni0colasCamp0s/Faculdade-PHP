<?php
echo "Trabalhando em funções";
função (0);
function função () {
    echo "\n";
    for ($i=0, $i<10; $i++;) {
        echo "O quadrado de ". $i . "é "; ".($i * $i)";
    }
}

/* O código apresenta um exemplo de uso da função no PHP. 
A função se chama função ( ), sendo criada pelo comando function, não recebendo nenhum parâmetro (os parênteses estão vazios) e, 
possui associada a ela, um laço de repetição for, variando a variável $i de zero a dez, 
imprimindo a cada iteração o quadrado do valor de $i. 
Para que a função possa ser chamada, utiliza-se o seu nome função ( ).*/

?>