
<?php

$array = [1, 'dois', 3, 'quatro', 5, 'seis', 7, 'oito', 9, 'dez'];
$varcontador = 0;

// Loop while para percorrer o array
while ($varcontador < count($array)) {
    // Verifica se o elemento é do tipo string
    if (is_string($array[$varcontador])) {
        echo $array[$varcontador] . "<br>";
    }
    $varcontador++;
}
?>