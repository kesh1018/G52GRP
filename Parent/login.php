<?php

session_start(); // Starting Session

$error='';
$email='';
$password=''; // Variable To Store Error Message

if (isset($_POST['submit'])) {

	if (empty($_POST['user_email']) || empty($_POST['user_password'])) {
	$error = "Email or Password can't be empty.";
	}

	else{

		// Define $email and $password
		$email=$_POST['user_email'];
		$password=$_POST['user_password'];

		// Establishing Connection with Server by passing server_name, user_id and password as a parameter
		$connection = mysql_connect("localhost", "root", "");

		// To protect MySQL injection for Security purpose
		$email = stripslashes($email);
		$password = stripslashes($password);
		$email = mysql_real_escape_string($email);
		$password = mysql_real_escape_string($password);

		// Selecting Database
		$db = mysql_select_db("dbregistration", $connection);

		// SQL query to fetch information of registerd users and finds user match.
		$query = mysql_query("select * from admin where user_password='$password' AND user_email='$email'", $connection);
		$rows = mysql_num_rows($query);

		if ($rows == 1) {
		
		$_SESSION['login_user']=$email; 

		// Initializing Session
		header("location: profile.php"); 

		// Redirecting To Other Page
		} else {
			$error = "Email or Password is invalid.";
		}
		mysql_close($connection); // Closing Connection
	}
}
?>