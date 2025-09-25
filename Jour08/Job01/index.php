<?php
session_start();

if (isset($_POST['reset'])) {
    // Réinitialise le compteur
    $_SESSION['nbvisites'] = 0;
} else {
    // Initialise si absent puis incrémente
    if (!isset($_SESSION['nbvisites'])) {
        $_SESSION['nbvisites'] = 0;
    }
    $_SESSION['nbvisites']++;
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Compteur de visites (session)</title>
</head>
<body>
    <p>Nombre de visites : <strong><?php echo $_SESSION['nbvisites']; ?></strong></p>
    <form method="post">
        <button type="submit" name="reset">reset</button>
    </form>
</body>
</html>