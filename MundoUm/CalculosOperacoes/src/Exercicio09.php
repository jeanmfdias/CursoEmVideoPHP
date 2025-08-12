<?php

printf("Digite um número: ");
$numero = (int) trim(fgets(STDIN));

printf("\nTabuada do %d\n", $numero);
for ($i = 0; $i <= 10; $i++) {
    printf("%d x %d = %d\n", $numero, $i, $numero * $i);
}
