<?php

$variavel1 = 7;
$variavel2 = 8;
$variavel3 = 4;


// Exemplo de if aninhado
if ($variavel1 > $variavel2){
    echo 'Variavel1 maior que Variavel2 <br>';
} else {
    if ($variavel2 > $variavel3){

        echo "Entrando no if aninhado nivel 1 <br>";

        if (5>3){
            echo "Entrando no if aninhado nivel 2 <br>";
        }
    }    
}
// Switch
echo "TESTE DE SWITCH <br>";
$variavelTesteSwitch = 1;
switch ($variavelTesteSwitch) {
    case 1:
        echo "A variavel testada no switch é 1";
        break;
    case 2:
        echo "A variavel testada no switch é 2";
        break;
    case 3:
        echo "A variavel testada no switch é 3";
        break;
    case 4:
        echo "A variavel testada no switch é 4";
        break;
    case 5:
        echo "A variavel testada no switch é 5";
        break;
    default:
        echo "A variavel testada no switch não é nada que eu esperava...";        
        break;
}


?>