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

	// get data from database
	$sql = "SELECT * FROM visitors";  
	$result = $conn->query($sql);
	while($row = $result->fetch_assoc())
	{		
		$name = $row['name'];
		$ic_number = $row['ic_number'];
		$gender = $row['gender'];
		$address = $row['address'];
		
		echo "Name : $name<br>";
		echo "IC Number : $ic_number<br>";
		echo "Gender : $gender";
		echo "Address : $address";
	}  
?>

<p><a href="add.php">Add New Visitor</a></p>

<div id="footer">
<p>&copy; G52GRP Visitor Management System 2016</p><br>
</div>
</div>

</body>
</html>
