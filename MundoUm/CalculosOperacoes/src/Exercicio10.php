<?php

printf("Digite seu valor na carteira: R$ ");
$dinheiro = floatval(trim(fgets(STDIN)));

$cambioDolarParaReal = 5.45;

$dinheiroEmDolar = $dinheiro / $cambioDolarParaReal;

printf("Seu dinheiro em dolar: US$ %.2f\n", $dinheiroEmDolar);
