<?php

class Titular
{
    public string $cpf;
    public string $nome;

    public function __construct(string $cpf, string $nome)
    {
        $this->cpf = $cpf;
        $this->nome = $nome;
    }

    public function recuperaNome(): string
    {
        return $this->nome;
    }
}