<?php

namespace Alura\Banco\Modelo\Conta;

use Alura\Banco\Modelo\Autenticavel;
use Alura\Banco\Modelo\Pessoa;
use Alura\Banco\Modelo\Endereco;

class Titular extends Pessoa implements Autenticavel
{
    public Endereco $endereco;

    public function __construct(string $cpf, string $nome, Endereco $endereco)
    {
        parent::__construct($cpf, $nome);
        $this->endereco = $endereco;
    }

    public function getEndereco(): string
    {
        return $this->endereco;
    }

    public function podeAutenticar(string $senha): bool
    {
        return $senha === 'abcd';
    }
}