<?php

printf("Digite a altura da parede: ");
$altura = floatval(trim(fgets(STDIN)));

printf("Digite a largura da parede: ");
$largura = floatval(trim(fgets(STDIN)));

$area = $altura * $largura;
$litrosDeTinta = $area / 2;

printf("Litros de tinta necessário: " . number_format($litrosDeTinta, 2) . PHP_EOL);
