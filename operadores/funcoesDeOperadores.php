<?php

function executaSoma($parametro1, $parametro2){
    echo "Executando a soma dos parametros $parametro1 e $parametro2: ";
    echo $parametro1 + $parametro2;
    echo "<br>";
}

function executaMultiplicacao($parametro1, $parametro2){
    echo "Executando a multiplicação dos parametros $parametro1 e $parametro2: ";
    echo $parametro1 * $parametro2;
    echo "<br>";
}

function executaExponenciacao($parametro1, $parametro2){
    echo "Executando a exponenciação dos parametros $parametro1 e $parametro2: ";
    echo $parametro1 ** $parametro2;
    echo "<br>";
}

function executaResto($parametro1, $parametro2){
    echo "Executando a resto da divisão dos parametros $parametro1 e $parametro2: ";
    echo $parametro1 % $parametro2;
    echo "<br>";
}


executaSoma(10,30);
executaMultiplicacao(4,5);
executaExponenciacao(2,3);
executaResto(5,2);

?>