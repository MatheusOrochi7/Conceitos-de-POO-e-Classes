<?php
// Dados do carro
$carro1_marca = "Fiat";
$carro1_modelo = "Uno";
$carro1_ano = 2010;

$carro2_marca = "Toyota";
$carro2_modelo = "Corolla";
$carro2_ano = 2020;

$carro3_marca = "VW";
$carro3_modelo = "Gol";
$carro3_ano = 2015;

// Função para exibir informações
function exibirCarro($marca, $modelo, $ano) {
    echo "Carro: $marca $modelo ($ano)<br>";
}

// Usando a função
exibirCarro($carro1_marca, $carro1_modelo, $carro1_ano);
exibirCarro($carro2_marca, $carro2_modelo, $carro2_ano);
exibirCarro($carro3_marca, $carro3_modelo, $carro3_ano);
?>

