<?php
// Compter le nombre de caractères dans une chaîne
$str = "Dans l'espace, personne ne vous entend crier";
$compteur = 0;
for ($i = 0; $i < strlen($str); $i++) {
	$compteur++;
}
echo "Nombre de caractères : $compteur";
?>
