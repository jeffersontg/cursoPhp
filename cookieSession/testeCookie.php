<?php

    if (isset($_COOKIE['nome'])){
        $nome = $_COOKIE['nome'];
    } else {
        $nome = "Não definido";
        setcookie('nome','Jefferson', time() + 3600 );
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
    <h1>Exemplo de COOKIE</h1>
    <h2>Nome:  <?= $nome ?> </h2>

</body>
</html>