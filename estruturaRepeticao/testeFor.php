<?php

require_once "../includes/arquivoRequire.php";

// 1o. elemento do for: inicialização da variável
// 2o. elemento: teste da condição para execução do for
// 3o. elemento: como vai ser incrementado ou decrementado a variável de controle

require_once "../includes/arquivoRequire.php";


$array = [23,1,2,3,4,5,6,7,8,9,10];

echo $array[0] ;
echo "<br>";
echo $array[1] ;
echo "<br>";
echo $array[2] ;
echo "<br>";
echo $array[3] ;
echo "<br>";
echo $array[4] ;
echo "<br>";
echo $array[5] ;
echo "<br>";
echo $array[6] ;
echo "<br>";
echo $array[7] ;
echo "<br>";
echo $array[8] ;
echo "<br>";
echo $array[9] ;
echo "<br>";
echo $array[10] ;
echo "<br>";
echo "<br>";

echo 'Agora com o for.... <br>';

for ($i = 0; $i <= 10 ; $i++){

    echo $array[$i]; 
    echo '<br>';

}



?>