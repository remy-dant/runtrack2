
<?php
$str = "Certaines choses changent, et d'autres ne changeront jamais.";

// Décalage circulaire des caractères (UTF-8)
$len = mb_strlen($str, 'UTF-8');
$result = '';
for ($i = 0; $i < $len; $i++) {
	// Le dernier prend la place du premier
	$next = ($i + 1) % $len;
	$result .= mb_substr($str, $next, 1, 'UTF-8');
}
echo $result;
?>
