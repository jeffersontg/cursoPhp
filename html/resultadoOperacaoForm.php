<!DOCTYPE html>
<html> 
    <head> 
        <title>Documento teste - Form</title>
    </head>
    <body> <!-- Determina o inicio do corpo do documento   -->

        <?php

            $metodo = $_SERVER['REQUEST_METHOD'];

            if ($metodo=="GET"){

                $nome = $_GET['nome'];
                $endereco = $_GET['endereco'];
            } else {
                $nome = $_POST['nome'];
                $endereco = $_POST['endereco'];
            }

        ?>

        <h1> Resultado do Form! </h1>
        
        <h2> <?= $metodo ?></h2>
        
        <h3>Nome: <?= $nome ?> </h3> 
        <h3>Endereço: <?= $endereco ?> </h3>
        <h3>Bairro: <?= $_GET["bairro"] ?> </h3> 
        <h3>Cidade: <?= $_GET["cidade"] ?> </h3> 
        <h3>Estado: <?= $_GET["estado"] ?> </h3>
        <h3>CEP: <?= $_GET["cep"] ?> </h3> 
        

        <table>        
            <tr>
                <th>Nome</th>    
                <th>Endereço</th>
                <th>Cidade</th>
                <th>Bairro</th>
                <th>Estado</th>
                <th>Cep</th>
            </tr>
            <tr>
                <td> <?= $nome ?> </td>
                <td><?= $endereco ?> </td>
                <td> <?= $_GET["bairro"] ?> </td> 
                <td> <?= $_GET["cidade"] ?> </td> 
                <td> <?= $_GET["estado"] ?> </td>
                <td> <?= $_GET["cep"] ?> </td> 
            </tr>
        </table>


    </body>
</html>

