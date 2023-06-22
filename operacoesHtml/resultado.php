<!DOCTYPE html>
<html> 
    <head> 
        <title>Documento teste - Form</title>
    </head>
    <body> <!-- Determina o inicio do corpo do documento   -->

        <?php
            $metodo = $_SERVER['REQUEST_METHOD'];
        ?>
        <h1> Resultado! </h1>

        <h2> Via metodo: <?= $metodo ?> </h2>

        <?php
            if ($metodo=='GET'):
        ?>    

        <?= $_GET['nome'] ?><br>
        <?= $_GET['endereco'] ?><br>

        <?php 
            else:
        ?>
            <?= $_POST['nome'] ?><br>
            <?= $_POST['endereco'] ?><br>

        <?php 
            endif;
        ?>

    </body>
</html>