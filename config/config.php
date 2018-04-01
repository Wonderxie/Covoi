<?php

// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
// Debug
// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

// define (__DEBUG, false);
define ('__DEBUG', true);

if(__DEBUG) {
	error_reporting(E_ALL);
	//Modifie la valeur d'une option de configuration
	ini_set("display_errors", E_ALL);
} else {
	error_reporting(0);
	ini_set("display_errors", 0);
}

// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
// DB
// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

if($_SERVER['DOCUMENT_ROOT']=='/Applications/MAMP/htdocs'){
	define('_localhost','localhost');
	define('_dbname','covoit');
	define('_user','root');
	define('_password','root');
}
else{
	define('_localhost','localhost');
	define('_dbname','cecile_yang');
	define('_user','cecile.yang');
	define('_password','xyDHmLCY');
}

?>
