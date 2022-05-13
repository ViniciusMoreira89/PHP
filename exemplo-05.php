<?php

$nome = "Glaucio"; //variaveis criadas fora de funcoes nao podem ser vistas dentro da funcao, precisa chamar por dentro

function teste() {

    global $nome; //assim que "importa" a variavel externa para dentro da função
    echo $nome;

}

function teste2() {

    $nome = "João"; //mesmo nome da variavel global mas nao interfere nela por so funcionar aqui dentro
    echo "<br><br>";
    echo $nome . " agora no teste 2";

}

teste();

teste2();

// variáveis com $_GET e outras sao super globais, vão funcionar em qualquer parte do código

?>