<?php

$_c = new carro();
$_c -> setMarca("Lamborghini");
$_c -> setModelo("Aventador");
$_c -> setCor("Amarelo");
$_c -> setAno("2018");

echo $_c -> getMarca();
echo "\n";
echo $_c -> getCarro();

/* O código apresenta o exemplo de instanciação do método setMarca(), modelo “Aventador” através do método setModelo(), 
da cor “Amarelo” através do método setCor() e ano 2020 através do método setAno(). 
Atravès da chamada do método getCarro(), exibe-se a marca, modelo, cor e ano do veículo cadastrado. */
?>