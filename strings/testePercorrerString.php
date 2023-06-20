<?php

$str = "Curso Php";

echo "O Comprimento da variável é " . strlen($str) . "<br>";
     
for ($i = 0; $i < strlen($str); $i++){

    echo "Elemento $i: " . $str[$i] . "<br>";

}

?>