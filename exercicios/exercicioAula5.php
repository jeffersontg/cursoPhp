<?php

//1 - Declarem variáveis:
$variavelString = "10";
$variavelInteira1 = 5;
$variavelInteira2 = 3;

// 2 - Fazer um cast de string para 
// inteiro na $variavelString
$variavelString = (int)$variavelString;

/*
3 - Fazer uma multiplicação por 2 
usando um operador de 
atribuição/multiplicação na 
$variavelString
*/

$variavelString *= 2;

/*
4 - Escrevam na tela como resultado 
de um teste usando um if/else ou o que 
quiserem:
*/
/*
-> Se $variavelInteira1 for 
    maior que 2, escreva "5 é maior 
	que 2"
*/

if ($variavelInteira1 > 2){
    echo "5 é maior que 2";
}
echo "<br>";

/*
-> Se $variavelInteira1 for maior 
    que $variavelInteira2, escreva 
   "$variavelInteira1 é maior que 
   $variavelInteira2 ", senão
   "$variavelInteira1 é 
   menor que $variavelInteira2 "
*/

if ($variavelInteira1 > $variavelInteira2) {
    echo '$variavelInteira1 é maior que $variavelInteira2';
} else {
    echo '$variavelInteira1 é menor que $variavelInteira2';
}

?>