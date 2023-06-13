<?php

    //Cabeçalho
    include "../includes/arquivoInclude.php";
    //Fim do Cabeçalho

    include "funcoes.php";

    // Corpo da página    
    echo "<br>";
    exibeSoma(2,5);

    $resultadoSoma = retornaSoma(2,8);
    echo "O resultado da função retornaSoma é $resultadoSoma <br>";
    //Fim Corpo da página

    // Rodapé
?>