<?php


$carro1 = [
    'marca' => 'VW',
    'modelo' => 'Golf'
];

$carro2 = [
    'marca' => "Lamborghini",
    'modelo' => 'Gallardo'
];

$carros = [
    'GUI-7474' => $carro1,
    'FAA-1423' => $carro2
];

foreach ($carros as $placa => $carro) {
    echo $placa . PHP_EOL;
}