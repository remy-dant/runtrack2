
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>Sélecteur de style CSS</title>
	<?php
		// Déterminer quel fichier CSS charger
		$cssFile = 'style1.css'; // Par défaut
		if (isset($_POST['style'])) {
			switch($_POST['style']) {
				case 'style1':
					$cssFile = 'style1.css';
					break;
				case 'style2':
					$cssFile = 'style2.css';
					break;
				case 'style3':
					$cssFile = 'style3.css';
					break;
				default:
					$cssFile = 'style1.css';
			}
		}
	?>
	<link rel="stylesheet" href="<?php echo $cssFile; ?>">
</head>
<body>
	<div class="container">
		<h1>Sélecteur de Style CSS</h1>
		
		<table border="1" cellpadding="10" cellspacing="0" style="margin: 20px auto; border-collapse: collapse;">
			<thead>
				<tr>
					<th>Option</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>
						<form method="POST" action="">
							<label for="style">Choisissez un style :</label><br><br>
							<select name="style" id="style">
								<option value="style1" <?php echo (isset($_POST['style']) && $_POST['style'] === 'style1') ? 'selected' : ''; ?>>Style par défaut</option>
								<option value="style2" <?php echo (isset($_POST['style']) && $_POST['style'] === 'style2') ? 'selected' : ''; ?>>Style sombre</option>
								<option value="style3" <?php echo (isset($_POST['style']) && $_POST['style'] === 'style3') ? 'selected' : ''; ?>>Style coloré</option>
							</select>
					</td>
					<td>
							<input type="submit" value="Appliquer le style">
						</form>
					</td>
				</tr>
			</tbody>
		</table>
		
		<?php
			if (isset($_POST['style'])) {
				echo "<table border='1' cellpadding='10' cellspacing='0' style='margin: 20px auto; border-collapse: collapse;'>";
				echo "<thead><tr><th>Résultat</th></tr></thead>";
				echo "<tbody><tr><td>";
				echo "<h2>Style appliqué : ";
				switch($_POST['style']) {
					case 'style1':
						echo "Style par défaut !";
						break;
					case 'style2':
						echo "Style sombre !";
						break;
					case 'style3':
						echo "Style coloré !";
						break;
				}
				echo "</h2>";
				
				echo "</td></tr></tbody></table>";
			}
		?>
	</div>
</body>
</html>