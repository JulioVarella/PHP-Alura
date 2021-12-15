<?php

function depositar(array $conta, float $valorADepositar): array
{
    if($valorADepositar > 0)
        $conta['saldo'] += $valorADepositar;
    else
        exibeMensagem("Deposite um valor positivo.");
    return $conta;
}

function sacar(array $conta, float $valorASacar): array
{
    if($valorASacar > $conta['saldo']) {
        exibeMensagem("Saldo insuficiente.");
    }else{
        $conta['saldo'] -= $valorASacar;
    }
    return $conta;
}

function exibeMensagem (string $mensagem)
{
    echo $mensagem . '<br>';
}