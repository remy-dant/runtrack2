<?php
// Job04 - Récupérer l'ensemble des informations des étudiants dont prénom commence par "T"
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
$sql = "SELECT * FROM etudiants WHERE prenom LIKE 'T%'";
$resultat = $connexion->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Job04 - Étudiants dont le prénom commence par T</title>
    <style>
        table { border-collapse: collapse; width: 100%; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>
    <h1>Étudiants dont le prénom commence par "T"</h1>
    
    <?php if ($resultat->num_rows > 0): ?>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Prénom</th>
                    <th>Nom</th>
                    <th>Naissance</th>
                    <th>Sexe</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                <?php while($row = $resultat->fetch_assoc()): ?>
                    <tr>
                        <td><?php echo $row["id"]; ?></td>
                        <td><?php echo $row["prenom"]; ?></td>
                        <td><?php echo $row["nom"]; ?></td>
                        <td><?php echo $row["naissance"]; ?></td>
                        <td><?php echo $row["sexe"]; ?></td>
                        <td><?php echo $row["email"]; ?></td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p>Aucun étudiant dont le prénom commence par "T" trouvé.</p>
    <?php endif; ?>
    
    <?php $connexion->close(); ?>
</body>
</html>