<?php

//allow the config
define('__CONFIG__', true);
//require the config
require_once 'inc/config.php';

?>

<html>

<head>
	<!-- UIkit CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.4/css/uikit.min.css" />
</head>

<body>

	<div class="uk-section uk-container">
		<?php
			echo "Hello World, Today is: ";
			echo date (" Y m d");
		?>
	</div>
	<p>
		<a href="login.php">Login</a>
		<a href="register.php">Register</a>
	</p>
	<?php require_once 'inc/footer.php'?>


</body>

</html>
