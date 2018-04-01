<?php

class Voiture extends Model{
	protected $car;
	public static function create($immatriculation,$modele, $couleur, $utilisateur) {
		$sql= "INSERT INTO VOITURE (IMMATRICULATION, MODELE, COULEUR, UTILISATEUR)
		VALUES ('".$immatriculation."','".$modele."','".$couleur."','".$utilisateur."') ";
		$sth=self::exec($sql);

		return static::selectCar($immatriculation);
	}

	public static function selectCar($immatriculation){
		$sql="SELECT (IMMATRICULATION), (MODELE), (COULEUR), (UTILISATEUR) FROM VOITURE WHERE IMMATRICULATION='".$immatriculation."'";
		$request=self::exec($sql);
		$car=$request->fetch(PDO::FETCH_ASSOC);
		return $car;
	}

}

?>
