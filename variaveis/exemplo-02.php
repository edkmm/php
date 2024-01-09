<?php

/*$anoNascimento = 1990;
$nomeCompleto = "";*/

$nome1 = "João";

$sobrenome = "Rangel";

$nomeCompleto = $nome1." ".$sobrenome;

echo $nomeCompleto;

exit;

echo $nome1;

echo "<br/>";

unset($nome1);

if (isset($nome)) {
    echo $nome1;
} else echo "Varíavel nome não definida";

echo $nome1;

?>