<?php
	$user = $_POST['username'];
	$password = $_POST['password'];

	if($user == "crepo" && $password == "nutella") {
        print("Vous êtes connectés");
    } else {
        print("Erreur de connexion");
    }
?>