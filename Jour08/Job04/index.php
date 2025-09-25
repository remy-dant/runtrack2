<?php
// Formulaire connexion par cookie "prenom" + déconnexion
$cookie = 'prenom';

if (isset($_POST['deco'])) {
    setcookie($cookie, '', time()-3600);
    header('Location: '.$_SERVER['PHP_SELF']);
    exit;
}

if (isset($_POST['connexion']) && isset($_POST['prenom'])) {
    $p = trim($_POST['prenom']);
    if ($p !== '') {
        setcookie($cookie, $p, time()+3600);
        header('Location: '.$_SERVER['PHP_SELF']);
        exit;
    }
}
$logged = isset($_COOKIE[$cookie]) ? $_COOKIE[$cookie] : '';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Job04</title>
</head>
<body>
<?php if ($logged === ''): ?>
<form method="post">
    <input type="text" name="prenom" placeholder="prenom"><br>
    <button class="back-button" type="submit" name="connexion">connexion</button>
</form>
<?php else: ?>
<p>Bonjour <?php echo htmlspecialchars($logged, ENT_QUOTES, 'UTF-8'); ?> !</p>
<form method="post">
    <button class="back-button" type="submit" name="deco">Déconnexion</button>
</form>
<?php endif; ?>
</body>
</html>