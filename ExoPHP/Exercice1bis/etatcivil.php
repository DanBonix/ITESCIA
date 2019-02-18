<?php
	echo 'Prénom : '.$_GET['prenom'].'<br>';
	echo 'Nom : '.$_GET['nom'];

	//autre méthode
	/*	
		session_start();

		echo 'Prénom : '.$_SESSION['prenom'].'<br>';
		echo 'Nom : '.$_SESSION['nom'];

		session_end();
	*/
?>