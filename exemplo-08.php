<?php

$resultado = (10 + 3) / 2; // matemática normal

echo $resultado;

echo "<br>";

$resultado2 = (10 + 3) / 2 > 5 && 10 + 5 < 3; // primeiro a matematica, depois comparadores, por ultimo &&

var_dump ($resultado2); // comparação precisa ser var_dump pelo resultado booleano

echo "<br>";

$resultado3 = (10 + 3) / 2 > 5 || 10 + 5 < 3; // || é o OR

var_dump ($resultado3);

?>