<?php
	include('connexionBDD.php');

	$requete = "select * from acces where id=".$_GET['id'];
	$jeu = $connexion->query($requete);
	$jeu->setFetchMode(PDO::FETCH_OBJ);
	$ligne = $jeu->fetch();

	$requete2 = "select * from statut";
	$jeu2 = $connexion->query($requete2);
	$jeu2->setFetchMode(PDO::FETCH_OBJ);
	$ligne2 = $jeu2->fetch();
?>

<form action="" method="POST">
	<label for="prenom">Prénom : </label><input type="text" name="prenom" value="<?php echo $ligne->prenom; ?>"><br><br>
	<label for="login">Login : </label><input type="text" name="login" value="<?php echo $ligne->login; ?>"><br><br>
	<label for="password">Mot de passe : </label><input type="password" name="password" value="<?php echo $ligne->password; ?>"><br><br>

	<label for="statut">Statut : </label>
	<select id="statut" name="statut" size="1">
	<?php 

		while($ligne2) {
			echo "<option value='".$ligne2->nom."'>".$ligne2->nom."</option>";

			$ligne2 = $jeu2->fetch();
		}

	?>
	</select><br><br>
	<label for="age" >Age : </label><input type="number" name="age" value="<?php echo $ligne->age; ?>"><br><br>
	<input type="submit" id="modifier" name="modifier" value="Modifier" >
</form>

<?php

	function modification($id, $prenom, $login, $password, $statut, $age, $connexion) {

		try {
			$requete_prep = $connexion->prepare("update acces set prenom = :prenom, login = :login, password = :password, statut = :statut, age = :age where id = :id");
		
			$requete_prep->execute(array(':prenom' => $prenom, ':login' => $login, ':password' => $password, ':statut' => $statut, ':age' => $age, 'id' => $_GET['id'] ));

			echo "Modification réussie";
		}

		catch(Exception $e)
		{
			echo 'Erreur : '.$e->getMessage(); 
?>
<br />
<?php			
			echo 'N° : '.$e->getCode();
		}
	}

	if (isset($_POST['ajouter'])) {
		$CHprenom = $_POST['prenom'];
		$CHlogin = $_POST['login'];
		$CHpassword = $_POST['password'];
		$CHstatut = $_POST['statut'];
		$CHage = $_POST['age'];

		ajouter($_GET['id'], $CHprenom, $CHlogin, $CHpassword, $CHstatut, $CHage, $connexion);
	}
?>