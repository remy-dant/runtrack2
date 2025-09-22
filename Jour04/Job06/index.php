
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>Formulaire Pair & Impair de type GET</title>
</head>
<body>
	<table>
<form method="GET" action="">
	
	<input type="text" name="Nombre" placeholder="Nombre">
	<input type="submit" value="Envoyer">

</form>
</body>
</html>

<?php
	if (isset($_GET['Nombre'])) {
		$nombre = $_GET['Nombre'];
		if ($nombre === "") {
			echo "Veuillez entrer un nombre";
		} else if ($nombre === "0" || ($nombre[0] !== '-' && ctype_digit($nombre)) || ($nombre[0] === '-' && ctype_digit(substr($nombre,1)))) {
			if ($nombre % 2 === 0) {
				echo "Pair";
			} else {
				echo "Impair";
			}
		} 
	}

?>