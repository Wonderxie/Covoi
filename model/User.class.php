<?php

class User extends Model{

	public static function create($email,$password, $nom, $prenom,$userType) {
		$sql= "INSERT INTO UTILISATEUR (EMAIL, MDP, NOM, PRENOM,TYPE)
		VALUES ('".$email."','".$password."','".$nom."','".$prenom."','".$userType."') ";
		$sth=self::exec($sql);

		return static::tryLogin($email,$password);
	}

	public static function tryLogin($email,$password){
		$sql="SELECT (CODE_UTILISATEUR), (NOM), (PRENOM), (EMAIl), (MDP), (ADMIN), (TYPE), (UNITE), (PROMOTION) FROM UTILISATEUR WHERE EMAIL='".$email."' AND MDP='".$password."'";
		$request=self::exec($sql);
		$User=$request->fetch(PDO::FETCH_ASSOC);
		return $User;
	}

	public static function login($email, $password){
		$sql="SELECT (MDP) FROM UTILISATEUR WHERE EMAIL='".$email."'";
		$sth=self::exec($sql);
		$real_password=$sth->fetch(PDO::FETCH_ASSOC);
		if($real_password["MDP"]==$password){
			return true;
		}
		return false;
	}

	public static function isMailUsed($email) {
		$sql="SELECT COUNT(*) FROM UTILISATEUR WHERE EMAIL= '".$email."' ";
		foreach (User::exec($sql) as $row){
			return ($row['COUNT(*)']!='0');
		}
	}

	/*	public function mail(){
	return $this->EMAIL;
}*/


	public function getWithMail ($userMail){
		$sql="SELECT (CODE_UTILISATEUR), (NOM), (PRENOM), (EMAIl), (MDP), (ADMIN), (TYPE), (UNITE), (PROMOTION) FROM UTILISATEUR WHERE EMAIL='".$userMail;
		$request=self::exec($sql);
		$User=$request->fetch(PDO::FETCH_ASSOC);
		return $User;
	}

}

?>
