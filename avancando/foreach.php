<?php

$contasCorrentes = [
    '123.456.789-10' => [
        'titular' => 'Carlos',
        'saldo' => 1000
    ],
    '123.456.789-11' => [
        'titular' => 'Gabriela',
        'saldo' => 800
    ],
    '123.256.789-10' => [
        'titular' => 'Rafaela',
        'saldo' => 500
    ]
];

$contasCorrentes['123.255.789.12'] = [
    'titular' => 'Jordania',
    'saldo' => 1000
];

foreach ($contasCorrentes as $cpf => $conta) {
    echo $cpf . ' ' . $conta['titular'] . PHP_EOL;
}
