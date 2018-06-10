<?php

	//allow the config
	define('__CONFIG__', true);

	//require the config
	require_once '../inc/config.php';


	if($_SERVER['REQUEST_METHOD'] == 'POST'){

		// Always return JSON format
		// header('Content-Type: application/json');


		$return = [];

		$email = Filter::String( $_POST['email'] );

		// Make sure the user does not exist.
		$findUser = $con->prepare("SELECT user_id FROM users WHERE email= :email LIMIT 1");
		$findUser->bindParam(':email', $email, PDO::PARAM_STR);
		$findUser->execute();

		if( $findUser->rowCount() == 1 ) {
			// User exists
			// We can also check to see if they are abloe to log in.
			$return['error'] = "You already have an account";
			$return['is_logged_in'] = false;
		} else {
			// User does not exist, can be added AND is added

			$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

			$addUser = $con->prepare("INSERT INTO users(email, password) VALUES (LOWER(:email), :password)");
			$addUser->bindParam(':email', $email, PDO::PARAM_STR);
			$addUser->bindParam(':password', $password, PDO::PARAM_STR);
			$addUser->execute();

			$user_id = $con->lastInsertId();

			$_SESSION['user_id'] = (int) $user_id;

			$return['redirect'] = 'dashboard.php?message=welcome';
			$return['is_logged_in'] = true;


		}
		// Make sure the user Can be added And is added

		// Return the proper information back to JavaScript to redirect us.

		// $return['name'] = "test test";


		echo json_encode($return, JSON_PRETTY_PRINT);
		// echo json_encode($return);

		exit;

	} else {
		// Die, Kill the script. Redirect the user. Do something regardless.
		exit('Invalid Url');
	}

?>
