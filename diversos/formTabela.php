<?php

    $lista = [];

    if (isset($_COOKIE['lista'])){
        $lista = $_COOKIE['lista'];
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
    <?php
        print_r($lista); 
    ?>
    <br>
    <?php 
        foreach ($lista as $item) {
            echo $item['nome'];
            echo '<br>';
        }
    ?>


    <form action="formTabela.php">
        <?php 
            $lista[] = [ [ "nome" => "Jefferson", "bairro" => "Parreão"] ]; 
            setcookie('lista', 'Jefferson'); 
        ?>
        <input type="submit" value="Enviar"/>
    </form>
</body>
</html>