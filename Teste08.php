<?php

$a = 5;
$b = ++$a;
++$a;
echo "$a::$b";

/* Segunda maneira de realizar o incremento/decremento através do pré-incremento. 
O incremento/decremento é realizado primeiro e depois retorna o seu valor atualizado. 
A variável $a é inicializada com o valor 5. 
A variável $b recebe a atribuição de valor de $a com o operador de pré-incremento. 
Como o operador é de pré-incremento, a variável $b recebe o valor atualizado de $a, que é 6. 
A variável $a, após duas operações de pré-incremento (++) passa a valer 7. */

?>