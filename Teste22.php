<?php

function &soma ($valor1, $valor2) {
$resultado = $valor1 + $valor2;
return $resultado;
}
$resultado = &soma (10, 20);

?>