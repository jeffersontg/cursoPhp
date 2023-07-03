<?php

    session_start();



    if (isset($_SESSION['nome'])){
        $nome = $_SESSION['nome'];

    } else {
        $nome = "Não definido";
        $_SESSION['nome'] = 'Jefferson!';
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Exemplo de SESSION</h1>
    <h2>Nome:  <?= $nome ?> </h2>

</body>
</html>