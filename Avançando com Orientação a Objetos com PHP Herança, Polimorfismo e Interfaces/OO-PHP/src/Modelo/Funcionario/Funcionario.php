<?php

namespace Alura\Banco\Modelo\Funcionario;

use Alura\Banco\Modelo\Pessoa;

abstract class Funcionario extends Pessoa
{
    private float $salario;

    public function __construct(string $nome, string $cpf, float $salario)
    {
        parent::__construct($nome, $cpf);
        $this->salario = $salario;
    }

    abstract public function calculaBonificacao(): float;

    public function recuperaSalario(): float
    {
        return $this->salario;
    }
}