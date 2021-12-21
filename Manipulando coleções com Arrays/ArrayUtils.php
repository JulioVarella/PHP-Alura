<?php

class ArrayUtils
{
    public static function encontrarPessoasComSaldoMaior(int $saldo, array $array): array
    {
        $maiores = [];
        foreach ($array as $chave => $valor) {
            if ($valor >= $saldo) {
                $maiores[] = $chave;
            }
        }
        return $maiores;
    }
}