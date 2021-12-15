<?php

require 'funcoes.php';

//array associativo com chave explícita para outro array com chaves explícitas
$contasCorrentes = [
    '123.123.123-44' => [
        'titular' => 'Julio',
        'saldo' => 3000
    ],
    '321.321.321-44' => [
        'titular' => 'Pedro',
        'saldo' => 200
    ],
    '111.222.333-44' => [
        'titular' => 'Lucas',
        'saldo' => 1
    ]
];



$contasCorrentes['123.123.123-44'] = sacar(
    $contasCorrentes['123.123.123-44'],
    500
);

$contasCorrentes['321.321.321-44'] = sacar(
    $contasCorrentes['321.321.321-44'],
    200
);

$contasCorrentes['111.222.333-44'] = depositar(
    $contasCorrentes['111.222.333-44'],
    900
);

foreach ($contasCorrentes as $cpf => $conta) {
    exibeMensagem("$cpf $conta[titular] $conta[saldo]");
}
?> <!-- end php exec  -->

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
    <h1>Contas correntes</h1>

    <dl>
        <?php foreach($contasCorrentes as $cpf => $conta) { ?>
        <dt>
            <h3><?= $conta['titular']; ?> - <?= $cpf; ?></h3>
        </dt>
        <dd>
            Saldo: <?= $conta['saldo']; ?>
        </dd>
        <?php } ?>
    </dl>
</body>
</html>

<!--
//unset($contasCorrentes['123.123.123-44']);
//
//foreach ($contasCorrentes as $cpf => $conta) {
//    $conta['titular'] = strtoupper($conta['titular']);
//    exibeMensagem("$cpf {$conta['titular']} {$conta['saldo']}");
//}
-->