<?php

class User extends Model{
	
	public static function create($email,$password, $nom, $prenom) {
		$sql= "INSERT INTO UTILISATEUR (EMAIL, MDP, NOM, PRENOM) 
				VALUES ('".$email."','".$password."','".$nom."','".$prenom."') ";
		$sth=self::exec($sql);
				
		return static::tryLogin($email,$password); 
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
	public static function tryLogin($email,$password){
		$sql="SELECT * FROM UTILISATEUR WHERE EMAIL='".$email."' AND MDP='".$password."'";
		$request=self::exec($sql);
		$allUser=$request->fetchAll(PDO::FETCH_CLASS, 'User');
		return $allUser[0]; 
	}
	
	
	public static function isMailUsed($email) {
		$sql="SELECT COUNT(*) FROM UTILISATEUR WHERE EMAIL= '".$email."' ";
		foreach (User::exec($sql) as $row){
		   	return ($row['COUNT(*)']!='0');
		}
	}
	
	public function id(){
		return $this->EMAIL;
	}
	

}

?>