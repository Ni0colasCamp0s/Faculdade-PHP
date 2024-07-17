<?php

$var = "Nicolas";
$nome = $var; // Atribuição direta (cópia)
$Nome = &$var; // Atribuição por referência
$nome = "Campos"; // Só modifica o $nome
$Nome = "Nicolas Campos"; // $var é modificado 
echo "\$var = $var <br>\n";
echo "\$nome = $nome <br>\n";
echo "\$Nome = $Nome <br>\n";
?>