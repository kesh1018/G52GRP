<?php
function renderForm($name, $ic_number, $gender, $address, $error)
{
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link href="css/style.css" rel="stylesheet">
<title>Visitor Management System</title>
</head>

<body>
<?php
// if there are any errors, display them
if ($error != '') {
	echo '<div>'.$error'</div>';
}
?>

<div id="main">
	<h2>Please fill out the following: </h2>
	<form method="post" action:"">
		<p>
			<label for="yourname">Name (required):</label>
			<input name="yourname" type="text" autofocus required id="yourname" placeholder="-- your name --">
		</p>

		<p>
			Gender: &nbsp;
	 		<label>
	  		<input name="gender" type="radio" id="gender" value="female" checked>Female
	 		</label>
	
			&nbsp;
			<label>
	 			<input name="gender" type="radio" id="gender" value="male">Male
			</label>
		</p>

		<p>
			<label for="age">Age (required):</label>
				<input name="age" type="number" min="1" max="100" autofocus required id="age" placeholder="-- age --">
		</p>

		<p>
  			<input name="reset" type="reset" id="reset"> &nbsp; 
  			<input name="submit" type="submit" id="submit">
  		</p>
	</form>
</div>	
</body>
</html>
<?php
}

// check if the form has been submitted. If it has, start to process the form and save it to database. 
if (isset ($_POST['submit']))
{
	// get valid data
	$name = mysql_real_escape_string(htmlspecialchars($_POST['name']));
	$gender = mysql_real_escape_string(htmlspecialchars($_POST['gender']));
	$address = mysql_real_escape_string(htmlspecialchars($_POST['address']));

	//check to make sure data are entered 
	if ($name == '' || $gender == '' || $address == '')
	{
		// generate error message
		$error = 'ERROR: Please fill in all required fields!';
	}

	// if form is not complete, display form again
	renderForm($name, $ic_number, $gender, $address, $error);
}

else {
	// save data into database 
	mysql_query("INSERT visitors SET yourname='$name', ic_number='$ic_number', gender='$gender', address='$address'") 
	or die(mysql_error));
}

//once saved, redirect back to view page 
header("Location: view.php");
}
}

else 
	// display the form if not submitted 
	renderForm('','','','','');
}
?>

<?php
$url = parse_url(getenv("CLEARDB_DATABASE_URL"));

$server = "localhost";
$username = "root";
$password = "";
$db = "db";

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


<div id="footer">
<p>&copy; G52GRP Visitor Management System 2016</p><br>
</div>
</div>


