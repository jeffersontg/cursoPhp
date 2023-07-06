<?php

/*
1 - Crie um programa/página em PHP que atenda aos seguintes pontos:
Tenha um array com cinco ou mais itens
Exiba o conteúdo desse array, linha a linha
*/

$array = ['Arroz','Feijão','Macarrão','Salada','Ovo estrelado'];

for ($contador = 0; $contador<count($array); $contador++){
    echo "O elemento $contador : " . $array[$contador] . " <br>";
}


?>