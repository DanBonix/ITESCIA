<?php
	include('connexionBDD.php');

	$requete = "select * from statut";
	$jeu = $connexion->query($requete);
	$jeu->setFetchMode(PDO::FETCH_OBJ);
	$ligne = $jeu->fetch();
?>

<form action="" method="POST">
	<label for="prenom">Prénom : </label><input type="text" name="prenom"><br><br>
	<label for="login">Login : </label><input type="text" name="login"><br><br>
	<label for="password">Mot de passe : </label><input type="password" name="password"><br><br>

	<label for="statut">Statut : </label>
	<select id="statut" name="statut" size="1">
	<?php 

		while($ligne) {
			echo "<option value='".$ligne->nom."'>".$ligne->nom."</option>";

			$ligne = $jeu->fetch();
		}

	?>
	</select><br><br>
	<label for="age">Age : </label><input type="number" name="age"><br><br>
	<input type="submit" id="ajouter" name="ajouter" value="Ajouter">
</form>

<?php
	function ajouter($prenom, $login, $password, $statut, $age, $connexion) {
		if (isset($CHprenom) && isset($CHlogin) && isset($CHpassword) && isset($CHstatut) && isset($CHage)) {

			try {

				$requete_prep = $connexion->prepare("insert into acces (prenom, login, password, statut, age) values(:prenom, :login, :password, :statut, :age)"); 

				$requete_prep->execute(array(':prenom' => $prenom, ':login' => $login, ':password' => $password, ':statut' => $statut, ':age' => $age));

				echo "Ajout réussi";
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
	}

	if (isset($_POST['ajouter'])) {
		$CHprenom = $_POST['prenom'];
		$CHlogin = $_POST['login'];
		$CHpassword = $_POST['password'];
		$CHstatut = $_POST['statut'];
		$CHage = $_POST['age'];

		ajouter($CHprenom, $CHlogin, $CHpassword, $CHstatut, $CHage, $connexion);
	}
	
?>