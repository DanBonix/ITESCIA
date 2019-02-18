<?php
	$prenom = $_POST['prenom'];
	$nom = $_POST['nom'];
	$adresse = $_POST['adresse'];
	$ville = $_POST['ville'];
	$cp = $_POST['cp'];

	echo 'Bienvenue '.$prenom.' '.$nom.'. <br> Nous avons bien noté que vous habitez <br>'.$adresse.' à '.$ville.' ('.$cp.').';
?>