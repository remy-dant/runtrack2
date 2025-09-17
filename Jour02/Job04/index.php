<?php
//Affichage des nombres de 0 à 100
//Remplacer les multiples de 3 par Fizz
//Remplacer les multiples de 5 par Buzz
//Remplacer les multiples de 3 et 5 par FizzBuzz

for ($i = 0; $i <= 100; $i++) {
    if ($i  % 5 == 0 && $i % 3 == 0) {
        echo "FizzBuzz<br>";
    } elseif ($i % 3 == 0) {
        echo "Fizz<br>";
    } elseif ($i  % 5 == 0) {
        echo "Buzz<br>"; 
    } else {
        echo "$i<br>";
    }
}
    ?>