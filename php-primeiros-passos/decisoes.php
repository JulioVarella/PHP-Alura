<?php

$idade = 13;

echo "só pode entrar se tiver a partir de 18 anos" . PHP_EOL;

if ($idade >= 18) {
    echo "Você tem $idade anos. Pode entrar";
}else{
    echo "vc tem menos de 18 anos, nao pode entrar";
}