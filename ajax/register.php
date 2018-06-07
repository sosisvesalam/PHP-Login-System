<?php 

	//allow the config
	define('__CONFIG__', true);

	//require the config
	require_once '../inc/config.php';


	if($_SERVER['REQUEST_METHOD'] == 'POST'){

		// Always return JSON format
		header('Content-Type: application/json');

		
		$return = [];
		
		// Make sure the user does not exist.
		
		// Make sure the user Can be added And is added
		
		// Return the proper information back to JavaScript to redirect us.
		
		$return['redirect'] = 'dashboard.php';
		
		$return['name'] = "test test";
		
		echo json_encode($return, JSON_PRETTY_PRINT); 
		exit;

	} else {
		// Die, Kill the script. Redirect the user. Do something regardless.
		exit('test');
	}

?>