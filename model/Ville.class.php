<?php

class Ville extends Model{
	public $ville;

	public static function searchCityWithCode($codePostal) {
		$sql= "SELECT (CODE_VILLE), (NOM), (CODE_POSTAL) FROM VILLE WHERE CODE_POSTAL=".$codePostal."";
		$sth=self::exec($sql);
		$this->ville=$sth->fetch(PDO::FETCH_ASSOC);
	}
	public static function searchCityWithName($Name) {
		$sql= "SELECT (CODE_VILLE), (NOM), (CODE_POSTAL) FROM VILLE WHERE NOM=".$Name."";
		$sth=self::exec($sql);
		$this->ville=$sth->fetch(PDO::FETCH_ASSOC);
	}

}

?>
