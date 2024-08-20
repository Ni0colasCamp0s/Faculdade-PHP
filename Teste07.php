<?php

$a = 2;
$b = $a++;
$a++;
Echo "$a::$b";

/* A variável $a é inicializada com o valor 2. 
A variável $b recebe a atribuição de valor de $a seguida do operador de incremento. 
Como o operador é de pós-incremento, a variável $b recebe o valor anterior de $a, que é 2. 
A variável $a, após duas operações de pós-incremento (++) passa a valer 4. */

?>