<?php
function valores ($valor1="HTML", $valor2="PHP") {
    echo "O valor1 é $valor1 e o valor2 é $valor2", "\n";
}

valores ("Java");
valores ();
valores ("CSS", "C++");

/* No código é apresentado um exemplo de uso de função com o valor padrão. A função padrão possui os argumentos $valor1 = “HTML” e $valor2 = “PHP”. 
Assim, quando a função valores é chamada sem parâmetro, valores (), a mensagem a será “O valor1 é HTML e o valor2 é PHP”. 
Ao chamar a função valores (”CSS”, “C++”) será exibida a mensagem “O valor1 é CSS e o valor 2 é C++”. 
Porém, ao enviar apenas um parâmetro, valores (”Java”), apenas o primeiro parâmetro é afetado, produzindo a mensagem “O valor1 é Java e o valor2 é PHP”. */

?>