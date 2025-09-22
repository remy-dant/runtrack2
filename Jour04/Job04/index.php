<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>Afficher les arguments POST</title>
</head>
<body>
<form method="POST" action="">
	
	<br>
	<input type="text" name="Prenom" placeholder="Prenom">
	<input type="text" name="Nom" placeholder="Nom">
	<input type="text" name="Age" placeholder="Age">
	<input type="submit" value="Envoyer">
	<br>
	<table border="1">
		<tr><th>Argument</th><th>Valeur</th></tr>
		<tr>
			<td>Prenom</td>
			<td>
				<?php
				if (isset($_POST['Prenom'])) {
					echo $_POST['Prenom'];
				} else {
					echo "";
				}
				?>
			</td>
		</tr>
		<tr>
			<td>Nom</td>
			<td>
				<?php
				if (isset($_POST['Nom'])) {
					echo $_POST['Nom'];
				} else {
					echo "";
				}
				?>
			</td>
		</tr>
		<tr>
			<td>Age</td>
			<td>
				<?php
				if (isset($_POST['Age'])) {
					echo $_POST['Age'];
				} else {
					echo "";
				}
				?>
			</td>
		</tr>
	</table>
</form>
</body>
</html>

