<?php
	
class AnonymousController extends Controller{
	
	
    public function __construct($request) {		
		//Construit le controller à partir de la requête
 		parent::__construct($request);

		//if(!empty($_POST['email']) && !empty($_POST['inscPassword']) && !empty($_POST['nom']) && !empty($_POST['prenom'])){
			
			//$this->validateInscription($request);
			//}
	}
	
	//Action par défaut dirige vers une vue
	public function defaultAction($request) {
		$view = new View($this,'index');
		$view->render();
	}
	
	public function inscription($request) {
		$view = new View($this,'inscription');
		$view->render();
	}
	
	
	public function validateInscription($request) {
		if(!empty($_POST['email']) && !empty($_POST['inscPassword']) && !empty($_POST['nom']) && !empty($_POST['prenom'])){
			
		$email = $request->read('email');
		if(User::isMailUsed($email)) {
	    	$view=null;
			$view = new View($this,'inscription');
			$view->setArg('inscErrorText','This mail is already used');
			$view->render();
			
			echo "mail déjà utilisé";
		} 
		else {
	    	$password = $request->read('inscPassword');
			$nom = $request->read('nom');
			$prenom = $request->read('prenom');
			$user = User::create($email, $password,$nom,$prenom);
			if(!isset($user)) {
	    		$view = new View($this,'inscription');
				$view->setArg('inscErrorText', 'Cannot complete inscription');
				$view->render();
				
				echo "c'est bizarre";
			}
			else {
	    		$newRequest = new Request();
				//Changement de contrôller
				$newRequest->write('controller','user');
				$newRequest->write('action','defaultAction');
				$newRequest->write('user',$user->id());
				
				$controller=Dispatcher::dispatch($newRequest);
				$controller->execute();
				
				//echo $newRequest->getControllerName();
				//echo "compte créé";
			}
		}
	}
	else{
		$view = new View($this,'inscription');
		$view->render();
	}
	}
	
	public function connexion($request) {
		$view = new View($this,'connexion');
		$view->render();
	}
	public function tryConnexion($request) {
		if(!empty($_POST['email']) && !empty($_POST['CoPassword'])){
			$email = $request->read('email');
			$password = $request->read('CoPassword');
			if(!User::login($email,$password)){
	    		$view = new View($this,'connexion');
				$view->setArg('CoErrorText', 'Cannot complete connexion');
				$view->render();
				echo "mdp incorrect";
			}
			else {
	    		$newRequest = new Request();
				//Changement de contrôller
				$newRequest->write('controller','user');
				$newRequest->write('action','defaultAction');
				//$newRequest->write('user',$user->id());
				
				$controller=Dispatcher::dispatch($newRequest);
				$controller->execute();
				
				//echo $newRequest->getControllerName();
				//echo "compte créé";
			}
			
	}}
}
	