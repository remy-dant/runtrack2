<?php
// Morpion minimal en session
session_start();

if (!isset($_SESSION['grid']) || isset($_POST['reset'])) {
    $_SESSION['grid'] = array_fill(0, 9, '-');
    $_SESSION['player'] = 'X';
    $_SESSION['finished'] = false;
    $_SESSION['message'] = '';
}

$g = &$_SESSION['grid'];
$p = &$_SESSION['player'];
$finished = &$_SESSION['finished'];
$message = &$_SESSION['message'];

function winner($g) {
    $lines = [
        [0,1,2],[3,4,5],[6,7,8],
        [0,3,6],[1,4,7],[2,5,8],
        [0,4,8],[2,4,6]
    ];
    foreach ($lines as $L) {
        if ($g[$L[0]] !== '-' && $g[$L[0]] === $g[$L[1]] && $g[$L[1]] === $g[$L[2]]) {
            return $g[$L[0]];
        }
    }
    return '';
}

if (!$finished) {
    for ($i=0;$i<9;$i++) {
        if (isset($_POST['c'.$i])) {
            if ($g[$i] === '-') {
                $g[$i] = $p;
                $w = winner($g);
                if ($w !== '') {
                    $message = $w.' a gagné';
                    $finished = true;
                } elseif (!in_array('-', $g, true)) {
                    $message = 'Match nul';
                    $finished = true;
                } else {
                    $p = ($p === 'X') ? 'O' : 'X';
                }
            }
            break;
        }
    }
}

if ($finished) {
    // réinitialisation immédiate après affichage message sur rechargement
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Job05 Morpion</title>
</head>
<body>
<?php if ($message !== '') echo '<p>'.$message.'</p>'; ?>
<form method="post">
<table>
<?php for($r=0;$r<3;$r++): echo '<tr>'; for($c=0;$c<3;$c++): $i=$r*3+$c; echo '<td>'; if($g[$i]==='-'){ echo '<button class="back-button" type="submit" name="c'.$i.'" style="border-radius: 80% !important;">-</button>'; } else { echo $g[$i]; } echo '</td>'; endfor; echo '</tr>'; endfor; ?>
</table>
<p>Joueur courant : <?php echo $finished?'-':$p; ?></p>
<button class="back-button" type="submit" name="reset" >réinitialiser la partie</button>
</form>
</body>
</html>