<?php

$a = NULL;

$b = 8;

$c = 10;

echo $a ?? $b ?? $c; // ?? se for nulo, mostrar o próximo, ignorando os seguintes quando algum não for nulo

?>