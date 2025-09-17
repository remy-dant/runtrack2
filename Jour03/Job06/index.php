<?php
$str = "Les choses que l'on possède finissent par nous posséder";

// Inversion sûre en UTF-8
$len = mb_strlen($str, 'UTF-8');
$inverse = '';
for ($i = $len - 1; $i >= 0; $i--) {
	$inverse .= mb_substr($str, $i, 1, 'UTF-8');
}

echo $inverse;
?>
