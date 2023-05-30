<?php
$variavelExemplo = "Global!!";

echo "Mostrando o escopo da variável global: <br>";
echo $variavelExemplo;
echo "<br>";

function testeDeEscopo(){
    $variavelExemplo = "Local";
    echo "Mostrando o escopo da variável local: <br>";
    echo $variavelExemplo;
    echo "<br>";
}

function outraFuncao() {
    $variavelExemplo = "Local2";
    echo "Mostrando o escopo da variável local: <br>";
    echo $variavelExemplo;
    echo "<br>";
}

testeDeEscopo();
outraFuncao();

echo "<br>";
echo "Mostrando o escopo da variável global: <br>";
echo $variavelExemplo;
echo "<br>";