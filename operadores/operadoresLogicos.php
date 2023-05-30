<?php

$variavel1 = "2";
$variavel2 = 2;

$variavel3 = "3";
$variavel4 = 4;


echo "Comparação de bloco1 e bloco2: <br>";
echo "Resultado da comparação (AND) : " .  ( ($variavel1 == $variavel2) && ($variavel3 == $variavel4)  )  . "<br>";
echo "<br>";

echo "Comparação de bloco1 e bloco2: <br>";
echo "Resultado da comparação (OR) : " .  ( ($variavel1 == $variavel2) || ($variavel3 == $variavel4)  )  . "<br>";
echo "<br>";

echo "Comparação de bloco1 e bloco2: <br>";
echo "Resultado da comparação (NOT) : " .  (  !($variavel1 == $variavel2)  )  . "<br>";
echo "<br>";


?>