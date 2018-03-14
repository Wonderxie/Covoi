<?php
	
class UserController extends Controller{
	
	
    public function __construct($request) {		
		//Construit le controller à partir de la requête
 		parent::__construct($request);
		/*
		session_start();
		$userId = NULL; 
		if(($request->has('user')))
			$userId = $request->read('user');
		if(!is_null($userId))
			$this->user = User::getWithId($userId);
		*/
	}
	
	//Action par défaut dirige vers une vue
	public function defaultAction($request) {
		$view = new View($this,'connected');
		$view->render();
	}
	
	
}
	
?>