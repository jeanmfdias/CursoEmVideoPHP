<?php

echo "Digite um número: ";
$numero = (int) trim(fgets(STDIN));

$dobro = pow($numero, 2);
$tripo = pow($numero, 3);
$raiz = sqrt($numero);

printf("O dobro, triplo e raiz do número %d são %d, %d e %d\n", $numero, $dobro, $tripo, $raiz);