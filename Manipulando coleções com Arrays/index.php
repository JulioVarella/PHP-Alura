<?php

require 'Calculadora.php';

$notas = [9, 3, 10, 5, 10];

$calculadora = new Calculadora();
$media = $calculadora->calculaMedia($notas);

echo "<p>A média é: $media</p>";