<?php

	$connection = mysql_connect("localhost", "root", "");

	if(!$connection){
		die('Could not connect :' . mysqli_error());
	}

	if (isset( $_POST['add'])) {
			$name = $_POST['name'];
			$IC_no= $_POST['IC_No'];
			$DOB = $_POST['DOB'];
			$gender= $_POST['gender'];
			$address = $_POST['address'];
			$race = $_POST['race'];
			$religion = $_POST['religion'];
			$contact_num = $_POST['contact_num'];
			$registration_num = $_POST['registration_num'];
			$check_in = $_POST['check_in'];
			$check_out = $_POST['check_out'];
			$remarks = $_POST['remarks'];
		}

	//mysql_close($connection);
	//header('Location: visitor.php');
?>