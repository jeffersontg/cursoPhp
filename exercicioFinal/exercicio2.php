<?php
/*
2 - Criar uma página PHP que contenha:

Um formulário com uma caixa de texto (input type=”text”) para Nome e outra para Endereço
Um botão para submeter
Ao submeter a página, deve ser exibido o Nome e o Endereço digitado
Usar método POST!
*/

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="exercicio2_pagina2.php" method="POST">
        <div>
            <input type="text" name="nome" placeholder="Digite o Nome" />
        </div>
        <div>
            <input type="text" name="endereco" placeholder="Digite o Endereço" />
        </div>
        <div>
            <input type="submit" value="Enviar" />
        </div>

    </form>
</body>
</html>