<?php

echo "Digite um número: ";
$numero = (int) trim(fgets(STDIN));

$antecessor = $numero - 1;
$sucessor = $numero + 1;

printf("O sucessor e antecessor de %d são %d e %d\n", $numero, $sucessor, $antecessor);
