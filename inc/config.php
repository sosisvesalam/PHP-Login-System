<?php
	//if there is no constant denied called __CONFIG__, do not load this file
	if(!defined("__CONFIG__")){
		exit('You do not have a config file');
		// 
	}
	
	// Our config is bellow

	// Include the DB.php file
	include_once "classes/DB.php";

	$con = DB::getConnection();
?>