<?php

	$db_host = "localhost";
	$db_name = "dbregistration";
	$db_user = "root";
	$db_pass = "";
		
	$conn = mysql_connect($db_host,$db_user,$db_pass);

	if(!$conn){
		die('Connection Failed'.mysql_error());
	}

	// Select Database
	mysql_select_db("dbregistration",$conn);

	session_start();

	$user_check=$_SESSION['login_user'];

	// SQL Query To Fetch Complete Information Of User
	$ses_sql=mysql_query("SELECT * FROM admin WHERE user_email ='user_check'", $connection);
	
	$row = mysql_fetch_assoc($ses_sql);
	$login_session =$row['user_email'];

	if(!isset($login_session)){
	mysql_close($connection); // Closing Connection
	header('Location: index.php'); // Redirecting To Home Page
	}

?>