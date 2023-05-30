<?php
function testeDeEscopo(){
    $variavelNormal = 0;
    $variavelNormal++;  

    // $variavelNormal = $variavelNormal + 1;

    echo "Mostrando variável local normal: <br>";
    echo $variavelNormal;
    echo "<br>";
}

testeDeEscopo();
testeDeEscopo();
testeDeEscopo();

function testeDeEscopoStatic(){
    static $variavelStatic = 0;
    $variavelStatic++;
    echo "Mostrando variável local static: <br>";
    echo $variavelStatic;
    echo "<br>";
}


testeDeEscopoStatic();
testeDeEscopoStatic();
testeDeEscopoStatic();
