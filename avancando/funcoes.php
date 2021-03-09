<?php

/**
 * @param string $mensagem
 */
function exibeMessagem(string $mensagem)
{
    echo $mensagem . '<br>';
}

/**
 * @param array $conta
 * @param float $valorAsacar
 * @return array
 */
function sacar(array $conta, float $valorASacar): array
{
    if ($valorASacar > $conta['saldo']) {
        exibeMessagem('Saldo Insuficiente, você não pode sacar esse valor');
    } else {
        $conta['saldo'] -= $valorASacar;
    }

    return $conta;
}

/**
 * @param array $conta
 * @param float $valorADepositar
 * @return array
 */
function depositar(array $conta, float $valorADepositar): array
{
    if ($valorADepositar > 0) {
        $conta['saldo'] += $valorADepositar;
    } else {
        exibeMessagem('Depositos pesisam ser positivos');
    }

    return $conta;
}

/**
 * @param array $conta
 * @return array
 */
function titularComLetrasMaiuslulas(array &$conta)
{
    $conta['titular'] = strtoupper($conta['titular']);
}

function exibeConta(array $conta)
{
    ['titular' => $titular, 'saldo' => $saldo] = $conta;
    echo  "<li>Titular: $titular Saldo: $saldo</li>";
}

