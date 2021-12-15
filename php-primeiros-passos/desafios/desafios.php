<?php

for($i = 1; $i < 100; $i += 2)
    echo $i . PHP_EOL;

//ou

$i = 1;

while($i < 100) {
    if ($i % 2) {
        echo $i . PHP_EOL;
    }
    $i += 2;
}