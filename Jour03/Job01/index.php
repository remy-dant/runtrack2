<?php
// Tableau des nombres et indiquer si ils sont pairs ou impairs
$nombres = [200, 204, 173, 98, 171, 404, 459];
?>


<table border="1" cellpadding="5" cellspacing="0">
	<tr>
		<th>Nombre</th>
		<th>Type</th>
	</tr>
	<?php
	foreach ($nombres as $nombre) {
		echo '<tr>';
		echo '<td>' . $nombre . '</td>';
		if ($nombre % 2 == 0) {
			echo '<td>paire</td>';
		} else {
			echo '<td>impaire</td>';
		}
		echo '</tr>';
	}
	?>
</table>
