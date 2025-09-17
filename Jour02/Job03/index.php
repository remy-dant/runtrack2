<?php
//Affichage des nombres de 0 à 100
//Les nombres entre 0 et 20 sont en italique
//Les nombres entre 25 et 50 sont soulignés

for ($i = 0; $i <= 100; $i++) {
    if ($i == 42) {
        echo "La Plateforme_<br>";
    } elseif ($i >= 0 && $i <= 20) {
        echo "<i>$i</i><br>";
    } elseif ($i > 25 && $i <= 50) {
        echo "<u>$i</u><br>";
    } else {
        echo "$i<br>";
    }
}
    ?>