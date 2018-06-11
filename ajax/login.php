<?php

	//allow the config
	define('__CONFIG__', true);
	//require the config
	require_once '../inc/config.php';

	if($_SERVER['REQUEST_METHOD'] == 'POST' or 1==1){

		// Always return JSON format
		// header('Content-Type: application/json');

		$return = [];

		$email = Filter::String( $_POST['email'] );
		$password = $_POST['password'];

		// Make sure the user does not exist.
		$findUser = $con->prepare("SELECT user_id, password FROM users WHERE email= LOWER(:email) LIMIT 1");
		$findUser->bindParam(':email', $email, PDO::PARAM_STR);
		$findUser->execute();

		if( $findUser->rowCount() == 1 ) {
			// User exists try and sign in
			$User = $findUser->fetch(PDO::FETCH_ASSOC);

			$user_id = (int) $User['user_id'];
			$hash = (string) $User['password'];

			if(password_verify($password, $hash)) {
				//User is signed in
				$return['redirect'] = 'dashboard.php';

				$_SESSION['user_id'] = $user_id;
			} else {
				// Invalid user email/pw combo
				$return['error'] = 'Invalid user email/password combo';
			}

			// $return['error'] = "You already have an account";
		} else {
			// They need to create a new account
			$return['error'] = "you do not have an account. <a href='register.php'>Create one now?</a>";
		}

		echo json_encode($return, JSON_PRETTY_PRINT);
		// echo json_encode($return);

		exit;

	} else {
		// Die, Kill the script. Redirect the user. Do something regardless.
		exit('Invalid Url');
	}

?>
