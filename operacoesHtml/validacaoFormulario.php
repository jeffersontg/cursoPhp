
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php 
        $validacoes = [];
        if (isset($_POST["nome"])){
            if  ($_POST["nome"] === "") {
                $validacoes[] = "O nome não pode ser vazio!";
            }

            if  ($_POST["endereco"] === "") {
                $validacoes[] = "O endereco não pode ser vazio!";
            }

            if  ($_POST["cidade"] === "") {
                $validacoes[] = "A cidade não pode ser vazia!";
            }            

            $nome = $_POST["nome"];
            $endereco = $_POST["endereco"];
            $bairro = $_POST["bairro"];
            $cidade = $_POST["cidade"];
            $cep = $_POST["cep"];
        } else {
            $nome = '';
            $endereco = '';
            $bairro = '';
            $cidade = '';
            $cep = '';
        }
    ?>
    <?php if (count($_POST) > 0 ): ?>
    <ul>
       <?php foreach($validacoes as $validacao): ?>
            <li> <?= $validacao ?> </li>
       <?php endforeach; ?> 
    <ul>   
    <?php endif;  ?>

    <br>
    
    <form method='POST' action='validacaoFormulario.php'>
        <div>
            <input type="text" name="nome" placeholder="Nome" value="<?= $nome ?>" />
        </div>
        <div>
            <input type="text" name="endereco" placeholder="Endereço" value="<?= $endereco ?>" />
        </div>
        <div>
            <input type="text" name="bairro" placeholder="Bairro" value="<?= $bairro ?>" />
        </div>
        <div>
            <input type="text" name="cidade" placeholder="Cidade" value="<?= $cidade ?>" />
        </div>
        <div>
            <input type="text" name="cep" placeholder="Cep" value="<?= $cep ?>" />
        </div>

        <input type="submit" value="Enviar"/>
    </form>


</body>
</html>