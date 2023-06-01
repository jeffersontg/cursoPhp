<?php

// Estrutura if simples
echo "Vamos verificar se 5>3....";
if (5>3) {
    echo "ok";
} 

echo "<br>";

//Exemplo do David Leite
if (5>3):
    echo "OK";
endif;

// Estrutura if simples com else
echo "<br>";
$variavel1 = "5";
$variavel2 = 5;
if ($variavel1 === $variavel2){ 
    echo 'Verifiquei que a $variavel1 é Idêntica a $variavel2!';
} else {
    echo 'Verifiquei que a $variavel1 NÃO é Idêntica a $variavel2!';
}


// Estrutura if um pouco mais complexa
echo "<br>";
$variavel1 = "5";
$variavel2 = 5;
if ( ($variavel1 === $variavel2) && (5>3) ){ // OPERADOR LÓGICO AND
    echo 'Teste de operador AND funcionou!';
} else {
    echo 'Teste de operador AND não funcionou!';
}

echo "<br>";
if ( ($variavel1 === $variavel2) || (5>3) ){ // OPERADOR LÓGICO OR 
    echo 'Teste de operador OR funcionou!';
} else {
    echo 'Teste de operador OR não funcionou!';
}

// Estrutura if um pouco mais complexa AINDA...

echo "<br>";  

    //              TRUE                           TRUE  
if ( ( ($variavel1 === $variavel2) || (5>3) ) && (2==2) ){ // OPERADOR LÓGICO OR e AND 
    echo 'Teste de operadores em conjunto funcionou!';
} else {
    echo 'Teste de operador em conjunto não funcionou!';
}




