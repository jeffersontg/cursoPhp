<!DOCTYPE html>
<html> 
    <head> 
        <title>Documento teste - Form</title>
    </head>
    <body> <!-- Determina o inicio do corpo do documento   -->

        <?php
            if (isset($_POST['ingredientes'])): 
        ?>
        <div>
            A variável ingredientes possui os elementos: <?= print_r($_POST['ingredientes']) ?>
        </div>
        <?php
            endif;
        ?>
        


        <form action="multiplosValores.php" method="POST">
            <div>
                <input type="checkbox"  name='ingredientes[]' value="tomate"> Tomate
            </div>
            <div>
                <input type="checkbox"  name='ingredientes[]' value="cebola"> Cebola
            </div>
            <div>
                <input type="checkbox"  name='ingredientes[]' value="pimentao"> Pimentão
            </div>
            <div>
                <input type="checkbox"  name='ingredientes[]' value="batata"> Batata
            </div>
            <div>
                <input type="checkbox"  name='ingredientes[]' value="cenoura"> Cenoura
            </div>

            <div>
                <input type="submit" id='enviar' name='enviar' value="Enviar">
            </div>
            
        </form>
    </body>
</html> 
