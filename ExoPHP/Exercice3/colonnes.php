<?php
	session_start();

	$lignes = $_SESSION['lignes'];
	$border = $_SESSION['border'];
	$colonnes = $_POST['colonnes'];

	echo '<h2> Et voici un maginifque tableau avec '.$lignes.' lignes, '.$colonnes.' colonnes et une bordure de '.$border.' pixels d\'épaisseur </h2>';

	echo "<table cellpadding='10' style='border: ".$border."px black solid; border-collapse: collapse;'>";
	
	for ($l=1; $l <= $lignes; $l++) { 
		echo "<tr style='border: ".$border."px black solid;'>";

		for ($c=1; $c <= $colonnes; $c++) { 
			echo "<td style='border: ".$border."px black solid;'>Ligne ".$l.", Colonne ".$c."</td>";
		}

		echo "</tr>";
	}

	echo "</table>";
?>