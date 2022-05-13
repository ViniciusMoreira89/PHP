<?php

$nome = (int)$_GET["a"];

var_dump($nome); //colocou, após o final do endereço do localhost - ?a=123 e mais depois ainda &b=456
//toda informacao que vier por GET ou POST será string por padrão, aquele (int) antes do $_GET faz mudar

//$ip = $_SERVER["REMOTE_ADDR"];  esse pega o ip
$ip = $_SERVER["SCRIPT_NAME"]; //serve pra pegar dados como ip do usuario, que pagina ele acessou, por qual navegador etc

echo "<br><br>";
echo $ip;

?>