<?php

class Model extends MyObject{
	
	// Exécute la requête $sql et retourne des objets modèles
	public static function exec($sql){
		$pdo=DatabasePDO::getCurrentPDO();
		$st= $pdo->query($sql) or die("sql query error ! request : " . $sql);
		$st->setFetchMode(PDO::FETCH_ASSOC);
		return $st;
	}

}

?>