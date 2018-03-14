<?php

/*
* A Controller is dedicated to process a request 
* its responsabilities are:
* - analyses the action to be done
* - analyses the parameters
* - act on the model objects to perform the action
* - process the data
* - call the view and passes it the data
* - return the response
*/

// Classe abstracte
abstract class Controller extends MyObject{
	protected $request;
   
    public function __construct($request) {		
		//Construit le controller à partir de la requête
 		$this->request = $request;
    }

//Méthode à redéfinir dans les sous-classes
	public abstract function defaultAction($request);
			
    // ==============
    // = Public API =
    // ==============
	
	public function getActionName() { 
		return $this->request->getActionName(); 
	}
	
	public function execute(){
		$methodName=$this->getActionName();
		//bool method_exists ( mixed $object , string $method_name )
		if(!method_exists($this,$methodName)){
			  throw new Exception('Action "' . $methodName . '" does not exists on controller ' . get_class($this) );
		}
		// execute la bonne méthode Action de Controller en fonction de la requete 
		$this->$methodName($this->request);
	}
}

?>