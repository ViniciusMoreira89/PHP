<?php

$nome = "Hcode";
$site = 'www.hcode.com.br'; //pode ser aspas simples ou duplas, basta fechar igual abriu

$ano = 1989;
$salario = 5500.99;
$bloqueado = false;
///////////////////////////////////////////////////////////////
$frutas = array("abacaxi", "laranja", "manga");
//outros tipos de variavel é auto identificada e automatica, pra array precisa especificar depois de declarar e colocar os valores dentro;
echo $frutas[2];

$nascimento = new Datetime(); //new é uso de orientacao a objetos

echo "<br><br>";

var_dump($nascimento);
///////////////////////////////////////////////////////////////

$arquivo = fopen("exemplo-03.php", "r");

echo "<br><br>";

var_dump($arquivo);

//null é diferente de uma variável vazia, nulo nao existe valor, vazia existe o valor nada
$nulo = NULL;
$vazio = "";

?>