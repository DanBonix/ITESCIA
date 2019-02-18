<?php include('connexionBDD.php'); ?>

	<table cellpadding="5" border="1" style="border-collapse: collapse;">
		<tr>
			<th>Prénom</th>
			<th>Login</th>
			<th>Statut</th>
			<th>Age</th>
			<th><a href="ajoute.php"><img src="images/ajoute.png"/></a></th>
		</tr>

<?php
		$requete = "select * from acces";
		$jeu = $connexion->query($requete);
		$jeu->setFetchMode(PDO::FETCH_OBJ);
		$ligne = $jeu->fetch();

		while ($ligne) {
			echo "<tr>";
				echo "<td>".$ligne->prenom.'</td>';
				echo "<td>".$ligne->login.'</td>';
				echo "<td>".$ligne->statut.'</td>';
				echo "<td>".$ligne->age.'</td>';
				echo "<td><a href='efface.php?id=$ligne->id'><img src='images/croix.png'/></a></td>";
			echo "</tr>";

			$ligne = $jeu->fetch();
		}
?>

	</table>