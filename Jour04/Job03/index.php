<?php
	$count = 0;
	foreach($_POST as $key => $value) {
		$count = $count + 1;
	}
	if (isset($_POST) && $count > 0) {
		echo "Le nombre d'argument POST envoyé est : " . $count;
	}
	?>

<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="UTF-8">
	<title>Formulaire $_POST</title>
</head>

<body>
	<form method="POST" action="">
		<input type="text" name="Nom" placeholder="Nom">
		<input type="text" name="Prenom" placeholder="Prénom">
		<input type="submit" value="Envoyer">
	</form>
</body>

</html>
