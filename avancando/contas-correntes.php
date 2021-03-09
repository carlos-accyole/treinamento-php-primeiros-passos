<?php

$conta1 = [
    'titular' => 'Carlos',
    'saldo' => 1000
];
$conta2 = [
    'titular' => 'Gabriela',
    'saldo' => 800
];
$conta3 = [
    'titular' => 'Rafaela',
    'saldo' => 500
];

$contasCorrentes = [$conta1, $conta2, $conta3];

for ($i = 0; $i < count($contasCorrentes); $i++) {
    echo $contasCorrentes[$i]['titular'] . PHP_EOL;
}
