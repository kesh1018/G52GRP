<?php

	$connection = mysql_connect("localhost", "root", "");

	if(!$connection){
		die('Could not connect :' . mysqli_error());
	}

	$db = mysql_select_db("dbregistration", $connection);


	if (isset($_POST['add'])) {
			
		  	$name = $_POST['Name'];
		  	$guard_id = $_POST['guard_id'];
			$IC_No= $_POST['IC_No'];
			$gender= $_POST['gender'];
			$race = $_POST['race'];
			$religion = $_POST['religion'];
			$address = $_POST['address'];
			$contact_no = $_POST['contact_no'];
			$date1 = $_POST['date1'];
			$check_in = $_POST['check_in'];
			$date2 = $_POST['date2'];
			$check_out = $_POST['check_out'];
			$remarks = $_POST['remarks'];
		

			$name = mysql_real_escape_string($name);
			$guard_id = mysql_real_escape_string($guard_id);
			$IC_No = mysql_real_escape_string($IC_No);
			$gender = mysql_real_escape_string($gender);
			$race = mysql_real_escape_string($race);
			$religion = mysql_real_escape_string($religion);
			$address = mysql_real_escape_string($address);
			$contact_no = mysql_real_escape_string($contact_no);
			$date1 = mysql_real_escape_string($date1);
			$check_in = mysql_real_escape_string($check_in);
			$date2 = mysql_real_escape_string($date2);
			$check_out = mysql_real_escape_string($check_out);
			$remarks = mysql_real_escape_string($remarks);
			
			
			$query = " INSERT INTO guard_list (name, guard_id, IC_No, gender, race, religion, address, contact_no, date1, check_in, date2, check_out, remarks)
			VALUES ('$name', '$guard_id', '$IC_No', $gender', '$race','$religion', '$address', '$contact_no', '$date1', '$check_in', '$date2', 'check_out', '$remarks')";

				mysql_query($query);
				mysql_close($connection);
			
			}
			
	header("location: settings.php"); 
?>