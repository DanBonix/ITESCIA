<?php
	echo 'Vous habitez :<br>';
	echo $_GET['adresse'].'<br>';
	echo $_GET['cp'].' '.$_GET['ville'];

	//autre méthode
	/*	
		session_start();
		
		echo 'Vous habitez : '
		echo $_SESSION['adresse'].'<br>';
		echo $_SESSION['cp'].' '.$_SESSION['ville'];

		session_end();
	*/
?>