<?php

class DatabasePDO extends MyObject{
	
	protected static $pdo = NULL;
	
	protected static $localhost="localhost";
	protected static $dbname = "covoiturage";
	protected static $user = "root";
	protected static $password = "root";
	
	public static function getCurrentPDO(){
		if(!isset(self::$pdo)){
			try{
				self::$pdo= new PDO("mysql:host=".self::$localhost.";dbname=".self::$dbname, self::$user, self::$password, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
			}
			catch(PDOexception $e){
				$e->getMessage();
			}

		}
		return self::$pdo;
	}
	
}