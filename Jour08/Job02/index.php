<?php
$nom = 'nbvisites';
if (isset($_POST['reset'])) {
	setcookie($nom, '0', time()+3600);
	$nb = 0;
} else {
	if (!isset($_COOKIE[$nom])) {
		$nb = 1;
	} else {
		$nb = (int)$_COOKIE[$nom] + 1;
	}
	setcookie($nom, (string)$nb, time()+3600);
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>nbvisites</title>
</head>
<body>
<p>Nombre de visites : <strong><?php echo $nb; ?></strong></p>
<form method="post">
	<button type="submit" name="reset">reset</button>
</form>
</body>
</html>
