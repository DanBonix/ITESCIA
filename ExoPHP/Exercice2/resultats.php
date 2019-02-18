<?php
	$nombre = $_POST['nombre'];
	$min = $_POST['borneInf'];
	$max = $_POST['borneSup'];

	echo "<h1>Résultats</h1>";

	echo "<p style='color: #00ff00'>".$nombre.' est-il compris entre '.$min.' et '.$max.' ?';

	if ($nombre >= $min && $nombre <= $max) {
		echo "<p style='color: red'>Oui, ".$nombre.' est compris entre '.$min.' et '.$max;
	}

	else {
		echo "<p style='color: red'> Non, ".$nombre.' n\'est pas compris entre '.$min.' et '.$max;;
	}
?>