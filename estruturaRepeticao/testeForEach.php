<?php

$array = ['Jefferson', 'João', 'Marta', 'Marcus'];

for ($i = 0 ; $i < count($array) ; $i++){
    echo "O elemento atual é o $array[$i] <br>";
}

echo "agora com o foreach....<br>";


foreach($array as $x){
    echo "O elemento atual é o $x <br>";
}

echo "agora com o do/while....<br>";

$contador = 0;
do {
    echo "O elemento atual é o $array[$contador] <br>";
    $contador++;
} while ($contador < 4)

?>

