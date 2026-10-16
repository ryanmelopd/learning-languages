<?php

$nomes = [];
$nomes[] = "Ana";          // add
$primeiro = $nomes[0];     // get
$tamanho = count($nomes);  // size

$idades = [];
$idades["Ana"] = 20;       // put
$i = $idades["Ana"];       // get

// já criando com valores
$nomes = ["Ana", "Bruno"];
$idades = ["Ana" => 20, "Bruno" => 25]; // chave => valor

// percorrendo um "map"
foreach ($idades as $nome => $idade) {
    echo "$nome tem $idade anos\n";
}