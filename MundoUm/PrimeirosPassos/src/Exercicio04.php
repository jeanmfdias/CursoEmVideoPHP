<?php

echo "Digite um texto: ";
$texto = trim(fgets(STDIN));

echo "É vazio? " . (empty($texto) ? "Sim" : "Não") . PHP_EOL;
echo "É um número? " . (is_numeric($texto) ? "Sim" : "Não") . PHP_EOL;
echo "É alfabético? " . (ctype_alpha($texto) ? "Sim" : "Não") . PHP_EOL;
echo "É alfanumérico? " . (ctype_alnum($texto) ? "Sim" : "Não") . PHP_EOL;
echo "Está em maiúsculas? " . (ctype_upper($texto) ? "Sim" : "Não") . PHP_EOL;
echo "Está em minúsculas? ". (ctype_lower($texto) ? "Sim" : "Não") . PHP_EOL;
echo "Está capitalizado? " . (ucfirst($texto) === $texto ? "Sim" : "Não") . PHP_EOL;
echo "Tipo do texto: " . gettype($texto) . PHP_EOL;
