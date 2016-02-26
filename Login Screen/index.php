<?php
	include('login.php'); 
	// Includes Login Script

	if(isset($_SESSION['login_user'])){
		header("location: profile.php");
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Visitor Management System Dashboard</title>
	<link href="css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
	<div class="wrapper">
		<div class="container">
			<h1>Visitor Management System Dashboard</h1>
			<form action="" method="post">
				<input type="email" placeholder="Email address" id="user_email" name="user_email">
				<input type="password" placeholder="Password" id="user_password" name="user_password">
				<input name="submit" type="submit" id="login-button">
				<br>
				<span><?php echo $error; ?></span>
			</form>
		</div>
		
		<ul class="bg-bubbles">
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
		</ul>
	</div>

	<script src='js/jquery-2.2.1.min.js'></script>
	<script src='js/index.js'></script>
</body>
</html>