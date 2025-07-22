<?php

echo "Digite duas notas do aluno: ";
$nota1 = (float) trim(fgets(STDIN));
$nota2 = (float) trim(fgets(STDIN));

$media = ($nota1 + $nota2) / 2;

echo "A média do aluno é: " . number_format($media, 2, '.', '');