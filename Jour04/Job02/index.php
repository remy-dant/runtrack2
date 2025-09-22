<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>Afficher les arguments POST</title>
</head>
<body>
<form method="GET" action="">
	
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
				if (isset($_GET['Prenom'])) {
					echo htmlspecialchars($_GET['Prenom']);
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
				if (isset($_GET['Nom'])) {
					echo htmlspecialchars($_GET['Nom']);
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
				if (isset($_GET['Age'])) {
					echo htmlspecialchars($_GET['Age']);
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