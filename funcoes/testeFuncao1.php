<?php

    //Cabeçalho
    include "../includes/html/cabecalho.php";
    //Fim do Cabeçalho

    include "funcoes.php";

    // Corpo da página    
    echo "<br>";
    exibeSoma(2,5);

    $resultadoSoma = retornaSoma(2,8);
    echo "O resultado da função retornaSoma é $resultadoSoma <br>";

    $resultadoSoma = retornaSomaDefault(4,50);
    echo "O resultado da função retornaSoma com padrão é $resultadoSoma <br>";

    $resultadoArray = retornaArrayDeValores();
    echo "O resultado da função retornaArray é $resultadoArray[1] <br>";



    //Fim Corpo da página

    // Rodapé
?>