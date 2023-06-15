<?php

// Esta função é um exemplo de funcionamento com parâmetros

function exibeSoma($a, $b){
    echo $a + $b;
    echo "<br>";
}


// Esta função é um exemplo de funcionamento com parâmetros e retorno de valor
function retornaSoma($a, $b){
    return $a + $b;
}

// Esta função é um exemplo de funcionamento com retorno com vários valores por
function retornaSomaDefault($a, $b = 10){
    return $a + $b;
}


// Esta função é um exemplo de funcionamento com retorno com vários valores por array
function retornaArrayDeValores(){
    $arrayRetorno = ['Manga','Macaúba','Siriguela'];
    return $arrayRetorno;
}
?>