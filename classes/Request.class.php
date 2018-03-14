<?php

class Request extends MyObject {
	
	protected static $singleton= NULL; 
	
	// La requète est un singleton
	public static function getCurrentRequest(){  //La requete courante
		if(!isset(static::$singleton)){
			static::$singleton =new static();
		}
		return static::$singleton;
	}

    // ==============
    // Public API
    // ==============
	
	//Obtenir le nom du contrôleur
	public function getControllerName(){
		if ( !isset($_GET['controller'])){
			return 'Anonymous';
		}
		else{
			//ou bien User
			return $_GET['controller'];
		}
	}
	
	//Obtenir le nom de l'action
	public function getActionName(){
		if ( !isset($_GET['action'])){
			return 'defaultAction';
		}
		else{
			return $_GET['action'];
		}
	}
	
	
	public function read($champ){
		return $_POST[$champ];
	}
	
	public function write($champ, $user){
		//if(isset($_GET[''.$champ])){
		//	$_GET[''.$champ]=$user;
		//}
		//if(isset($_GET[''.$champ])){
			$_GET[$champ]=$user;
			//}

		
			//var_dump($_POST[$champ]);
			//}
	}
    /*public function debug() {
       echo "Request Parameters : \nGET=";
       print_r($_GET);
       echo "\nPOST=";
       print_r($_POST);
       echo "\n";
    } 
	*/
		
}
?>