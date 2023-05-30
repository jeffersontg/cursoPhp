<?php

$variavelInteira = 5;
$variavelResultado = 0;
echo 'Tipo da variável $variavelResultado antes da operação: ' . gettype($variavelResultado) . "<br>";
$variavelResultado = $variavelInteira / 2;

echo 'O resultado é: ';
echo $variavelResultado;
echo "<br>";
echo 'Tipo da variável $variavelResultado após a operação: ' . gettype($variavelResultado) . "! <br>";