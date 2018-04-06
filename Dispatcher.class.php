<?php

class Dispatcher extends MyObject{

	public static function dispatch($request){
		//EX: UserController, AnonymousController

		if(isset($_SESSION['EMAIL'])){
			$newRequest = new Request();
			//Changement de contrôller
			$newRequest->write('controller','user');
			//$newRequest->write('user',$user->id());

		/*	$userControler = new UserController($request);
			UserController::$user->tryLogin($_SESSION['EMAIL'], $_SESSION['PASSWORD']);
			return $userControler;*/
		}

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
