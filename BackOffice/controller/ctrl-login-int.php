<?php

	require_once('../model/model-functions.php');

	session_start();

	if(empty($_SESSION["ID"])){

		header('Location: login.php?error=3');

		session_destroy();

	}

?>