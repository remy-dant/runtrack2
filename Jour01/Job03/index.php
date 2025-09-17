<?php
$bool = 100;
$int = 42;
$string = "Tableau des variables";
$float = 3.14;
$array = 10;
$object = "liste d'éléments"; 
$NULL = "null";
$ressource = "fopen('php://temp', 'r')"; 

$variables = [
  ['type' => 'Chaine de caractères', 'nom' => 'String', 'valeur' => $string],  
  ['type' => 'Nombre Entier', 'nom' => 'Int', 'valeur' => $int],
  ['type' => 'Nombre Décimal', 'nom' => 'Float', 'valeur' => $float],
  ['type' => 'Booléen', 'nom' => 'Bool', 'valeur' => $bool],
  ['type' => 'Tableau', 'nom' => 'Array', 'valeur' => $array],
  ['type' => 'Objet', 'nom' => 'Object', 'valeur' => $object],
  ['type' => 'NULL', 'nom' => 'null', 'valeur' => $NULL],
  ['type' => 'Ressource', 'nom' => 'ressource', 'valeur' => $ressource],
];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Tableau des variables</title>
</head>
<body>
    <table border="1">
        <thead>
            <tr>
                <th>Type</th>
                <th>Nom</th>
                <th>Valeur</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($variables as $var): ?>
                <tr>
                    <td><?= htmlspecialchars($var['type']) ?></td>
                    <td><?= htmlspecialchars($var['nom']) ?></td>
                    <td><?= htmlspecialchars($var['valeur']) ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>