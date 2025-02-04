<?php 

session_start(); 

?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8" />
	<link href='https://fonts.googleapis.com/css?family=Ubuntu:500' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/css/materialize.min.css">
	<link href="assets/css/style.css" type="text/css" rel="stylesheet" />
	<script type="text/javascript" src="jquery.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/js/materialize.min.js"></script>
</head>

<body>

	<div class="wrapper">
		<div class="image">
				<img src="assets/imgs/image.png" alt="just_an_image">
		</div>
		<div class="login">
			<form action="includes/login.inc.php" method="POST">
				<h1>Welcome back!</h1>
				<hr>
				<div class="input-field">
					<i class="mdi-social-person-outline prefix float-right"></i>
					<input class="validate" name="email" id="email" type="email" placeholder="Enter your email..">
					<label for="email" data-error="wrong" data-success="right" class="center-align"></label>
				</div>

				<div class="input-field">
					<i class="mdi-action-lock-outline prefix float-right"></i>
					<input id="password" name="password" type="password" placeholder="password">
					<label for="password"></label>
				</div><br>

				<a href="#" id="forgot">Forgot password?</a>

				<div class="input-field">
					<input type="checkbox" id="remember-me" />
					<label for="remember-me">Remember me</label>
				</div>

				<div class="input-field">
					<button class="btn waves-effect waves-light" type="submit" name="login-submit">Login</button>
				</div>

				<p class="reg">
					Don't have an account?
					<a href="signup.php" id="register">Sign up!</a><br><br>
				</p>

				<br>
				<br>
			</form>
		</div>

	</div>
</body>

</html>