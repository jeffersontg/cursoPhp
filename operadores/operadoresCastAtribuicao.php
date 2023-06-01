<?php
# Exemplo de cast
$variavel1 = "5";
echo 'O tipo da $variavel1 é: ' . gettype($variavel1);
echo '<br>';

$variavel1 = (int)$variavel1;
echo 'Agora o tipo da $variavel1 é: ' . gettype($variavel1);

# Exemplo de atribuição
echo '<br>';
$variavel1 += 2;
echo 'Agora o valor da $variavel1 é: ' . $variavel1;

echo '<br>';
$variavel1 -= 3;
echo 'Agora o valor da $variavel1 é: ' . $variavel1;

echo '<br>';
$variavel1 *= 2;
echo 'Agora o valor da $variavel1 é: ' . $variavel1;

echo '<br>';
$variavel1 %= 3;
echo 'Agora o valor da $variavel1 é: ' . $variavel1;


echo '<br>';
$variavel1 = $variavel1 + (int)"3";
echo 'Agora o valor da $variavel1 é: ' . $variavel1;

echo '<br>';
$variavel1 = "5" . "3";
echo 'Agora o valor da $variavel1 é: ' . $variavel1;


echo '<br>';
$arr = "nome";
$var = (array)$arr;
echo '$var é: ' . $var[0];

?>