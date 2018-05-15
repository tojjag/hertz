<?php

	require_once('../../model/model-functions.php');
	require_once('ctrl-functions.php');

	if(!empty($_POST["submit"])){

		$query = "SELECT * FROM Users WHERE emailUser = '" . $_POST["email"] . "' AND mdpUser = sha1('" . $_POST['password'] . "') AND statusAdmin = 1";

		$account = executeOneQuery($query);

		if($account != null){

			$remember = null; if(!empty($_POST["remember"])){

				$remember = $_POST["remember"];

			} acceptLogin($account);

		} else header("Location: ../login.php?error=2");

	} else header("Location: ../login.php?error=1");

?>