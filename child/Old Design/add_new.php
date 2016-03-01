

<?php
$servername = "localhost";
$username ="root"; 
$password = "";
$dbname = "vms_database";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error)
{
	die("Connection failed: " . $conn->connect_error);
}
echo "<p>New visitor has been added!</p>";

		$name = $_POST['name'];
		$address = $_POST['address'];
		$category = $_POST['category'];
		$year = $_POST['year'];
		
		$sql = "INSERT INTO visitor (name, address, category, year) VALUES ('$name', '$address', '$category', '$year')";
		$result = $conn->query($sql);
	
else 
{
	echo "No results";
}
$conn->close();
?>


