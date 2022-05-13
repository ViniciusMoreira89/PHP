<?php

$anoNascimento = 1989;

$nomeCompleto = "";

$nome1 = "João";

//$1nome não pode começar com número e evitar caracteres especiais exceto underline que na verdade se chama underscore

//$this esse e outros não pode usar, será visto depois na aula

$sobrenome = "Rangel";

$nomeCompleto = $nome1 . " " . $sobrenome; //concatenação em PHP é . e não +

echo $nome1;

echo "<br>";

echo $nomeCompleto;

exit; //termina a execução aqui

unset($nome1); //pode botar mais variáveis, separadas por virgula e dentro do parenteses

if (isset($nome1)) { //isset só exibe a variável se ela estiver declarada, evitando mensagem de erro / "is set", if it's set

        echo $nome1;

}

?>