<?php

//array associativo

$conta1 = [
    'titular' => 'Julio',
    'idade' => 22
];

$conta2 = [
    'titular' => 'Joao',
    'idade' => 17
];

$conta3 = [
    'titular' => 'Maria',
    'idade' => 33
];
//-------------------------------------------
$contas = [
    0 => $conta1,
    1 => $conta2,
    2 => $conta3];

for($i = 0; $i < count($contas); $i++){
    echo $contas[$i]['titular'] . PHP_EOL;
}

//ou

echo PHP_EOL;

unset($contas['0']);

foreach ($contas as $cpf => $conta){
    ['titular' => $titular, 'idade' => $idade] = $conta;
    echo $idade . PHP_EOL;
}