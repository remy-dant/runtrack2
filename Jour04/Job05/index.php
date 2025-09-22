
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>Formulaire de connexion de type POST</title>
</head>
<body>
<form method="POST" action="">
	
	<input type="text" name="username" placeholder="Username">
	<input type="password" name="password" placeholder="Password">
	<input type="submit" value="Envoyer">

</form>
</body>
</html>

<?php
	if (isset($_POST['username']) && isset($_POST['password'])) {
		if ($_POST['username'] === "John" && $_POST['password'] === "Rambo") {
			echo "C’est pas ma guerre";
		} 
		else if ($_POST['username'] !== "" || $_POST['password'] !== "") {
			echo "Votre pire cauchemar";
		}
        else {
			echo "Veuillez entrer vos identifiants";
		}
	}
?>