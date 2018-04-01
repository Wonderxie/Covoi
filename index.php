<?php

	// define __ROOT_DIR constant which contains the absolute path on disk
	// of the directory that contains this file (index.php)
	// e.g. for http://eden.imt-lille-douai.fr/~luc.fabresse/index.php
	// __ROOT_DIR = /Applications/MAMP/htdocs/Projet_Web_2018
	$rootDirectoryPath = realpath(dirname(__FILE__));
	define ('__ROOT_DIR', $rootDirectoryPath );

	// define __BASE_URL constant which contains the URL PATH of the index.php
	// e.g. for http://eden.imt-lille-douai.fr/~luc.fabresse/index.php
	// __BASE_URL = //Projet_Web_2018
	$base_url = explode('/',$_SERVER['PHP_SELF']);
	array_pop($base_url);
	define ('__BASE_URL', implode('/',$base_url) );

	// Load all application config
	require_once(__ROOT_DIR . "/config/config.php");

	// Load the Loader class to automatically load classes when needed
	require_once(__ROOT_DIR . '/classes/AutoLoader.class.php');

	// Reify the current request
	$request = Request::getCurrentRequest(); //Récupérer la requète
	$hasErrors = false;
	try {
		//Attribue le bon controller
		$controller = Dispatcher::dispatch($request);
		$controller->execute();
	} catch (Exception $e) {
		$hasErrors = true;
		if(__DEBUG){
			MyObject::staticlog('Error : ' . $e->getMessage() . "\n");
		}
	}


	if(__DEBUG){
		MyObject::echoLogs();
	}
	else{
		if($hasErrors){
			include(__ROOT_DIR . 'templates/error.html');
		}
	}

?>
