<?php

echo "Digite um valor em metros: ";
$metros = (float) trim(fgets(STDIN));

$centimetros = $metros * 100;
$milimetros = $metros * 1000;

printf("%d metros em centimento é %d e em milimetros é %d\n", $metros, $centimetros, $milimetros);
