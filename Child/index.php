<!DOCTYPE html>
<?php
$url = parse_url(getenv("CLEARDB_DATABASE_URL"));

$server = "us-cdbr-iron-east-03.cleardb.net";
$username = "b481f533eab2cc";
$password = "fef9929b";
$db = "heroku_ca79ab026f8fabd";

$conn = new mysqli($server, $username, $password, $db);

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }


	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>Group 5 Project</title>
		<link rel="stylesheet" type="text/css" href="css/default.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<style type="text/css">
		body,td,th {
	font-family: Lato, Calibri, Arial, sans-serif;
	color: #000000;
}
body {
	background-color: #FFFFFF;
}
        </style>

	</head>
	<body>
		<div class="container">
			<header class="clearfix">
			  <ul class="topnav">
			    <li><a class="active" href="#home">Home</a></li>
  <li><a href="#news">News</a></li>
  <li><a href="#contact">Contact</a></li>
  <ul class="topnav right">
    <li><a href="#about">About</a></li>
    <li><a href="#login">Login</a></li>
  </ul>
</ul>
				<h1>Visitor Management System</h1>
			<div class="main">
				 <form class="cbp-mc-form">
 				 <div class="cbp-mc-column">
 				 <label for="ic-picture">ID Picture</label>
				 <img src="images/default-picture.jpg" alt="id picture" width="290"></div>
					<div class="cbp-mc-column">
					  <label for="first-name">Full Name</label>
	  					<input type="text" id="full-name" name="full-name" placeholder="should get info from server">
	  					<label for="ic-num">I/C Number</label>
	  					<input type="text" id="ic-num" name="ic-num" placeholder="should get info from server">
  	  					<label for="race">Race</label>
	  					<input type="text" id="race" name="race"placeholder="should get info from server">
                        <label for="address">Address</label>
	  					<textarea id="address" name="address" placeholder="should get info from server"></textarea>
	  					<label for="phone">Phone Number</label>
	  					<input type="text" id="phone" name="phone" placeholder="input from user">

	  				</div>
  				  <div class="cbp-mc-column">
 	  					<label for="visitor-type">Categories</label>
 	  					<select id="visitor-type" name="cisitor-type">
	  						<option>Normal Visitor</option>
	  						<option>Events</option>
	  						<option>Salesman</option>
	  						<option>Emergency Case</option>
	  					</select>
	  					<label for="reg-num">Vehicle Reg. Number</label>
	  					<input type="text" id="reg-num" name="reg-num">
						<label for="destination">Destination</label>
	  					<input type="text" id="destination" name="destination">
	  					<label for="resident-name">Resident's Name</label>
	  					<input type="text" id="resident-name" name="resident-name">
	  				</div>
	  				<div class="cbp-mc-submit-wrap"><input class="cbp-mc-submit" type="submit" value="Submit" /></div>
				</form>
			</div>
		</div>
	</body>
</html>