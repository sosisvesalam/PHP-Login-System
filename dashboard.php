<?php

	//allow the config
	define('__CONFIG__', true);
	//require the config
	require_once 'inc/config.php';

	ForceLogin();

	$User = new User($_SESSION['user_id']);
?>

<html>

<head>
	<!-- UIkit CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.4/css/uikit.min.css" />
</head>

<body>

	<div class="uk-section uk-container">
		<h2>Dashboard</h2>
		<p>Hello <?php echo $User->email ?> you regeistered at <?php echo $User->reg_time; ?> </p>
		<p> <a href="logout.php">Logout</a> </p>

	</div>

	<?php require_once 'inc/footer.php'?>
</body>

</html>
