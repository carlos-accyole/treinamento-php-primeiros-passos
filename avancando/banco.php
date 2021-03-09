<?php

require 'funcoes.php';

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

$contasCorrentes['123.256.789-10'] = sacar(
    $contasCorrentes['123.256.789-10'],
    100
);

$contasCorrentes['123.456.789-11'] = sacar(
    $contasCorrentes['123.456.789-11'],
    100
);

$contasCorrentes['123.256.789-10'] = depositar(
    $contasCorrentes['123.256.789-10'],
    1000);

//unset($contasCorrentes['123.456.789-10']);

titularComLetrasMaiuslulas($contasCorrentes['123.456.789-10']);

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Contas Correntes</h1>
    <dl>
        <?php foreach ($contasCorrentes as $cpf => $conta) { ?>
            <dt>
                <h3><?= $conta['titular']; ?> - <?= $cpf; ?></h3>
            </dt>
            <dd>
                Saldo: <?=$conta['saldo']; ?>
            </dd>
        <?php } ?>
    </dl>
</body>
</html>
