

<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="UTF-8">
	<title>Formulaire $_GET</title>
</head>

<body>
	<form method="$_GET" action="">
		<input type="text" name="Nom" placeholder="Nom">
		<input type="text" name="Prenom" placeholder="Prénom">
		<input type="submit" value="Envoyer">
	</form>
</body>

</html>

<?php
	$count = 0;
	foreach($_GET as $key => $value) {
		$count = $count + 1;
	}
	if (isset($_GET) && $count > 0) {
		echo "Le nombre d'argument GET envoyé est : " . $count;
	}
	?>