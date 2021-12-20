<?php

namespace Alura\Banco\Modelo\Conta;

abstract class Conta

{
    protected Titular $titular;
    protected float $saldo;
    protected static $numeroDeContas = 0;

    public function __construct(Titular $titular)
    {
        $this->titular = $titular;
        $this->saldo = 0;
        self::$numeroDeContas++;
    }

    public function saca(float $valorASacar): void
    {
        $tarifaSaque = $valorASacar * $this->percentualTarifa();
        $valorSaque = $valorASacar + $tarifaSaque;
        if ($valorSaque > $this->saldo) {
            echo "Saldo indisponível";
            return;
        }

        $this->saldo -= $valorSaque;
    }

    public function depositar($valorADepositar): void
    {
        if($valorADepositar <= 0) {
            echo "Deposite um valor positivo.";
            return;
        }
        $this->saldo += $valorADepositar;
    }

    public function transferir($valorATransferir, Conta $contaDestino): void
    {
        if ($valorATransferir > $this->saldo){
            echo "Saldo insuficiente.";
            return;
        }

        $this->saca($valorATransferir);
        $contaDestino->depositar($valorATransferir);
    }

    public function getSaldo()
    {
        echo $this->saldo;
    }

    abstract public function percentualTarifa(): float;
}