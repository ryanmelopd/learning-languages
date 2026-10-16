<?php

// conditionals
$idade = 18;
if ($idade >= 18) {
    echo "Você tem a idade igual ou maior que 18.";
} elseif ($idade > 12) {
    echo "Você tem a idade maior que 12.";
} else { 
    "Você tem a idade menor ou igual a 12.";
}

// loops
for ($i = 0; $i <= 5;$i++) {
    echo $i . PHP_EOL;
}

$numero = 10;
while ($numero <= 20) {
    echo $numero . PHP_EOL;
    $numero++;
}

$nomes = ["Ana", "Carlos", "Maria"];
foreach ($nomes as $nome) {
    echo $nome . PHP_EOL; // PHP_EOL break row
}