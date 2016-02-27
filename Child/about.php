<!doctype html>

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

// Check if server is alive
if (mysqli_ping($conn))
  {
  echo "Connection is ok!";
  }
else
  {
  echo "Error: ". mysqli_error($conn);
  }
?>

<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link href="css/style.css" rel="stylesheet">
<title>Visitor Management System</title>
</head>

<body>
<div id="container"></div>
	<br />
<div id="menubar">
	<div class="menu">
	<ul>
		<li><a href="index.php">Home</a></li>
		<li><a href="about.php">About</a>
			<ul class="submenu">
				<li><a href="#">AAA</a></li>
				<li><a href="#">BBB</a></li>
			</ul>
		</li>
		<li><a href="#">Services</a>
			<ul class="submenu">
				<li><a href="#">XXX</a></li>
				<li><a href="#">YYY</a></li>
			</ul>
			
		</li>
		<li><a href="#">Contact</a></li>
		<li style="padding-right: 23%"><a href="#"></a></li>
		<li><a href="#" class="in" style="color: black">Log In</a></li>
	</ul>
</div>
</div>

<p>We provide you user friendly, effective and quick visitor management system. 

</body>
</html>
