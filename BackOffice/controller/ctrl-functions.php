<?php

	function acceptLogin($account, $remember){

		session_start();

		$_SESSION["ID"] = $account["ID"];

		header("Location: ../dashboard.php");

		if(!is_null($remember) && $remember == "on"){

			

		}

	}

?>