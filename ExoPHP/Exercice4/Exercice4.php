<!DOCTYPE html>
<html>
<head>
	<title>Exercice 4</title>
	<meta charset="utf-8">
</head>
<body>
	<form action="" method="POST">
		<label for="login">Nom : </label><input type="text" name="login">
		<br><br>
		<label for="mdp">Mot de passe : </label><input type="password" name="mdp">
		<br><br>
		<input type="submit" id="connexion" name="connexion" value="Connexion">
	</form>

	<?php
		$nom = 'Lamer';
		$password = "noire";

		if (isset($_POST['connexion'])) {
			if (isset($_POST['login']) && $_POST['mdp']) {
				$login = trim($_POST['login']);
				$mdp = trim($_POST['mdp']);

				if (strcasecmp($nom, $login) == 0 && strcasecmp($password, $mdp) == 0) {
					echo "Bienvenue ".$login;
				}
			}
		}
		
	?>
</body>
</html>