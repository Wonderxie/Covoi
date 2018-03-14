<?php

class Dispatcher extends MyObject{
	
	public static function dispatch($request){
		//EX: UserController, AnonymousController
		$controllerClassName = ucfirst($request->getControllerName()) . 'Controller';
		
		//Si la classe n'existe pas
		// bool class_exists ( string $class_name [, bool $autoload = TRUE ] )
		if(!class_exists($controllerClassName)) {
			throw new Exception("$controllerName does not exists");
		}
		
		//Sinon, on retourne le bon controller
		//EX: UserController($request)
		return new $controllerClassName($request);
	}
}	
?>