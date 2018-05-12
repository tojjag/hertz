<?php

	include('model-functions.php');
	
	$reponse = executeQuery('SELECT * FROM Users');
	
	var_dump($reponse);
	
	//echo executeNonQuery("INSERT INTO Agence VALUES(18, 'Merde')");
	
	//echo executeNonQuery("UPDATE Agence SET nom = 'WC' WHERE id = 18");
	
	//echo executeNonQuery("DELETE FROM Age WHERE id = 18"); // L'ERREUR 'Age' ( au lieu de 'Agence' ) EST VOLONTAIRE ICI

?>