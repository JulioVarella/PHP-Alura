<?php

$altura = 1.81;
$peso = 99;

$imc = $peso / ($altura**2);

echo "Seu IMC é " . $imc;

if($imc >= 18.5 && $imc <= 24.9){
    echo " e está na faixa normal." . PHP_EOL;
}else if($imc <= 18.5){
    echo " e está abaixo da faixa normal." . PHP_EOL;
}else if($imc >= 24.9){
    echo " e está acima da faixa normal." . PHP_EOL;
}