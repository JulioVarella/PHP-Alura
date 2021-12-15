<?php

for($variavel = 0; $variavel <= 15; $variavel++){
    echo "#$variavel" . PHP_EOL;
}

echo PHP_EOL;

for($variavel = 0; $variavel <= 15; $variavel++){
    if($variavel == 13)
        continue;
    echo "#$variavel" . PHP_EOL;
}

echo PHP_EOL;

for($variavel = 0; $variavel <= 15; $variavel++){
    if($variavel == 13)
        break;
    echo "#$variavel" . PHP_EOL;
}