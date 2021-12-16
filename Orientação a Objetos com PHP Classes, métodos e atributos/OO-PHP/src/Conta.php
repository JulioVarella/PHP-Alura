<?php

class Conta
{
    private Titular $titular;
    private float $saldo;
    private static $numeroDeContas = 0;

    public function __construct(Titular $titular)
    {
        $this->titular = $titular;
        $this->saldo = 0;
        self::$numeroDeContas++;
    }

    public function sacar($valorASacar):void
    {
        if($valorASacar > $this->saldo) {
            echo "Saldo insuficiente";
            return;
        }
        $this->saldo -= $valorASacar;
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

        $this->sacar($valorATransferir);
        $contaDestino->depositar($valorATransferir);
    }

    public function getSaldo()
    {
        echo $this->saldo;
    }
}