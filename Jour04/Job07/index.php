<?php
echo "<form method='post'>";
echo "Largeur: <input type='text' name='largeur' required>";
echo "Hauteur: <input type='text' name='hauteur' required>";
echo "<button type='submit'>Vérifier</button>";
echo "</form>";
 
if (isset($_POST['largeur']) && isset($_POST['hauteur'])) {
    // Conversion
    $largeur = 0;
    $hauteur = 0;
    $l_str = $_POST['largeur'];
    $h_str = $_POST['hauteur'];
    for ($i = 0; $i < strlen($l_str); $i++) {
        $c = $l_str[$i];
        if ($c >= '0' && $c <= '9') {
            $largeur = $largeur * 10 + (ord($c) - ord('0'));
        }
    }
    for ($i = 0; $i < strlen($h_str); $i++) {
        $c = $h_str[$i];
        if ($c >= '0' && $c <= '9') {
            $hauteur = $hauteur * 10 + (ord($c) - ord('0'));
        }
    }
 
    if ($largeur > 2 && $hauteur > 1) {
        $maison = "";
 
        // Toit
        for ($i = 0; $i < $hauteur; $i++) {
            // Espaces
            for ($j = 0; $j < $hauteur - $i - 1; $j++) {
                $maison .= " ";
            }
            $maison .= "/";
 
            // Underscores
            $underscores = $largeur - 2 * ($hauteur - $i - 1);
            if ($underscores < 1) $underscores = 1;
            if ($underscores > 1) {
                for ($k = 0; $k < $underscores - 2; $k++) {
                    $maison .= "_";
                }
            }
 
            $maison .= "\\" . "\n";
        }
 
        // maison
        for ($j = 0; $j < $hauteur; $j++) {
            if ($j == $hauteur - 1) {
                // Sol du carré
                $maison .= "|";
                for ($k = 0; $k < $largeur - 2; $k++) {
                    $maison .= "_";
                }
                $maison .= "|\n";
            } else {
                // Mur du carré
                $maison .= "|";
                for ($k = 0; $k < $largeur - 2; $k++) {
                    $maison .= " ";
                }
                $maison .= "|\n";
            }
        }
 
        echo "<pre>$maison</pre>";
    } else {
        echo "Veuillez entrer une largeur > 2 et une hauteur > 1.";
    }
}
?>