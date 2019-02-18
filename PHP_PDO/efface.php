<?php include('connexionBDD.php'); ?>

<?php

	function suppression($id, $connexion) {

		try {
			$requete_prep = $connexion->prepare("delete from acces where id = :id");
		
			$requete_prep->execute(array('id' => $_GET['id'] ));

			echo "Suppression réussie";
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

	suppression($_GET['id'], $connexion);
?>