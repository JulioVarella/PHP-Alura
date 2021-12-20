<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Conta\Conta;
use Alura\Banco\Modelo\Conta\ContaPoupanca;
use Alura\Banco\Modelo\Conta\ContaCorrente;
use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\Endereco;



$conta = new ContaCorrente(
    new Titular(
        '411.059.294-41',
        'Julio Varella',
        new Endereco(
            'Ourinhos',
            'Vila Soares',
            'Nilza Lemes',
            'casa 8'
        )
    )
);

$conta->depositar(1000);
$conta->saca(200);

echo $conta->getSaldo();