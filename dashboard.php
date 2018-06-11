<?php

	//allow the config
	define('__CONFIG__', true);
	//require the config
	require_once 'inc/config.php';

	ForceLogin();


?>

<html>

<head>
	<!-- UIkit CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.4/css/uikit.min.css" />
</head>

<body>

	<div class="uk-section uk-container">
		Dashboard here: you are signed in as user : <?php echo $_SESSION['user_id']; ?>
	</div>

	<?php require_once 'inc/footer.php'?>
</body>

</html>
