<?php

echo "Digite o salário do funcionário R$ ";
$salario = floatval(trim(fgets(STDIN)));

$salarioComAumento = $salario * 1.15;

echo "O salário com aumento de 15% é R$ " . number_format($salarioComAumento, 2) . PHP_EOL;
