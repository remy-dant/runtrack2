<?php
//Faire un algorithme qui affiche un rectangle de 20 de largeur par 10 de hauteur. Ces
//dimensions devront être stockées dans deux variables $largeur et $hauteur, modifiables
//facilement.

$largeur = 20;
$hauteur = 10;

for ($i = 1; $i <= $hauteur; $i++) {
    for ($j = 1; $j <= $largeur; $j++) {
        echo "*";
    }
    echo "<br>";
}
    ?>