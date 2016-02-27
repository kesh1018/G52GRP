<!doctype html>

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
		<li><a href=".php">About</a>
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

// View all data 

<?php
$url = parse_url(getenv("CLEARDB_DATABASE_URL"));

$server = "localhost";
$username = "root";
$password = "";
$db = "db";

$conn = new mysqli($server, $username, $password, $db);

// Check connection
if($conn->connect_error)
{
	die("connection failed: " . $conn->connect_error);
}

	// check if the valid 'id' variable is set in URL
	if (isset($_GET['id']) && is_numeric($_GET['id'])) {

		//get id value
		$id = $_GET['id'];
	}

	// delete data 
	$sql = "DELETE FROM visitors WHERE id=$id";  
	$result = $conn->query($sql) or die (mysql_error());

	// redirect back to view page
	header("Location: view.php"):
}

else {
	// if id is not set, or invalid, redirect back to view page
	{
		header("Location: view.php"):
	}
}
	
?>

<p><a href="add.php">Add New Visitor</a></p>

<div id="footer">
<p>&copy; G52GRP Visitor Management System 2016</p><br>
</div>
</div>

</body>
</html>
