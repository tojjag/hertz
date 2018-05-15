<?php

	require_once('../model/model-functions.php');

	$voitures = executeQuery("SELECT * FROM Vehicule");

	for ($i = 0, $size = count($voitures); $i < $size; $i++) {

		$tmpCtg = executeOneQuery("SELECT * FROM Categorie WHERE ID = " . $voitures[$i]["idCategorie"]);
		$tmpSctg = executeOneQuery("SELECT * FROM Categorie WHERE ID = " . $voitures[$i]["idSousCategorie"]);

		$voitures[$i]["idCategorie"] = $tmpCtg["nom"];
		$voitures[$i]["idSousCategorie"] = $tmpSctg["nom"];

	}

?>