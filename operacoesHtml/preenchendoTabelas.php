<?php

    $teste = [ 
        ['nome' => 'Jefferson',
        'idade' => 'Indefinida'],
        ['nome' => 'Jefferson',
        'idade' => 'Indefinida'],
        ['nome' => 'Jefferson',
        'idade' => 'Indefinida']

    ]

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
    print_r($teste); 
    ?>
    <br>
    <?php 
        foreach ($teste as $testelinha) {
            echo $testelinha['nome'];
            echo '<br>';
        }
    ?>

</body>
</html>