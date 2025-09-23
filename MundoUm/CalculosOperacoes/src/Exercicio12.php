<?php

echo "Digite o preço do produto: R$ ";
$preco = floatval(trim(fgets(STDIN)));

$precoComDesconto = $preco - ($preco * 0.05);

echo "O produto com 5% de desconto é R$ " . number_format($precoComDesconto, 2) . PHP_EOL;
