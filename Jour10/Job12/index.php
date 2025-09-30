<?php
// Job12 - Sélectionner le prénom, nom et date de naissance des étudiants nés entre 1998 et 2018
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
$sql = "SELECT prenom, nom, naissance FROM etudiants WHERE YEAR(naissance) BETWEEN 1998 AND 2018";
$resultat = $connexion->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Job12 - Étudiants nés entre 1998 et 2018</title>
    <style>
        table { border-collapse: collapse; width: 100%; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>
    <h1>Étudiants nés entre 1998 et 2018</h1>
    
    <?php if ($resultat->num_rows > 0): ?>
        <table>
            <thead>
                <tr>
                    <th>Prénom</th>
                    <th>Nom</th>
                    <th>Naissance</th>
                </tr>
            </thead>
            <tbody>
                <?php while($row = $resultat->fetch_assoc()): ?>
                    <tr>
                        <td><?php echo $row["prenom"]; ?></td>
                        <td><?php echo $row["nom"]; ?></td>
                        <td><?php echo $row["naissance"]; ?></td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p>Aucun étudiant né entre 1998 et 2018 trouvé.</p>
    <?php endif; ?>
    
    <?php $connexion->close(); ?>
</body>
</html>