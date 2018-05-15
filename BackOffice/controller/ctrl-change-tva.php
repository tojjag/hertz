<?php

	require_once('../../model/model-functions.php');
	require_once('ctrl-functions.php');

	if(!empty($_POST["submit"])){

		if(!empty($_POST["tva"]) && intval($_POST["tva"]) > 0){

			$tva = executeOneQuery("SELECT * FROM Tva LIMIT 1");

			if($tva["value"] != $_POST["tva"] && executeNonQuery("UPDATE Tva SET valeur = " .$_POST["tva"]. " WHERE ID = " .$tva["ID"]) > 0){

				if(executeNonQuery("INSERT INTO TVAHistorique(idTVA, valeur, daty) VALUES(" .$tva["ID"]. ", " .$tva["valeur"]. ", '" .date("Y-m-d H:i:s"). "')") > 0){

					header("Location: ../dashboard.php");

				} else header("Location: ../dashboard.php?error=4");

			} else header("Location: ../dashboard.php?error=3");

		} else header("Location: ../dashboard.php?error=2");

	} else header("Location: ../dashboard.php?error=1");

?>