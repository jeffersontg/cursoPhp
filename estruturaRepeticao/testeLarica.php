<?php

// para testar um array

$varArray = ['larica', 1996 , 'idade', 26, 'endereço', 'rua' , 80 , 203 , 'apartamento', 'bloco' ];

$varContador = 0;

while ($varContador<count($varArray)) {
    
    if (gettype($varArray[$varContador]) == 'string'){
        echo 'eh uma string <br>';


    } else {
        echo 'nao eh string <br>';
    }
    $varContador++;
}

?>