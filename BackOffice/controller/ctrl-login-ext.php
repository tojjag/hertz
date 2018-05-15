<?php

	require_once('../model/model-functions.php');

	session_start();

	if(!empty($_SESSION["ID"])){

		$query = "SELECT * FROM Users WHERE ID = '" . $_SESSION["ID"] . "'";

		$account = executeOneQuery($query);

		if($account != null) header('Location: dashboard.php');

	} else session_destroy();

?>