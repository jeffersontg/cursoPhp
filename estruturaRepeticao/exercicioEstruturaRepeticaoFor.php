
<?php

$array = [1, 'dois', 3, 'quatro', 5, 'seis', 7, 'oito', 9, 'dez'];


// Loop while para percorrer o array
for ($varcontador=0 ; $varcontador < count($array); $varcontador++) {
    // Verifica se o elemento é do tipo string
    if (is_string($array[$varcontador])) {
        echo $array[$varcontador] . "<br>";
    }

}
?>
