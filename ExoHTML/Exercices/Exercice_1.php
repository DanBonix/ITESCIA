<!DOCTYPE html>
<meta charset="utf-8" />

<html>
	<head>
		<title>Exercice 1</title>
	</head>
	<body>
		<h1 style="font-weight: bold; text-align: center;">Moteur de recherche</h1>
		<center>
			<div style="width:500px;height:200px;border:2px solid #999999;">
				<br>
				<form action="#" method="POST">
					<table>
						<tr>
							<td><label for="motclef">Mots clefs</label></td>
							<td><input type="text" name="motclef"></td>
						</tr>

						<tr>
							<td><label for="categorie">Catégorie</label></td>
							<td><select size="3" multiple="1" name="categorie">
								<option value="jouet">Jouet</option>
								<option value="location">Location</option>
								<option value="voitures">Voitures</option>
							</select></td>
						</tr>

						<tr>
							<td><label for="dept">Département</label></td>
							<?php
								$departement = array("Ain", "Aisne", "Allier", "Alpes-de-Haute-Provence", "Hautes-Alpes", "Alpes-Maritimes", "Ardèche", "Ardennes", "Ariège", "Aube", "Aude", "Aveyron", "Bouches-du-Rhône", "Calvados", "Cantal", "Charente", "Charente-Maritime", "Cher", "Corrèze", "Corse-du-sud", "Haute-Corse", "Côte-d'Or", "Côtes-d'Armor", "Creuse", "Dordogne", "Doubs", "Drôme", "Eure", "Eure-et-Loir", "Finistère", "Gard", "Haute-Garonne", "Gers", "Gironde", "Hérault", "Ille-et-vilaine", "Indre", "Indre-et-Loire", "Isère", "Jura", "Landes", "Loir-et-cher", "Loire", "Haute-Loire", "Loire-atlantique", "Loiret", "Lot", "Lot-et-Garonne", "Lozère", "Maine-et-Loire", "Manche", "Marne", "Haute-Marne", "Mayenne", "Meurthe-et-Moselle", "Meuse", "Morbihan", "Moselle", "Nièvre", "Nord", "Oise", "Orme", "Pas-de-calais", "Puy-de-dôme", "Pyrénées-Atlantiques", "Hautes-Pyrénées", "Pyrénées-Orientales", "Bas-Rhin", "Haut-Rhin", "Rhône", "Haute-Saône", "Saône-et-Loire", "Sarthe", "Savoie", "Haute-Savoie", "Paris", "Seine-Maritime", "Seine-et-Marne", "Yvelines", "Deux-Sèvres", "Somme", "Tarn", "Tarn-et-Garonne", "Var", "Vaucluse", "Vendée", "Vienne", "Haute-Vienne", "Vosges", "Yonne", "Territoire de Belfort", "Essonne", "Hauts-de-seine", "Seine-Saint-Denis", "Val-de-Marne", "Val d'Oise", "Guadeloupe", "Martinique", "Guyane", "La Réunion", "Mayotte");
								sort($departement);
							?>
							<td><select name="dept">
								<?php foreach ($departement as $dept): ?>

									<option value="<?php echo $dept; ?>" > <?php echo $dept; ?></option>
								<?php endforeach; ?>
							</select></td>
						</tr>
					</table>
					<br>
					<center><input type="submit" value="Chercher"></center>
				</form>
			</div>
		</center>
	</body>
</html>