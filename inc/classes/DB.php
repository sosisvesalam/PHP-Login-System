<?php 

//if there is no constant denied called __CONFIG__, do not load this file
if(!defined("__CONFIG__")){
	exit('You do not have a config file');
}

class DB {
	
	protected static $con;
	
	private function __construct(){
		try {
			self::$con = new PDO ('mysql:host=127.0.0.1;port=3306;dbname=login_course', 'root', '');
			self::$con->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			self::$con->setAttribute( PDO::ATTR_PERSISTENT, false);
		} catch (PDOException $e){
			echo "Could not connect to database."; 
			exit;
		}
	}
	
	public static function getConnection() {
		// If this instance was not been started, start it.
		if(!self::$con) {
			new DB();
		}
		
		// Return the writable db connection
		return self::$con;
	}
}


?>
