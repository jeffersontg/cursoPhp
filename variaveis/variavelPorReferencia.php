<?php

$x = 1;
$y =& $x;


echo "Mostrando o conteúdo de x: ";
echo $x;
echo '<br>';
echo "Mostrando o conteúdo de y: ";
echo $y;

$y = 2;

echo '<br>';
echo "Mostrando o conteúdo de x: ";
echo $x;
echo '<br>';
echo "Mostrando o conteúdo de y: ";
echo $y;
