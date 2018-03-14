<?php
	// Load my root class
	require_once(__ROOT_DIR . '/classes/MyObject.class.php');

class AutoLoader extends MyObject {
	
	public function __construct() {
		//Demande à php d'appeler load quand il y a une classe non comprise
		spl_autoload_register(array($this, 'load'));
	}
	
	
	// This method will be automatically executed by PHP whenever it encounters
	// an unknown class name in the source code
	private function load($className){
		//EX: AutoLoader load: Request
		//$this->log(__CLASS__ . ' load: '. $className);
		
		//Parcours les dossiers suivants
		$paths = array( '/classes/', '/model/' , '/controller/', '/view/');
		$rootLoadClass = null;
		$i = 0;
		
		
		//Tester si le fichier php est accessible en balayant dans les dossiers
		do{
			$rootLoadClass = __ROOT_DIR.$paths[$i].ucfirst($className).'.class.php';
			$i++;
		} while( !is_readable($rootLoadClass) && $i<count($paths));
		
		
		if (! is_readable($rootLoadClass)){
			throw new Exception ('Unknown class'.$className);
		}
		require_once($rootLoadClass);
	
	}
}
// /!\ Il faut charger les fichiers SQL Pour les modeles

$__LOADER = new AutoLoader();

?>