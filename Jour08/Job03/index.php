<?php
if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
}

if (isset($_POST['reset'])) {
    $_SESSION['prenoms'] = [];
} elseif (isset($_POST['prenom'])) {
    $p = trim($_POST['prenom']);
    if ($p !== '') {
        if (!isset($_SESSION['prenoms']) || !is_array($_SESSION['prenoms'])) {
            $_SESSION['prenoms'] = [];
        }
        $_SESSION['prenoms'][] = $p;
    }
}
$liste = isset($_SESSION['prenoms']) ? $_SESSION['prenoms'] : [];
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Job03</title>
</head>
<body>
<form method="post">
    <input type="text" name="prenom" placeholder="prenom">
    <button class="back-button" type="submit">Ajouter</button>
</form>
<form method="post">
    <button class="back-button" type="submit" name="reset">reset</button>
</form>
<?php
if ($liste) {
    echo '<ul>';
    foreach ($liste as $pr) {
        echo '<li>'.htmlspecialchars($pr, ENT_QUOTES, 'UTF-8').'</li>';
    }
    echo '</ul>';
}
?>
</body>
</html>