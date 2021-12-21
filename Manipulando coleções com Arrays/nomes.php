<?php

require 'ArrayUtils.php';

$correntistas = [
    'Giovanni',
    'João',
    'Maria',
    'Luis',
    'Luisa',
    'Rafael',
];

$correntistasNaoPagantes = [
    'Luis',
    'Luisa',
    'Rafael',
];

$diferentes = array_diff($correntistas, $correntistasNaoPagantes);

$correntistas = [
    'Giovanni',
    'Joao',
    'Maria',
    'Luis',
    'Luisa',
    'Rafael',
];

$saldos = [
    2500,
    3000,
    4400,
    1000,
    8700,
    9000,
];

$relacionados = array_merge($correntistas, $saldos);

echo ("<pre>");
var_dump($relacionados);
echo ("</pre>");

$relacionados = array_combine($correntistas, $saldos);

echo ("<pre>");
var_dump($relacionados);
echo ("</pre>");

echo ("<pre>");
if (array_key_exists("Joao", $relacionados)) {
    echo $relacionados["Joao"];
} else {
    echo "Não existe no array";
}
echo ("</pre>");


$pessoas = ArrayUtils::encontrarPessoasComSaldoMaior(3000, $relacionados);

var_dump($pessoas);