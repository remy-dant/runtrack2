<?php
// Job07 - Récupérer la superficie totale des étages
$serveur = "localhost";
$utilisateur = "root";
$mot_de_passe = "";
$base_de_donnees = "jour09";

// Connexion à la base de données
$connexion = new mysqli($serveur, $utilisateur, $mot_de_passe, $base_de_donnees);

// Vérification de la connexion
if ($connexion->connect_error) {
    die("Connexion échouée: " . $connexion->connect_error);
}

// Requête SQL
$sql = "SELECT SUM(superficie) as superficie_totale FROM etage";
$resultat = $connexion->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Job07 - Superficie totale des étages</title>
    <style>
        table { border-collapse: collapse; width: 100%; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>
    <h1>Superficie totale des étages</h1>
    
    <?php if ($resultat->num_rows > 0): ?>
        <table>
            <thead>
                <tr>
                    <th>superficie_totale</th>
                </tr>
            </thead>
            <tbody>
                <?php while($row = $resultat->fetch_assoc()): ?>
                    <tr>
                        <td><?php echo $row["superficie_totale"]; ?></td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p>Erreur lors du calcul de la superficie totale.</p>
    <?php endif; ?>
    
    <?php $connexion->close(); ?>
</body>
</html>