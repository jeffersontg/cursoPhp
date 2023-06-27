<?php
    $dados = [
        'nome' => 'Alfredo',
        'endereco' => 'Rua das Flores, 141'
    ]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste de preenchimento de formulário</title>
</head>
<body>
    <?php 
        
        if (isset($dados["nome"])){
            $nome = $dados["nome"];
            $endereco = $dados["endereco"];
        } else {
            $nome = '';
            $endereco = '';
        }
    ?>

    <form method='POST' action='preenchendoFormularios.php'>
        <div>
            <input type="text" name="nome" placeholder="Nome" value="<?= $nome ?>" />
        </div>
        <div>
            <input type="text" name="endereco" placeholder="Endereço" value="<?= $endereco ?>" />
        </div>
        <input type="submit" value="Enviar"/>
    </form>

</body>
</html>