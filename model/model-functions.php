<?php 

	require_once('configurations.php');

	function getConnection() {
		
		static $result = null;
		
		try {
		
			if($result == null){
			
				$config = getConfig();
				$result = new PDO($config['sgbd'] . ':host=' . $config['host'] . ';dbname=' . $config['dbname'] . ';charset=' . $config['charset'], $config['username'], $config['password']);
				$result->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // THIS INSTRUCTION ALLOWS DISPLAYING SQL ERROR
			
			}
			
		} catch (Exception $e) {
		
			die('Error : ' . $e->getMessage());
				
		} return $result;
		
	}
	
	function executeQuery($sql) {
	
		$result = array();
		$bdd = getConnection();
		
		try {
		
			$reponse = $bdd->query($sql);
			while ($donnees = $reponse->fetch()) $result[] = $donnees;
		
		} catch(Exception $e) {
		
			die('Error : ' . $e->getMessage());
		
		} $bdd = null; return $result;
		
	}
	
	function executeOneQuery($sql) {
	
		$result = null;
		$bdd = getConnection();
		
		try {
		
			$reponse = $bdd->query($sql);
			if ($donnees = $reponse->fetch()) $result = $donnees;
		
		} catch(Exception $e) {
		
			die('Error : ' . $e->getMessage());
		
		} $bdd = null; return $result;
		
	}

	function executeNonQuery($sql){
	
		$result = -1;
		
		$bdd = getConnection();
		
		try {
		
			$result = $bdd->exec($sql);
		
		} catch(Exception $e) {
		
			die('Error : ' . $e->getMessage());
		
		} $bdd = null; return $result;
		
	}

?>