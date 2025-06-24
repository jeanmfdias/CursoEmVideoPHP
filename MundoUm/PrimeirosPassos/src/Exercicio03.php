<?php

echo "Digite um número: ";
$numero = trim(fgets(STDIN));
echo "Digite outro número: ";
$numero2 = trim(fgets(STDIN));

$soma = $numero + $numero2;

echo "A some entre $numero e $numero2 é $soma" . PHP_EOL;
