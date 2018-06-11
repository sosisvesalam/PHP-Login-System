<?php

	//allow the config
	define('__CONFIG__', true);
	//require the config
	require_once 'inc/config.php';

	ForceDashBoard();
?>

<html>

<head>
	<!-- UIkit CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.4/css/uikit.min.css" />
</head>

<body>

	<div class="uk-section uk-container">
		<div class="uk-grid uk-childe-width-1-3@s uk-child-width-1-1" uk-grid="">
			<form class="uk-form-stacked js-login">

				<h2>Login</h2>

				<div class="uk-margin">
					<label class="uk-form-label" for="form-horizontal-text">Email</label>
					<div class="uk-form-controls">
						<input class="uk-input" id="form-horizontal-text" type="email" required="required" placeholder="email@email.com">
					</div>
				</div>

				<div class="uk-margin">
					<label class="uk-form-label" for="form-horizontal-text2">Password</label>
					<div class="uk-form-controls">
						<input class="uk-input" id="form-horizontal-text2" type="password" required="required" placeholder="Your Password">
					</div>
				</div>

				<div class="uk-margin uk-alert uk-alert-danger js-error" style="display: none;">

				</div>

				<div class="uk-margin">
					<button class="uk-button uk-button-default" type="submit">Login</button>
				</div>

			</form>
		</div>
	</div>

	<?php require_once 'inc/footer.php'?>


</body>

</html>
