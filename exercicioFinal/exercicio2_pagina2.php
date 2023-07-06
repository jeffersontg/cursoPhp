<?php


if (isset($_POST["nome"])){
        echo "O nome é " . $_POST['nome'] . '<br>';
    } else {
        echo 'Não foi informado nada ainda!';
    }


if (isset($_POST["endereco"])){
    echo "O endereço é " . $_POST['endereco'];
} else {
    echo 'Não foi informado endereço ainda!';
}

?>