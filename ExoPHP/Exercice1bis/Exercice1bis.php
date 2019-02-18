

<?php
	
	$prenom = $_GET['prenom'];
	$nom = $_GET['nom'];
	$adresse = $_GET['adresse'];
	$ville = $_GET['ville'];
	$cp = $_GET['cp'];

	//autre méthode
	/*
		session_start();

		$_SESSION['prenom'] = $prenom;
		$_SESSION['nom'] = $nom;
		$_SESSION['adresse'] = $adresse;
		$_SESSION['ville'] = $ville;
		$_SESSION['cp'] = $cp;

		session_end();
	*/

	echo "Consultation de : <br>";
	echo "- <a href='etatcivil.php?prenom=$prenom&nom=$nom'>votre état civil</a>";
	echo "<br>";
	echo "- <a href='adresse.php?adresse=$adresse&ville=$ville&cp=$cp'>votre adresse</a>";
?>