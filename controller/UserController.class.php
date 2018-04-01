<?php

class UserController extends Controller{
    protected $user;

    public function __construct($request) {
		//Construit le controller à partir de la requête

		parent::__construct($request);

		session_start();
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

	public function deconnexion ($request){
		session_unset();
		session_destroy();
		echo "Vous êtes déconnectés";
	}

}

?>
