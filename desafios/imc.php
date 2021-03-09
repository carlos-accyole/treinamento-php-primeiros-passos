<?php

$peso = 120;
$altura = 1.74 ** 2;

$imc = $peso / $altura;

echo "Seu IMC é de $imc. Você está com IMC ";

if ($imc < 18.5) {
    echo 'abaixo';
} elseif ($imc < 25) {
    echo 'dentro';
} else {
    echo 'acima';
}

echo " do recomendado";
