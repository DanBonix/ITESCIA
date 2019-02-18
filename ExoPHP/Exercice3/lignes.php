<?php
	session_start();

	$lignes = $_POST['lignes'];
	$border = $_POST['border'];

	$_SESSION['lignes'] = $lignes;
	$_SESSION['border'] = $border;

	echo '<h2> Voici un tableau avec '.$lignes.' lignes et une bordure de '.$border.' pixels d\'épaisseur </h2>';

	echo "<table cellpadding='10' style='border: ".$border."px black solid; border-collapse: collapse;'>";
	
	for ($l=1; $l <= $lignes; $l++) { 
		echo "<tr style='border: ".$border."px black solid;'><td style='border: ".$border."px black solid;'>Ligne ".$l." </td></tr>";
	}

	echo "</table>";

	echo "<h2>Tu as besoin de plus de colonnes ? Pas de soucis !</h2>";
?>

	<form action="colonnes.php" method="POST">
		<label for="colonnes">Nombre de colonnes du tableau : </label><input type="number" name="colonnes">
		<br><br>
		<input type="submit">
	</form>