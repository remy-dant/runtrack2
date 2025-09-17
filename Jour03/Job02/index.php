<?php
// Afficher les caractères d'une chaîne à des positions paires
$str = "Tous ces instants seront perdus dans le temps comme les larmes sous la pluie.";
for ($i = 0; $i < strlen($str); $i += 2) {
	echo $str[$i];
}
?>
