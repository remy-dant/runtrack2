
<?php
// Compter le nombre de voyelles et de consonnes dans une chaîne
$str = "On n’est pas le meilleur quand on le croit mais quand on le sait";
$dic = ["voyelles" => 0, "consonnes" => 0];
$voyelles = ['a', 'e', 'i', 'o', 'u', 'y', 'A', 'E', 'I', 'O', 'U', 'Y', 'é', 'è', 'ê', 'ë', 'à', 'â', 'ä', 'î', 'ï', 'ô', 'ö', 'ù', 'û', 'ü'];
for ($i = 0; $i < strlen($str); $i++) {
	$char = $str[$i];
	if (ctype_alpha($char)) {
		if (in_array(mb_strtolower($char, 'UTF-8'), $voyelles)) {
			$dic["voyelles"]++;
		} else {
			$dic["consonnes"]++;
		}
	}
}
?>

<table border="1">
	<thead>
		<tr>
			<th>Voyelles</th>
			<th>Consonnes</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td><?php echo $dic["voyelles"]; ?></td>
			<td><?php echo $dic["consonnes"]; ?></td>
		</tr>
	</tbody>
</table>
