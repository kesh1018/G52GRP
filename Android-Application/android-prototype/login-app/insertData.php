<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "visitor_list";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$date = $_POST["date"];
$vehicle_type = $_POST["vehicle_type"];
$registration_no = $_POST["registration_no"];
$contact_no = $_POST["contact_no"];
$remarks = $_POST["remarks"];
$category = $_POST["category"];
$sql = "UPDATE visitor_list SET date=('$date'), vehicle_type=('$vehicle_type'), registration_no=('$registration_no'), contact_no=('$contact_no'), remarks=('$remarks'), category=('$category') ORDER BY ID DESC LIMIT 1";

if (mysqli_query($conn, $sql)) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>