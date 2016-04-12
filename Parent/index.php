<?php
	include('login.php'); 
	// Includes Login Script

	if(isset($_SESSION['login_user'])){
		header("location: dashboard.php");
	}
?>

<!DOCTYPE html>
<html>
<head>
	<!-- Imports -->
	<title>Visitor Management System Dashboard</title>
	<link href="css/login.css" rel="stylesheet" type="text/css">
</head>
<body>
	<!-- Initialize lockscreen  -->
	<div class="wrapper">
		<div class="container">
			<h1>Visitor Management System Dashboard</h1>
			<form id="loginform" action="" method="post">
				<label for="user_email"></label>
				<input type="email" placeholder="Email address" id="user_email" name="user_email">
				<input type="password" placeholder="Password" id="user_password" name="user_password">
				<input value="Submit" name="submit" type="submit" id="login-button">
				<br>
				<?php echo $error ?>
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
	<script src='js/jquery.validate.js'></script>

	<!-- Initialize validation  -->
	<script>
	$("#loginform").validate({

		rules: {
		user_email: {
			required: true,
			email: true
		},
		user_password: {
			required: true
		}
	}

	});
	</script>
	
</body>
</html>