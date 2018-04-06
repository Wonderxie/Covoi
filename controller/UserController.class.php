<?php

class UserController extends Controller{
    protected $user;

    public function __construct($request) {
		//Construit le controller à partir de la requête

		parent::__construct($request);
		$userMail = NULL;

		if(($request->has('user')))
			$userMail = $request->read('user');

		if(!is_null($userMail)){
			$this->user = User::getWithMail($userMail);
      $_SESSION = $this->user;
    }

	}

	//Action par défaut dirige vers une vue
	public function defaultAction($request) {
		$view = new View($this,'index');
		$view->render();
	}
  public function monProfil($request){
    $view = new View($this,'monProfil');
		$view->render();
  }
  public function parametres($request){
    $view = new View($this,'parametres');
    $view->render();
  }

  public function proposerTrajet($request){
    $view = new View($this,'proposerTrajet');
    $view->render();
  }
  public function tryPropose($request){


  }

	public function deconnexion ($request){
		session_unset();
		session_destroy();
		echo "Vous êtes déconnectés";
    $newRequest = new Request();
    //Changement de contrôller
    $newRequest->write('controller','Anonymous');
    $newRequest->write('action','defaultAction');
    $controller=Dispatcher::dispatch($newRequest);
    $controller->execute();
	}

}

?>
