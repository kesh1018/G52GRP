<?php
	
	// Initialize connection
	$connection = mysql_connect("localhost", "root", "");

	if(!$connection){
		die('Could not connect :' . mysqli_error());
	}

	$db = mysql_select_db("dbregistration", $connection);

	// If add button is clicked
	if (isset($_POST['add'])) {
			
			// Initialize variable
		  	$name = $_POST['Name'];
			$IC_No= $_POST['IC_No'];
			$DOB = $_POST['DOB'];
			$gender= $_POST['gender'];
			$address = $_POST['address'];
			$race = $_POST['race'];
			$religion = $_POST['religion'];
			$contact_num = $_POST['contact_num'];
			$registration_num = $_POST['registration_num'];
			$date = $_POST['date'];
			$category = $_POST['category'];
			$entrypass_num = $_POST['entrypass_num'];
			$check_in = $_POST['check_in'];
			$check_out = $_POST['check_out'];
			$remarks = $_POST['remarks'];
		
			// Prevent MYSQL injection
			$name = mysql_real_escape_string($name);
			$IC_No = mysql_real_escape_string($IC_No);
			$DOB = mysql_real_escape_string($DOB);
			$gender = mysql_real_escape_string($gender);
			$address = mysql_real_escape_string($address);
			$race = mysql_real_escape_string($race);
			$religion = mysql_real_escape_string($religion);
			$contact_num = mysql_real_escape_string($contact_num);
			$registration_num = mysql_real_escape_string($registration_num);
			$date = mysql_real_escape_string($date);
			$category = mysql_real_escape_string($category);
			$entrypass_num = mysql_real_escape_string($entrypass_num);
			$check_in = mysql_real_escape_string($check_in);
			$check_out = mysql_real_escape_string($check_out);
			$remarks = mysql_real_escape_string($remarks);



			// Initialize query for blacklist
			$query2 = mysql_query("SELECT * FROM visitor_list WHERE (name = '$name' OR IC_No = '$IC_No') AND blacklist = 'YES'");

			if(mysql_num_rows($query2) != 0){ //Echo blacklist
				echo '<script language="javascript">
							alert("This visitor is Blacklisted for Security Reasons");
							window.location.href="visitor.php";
						</script>';
				
			}else{

				// Initialize query to insert data
				$query = " INSERT INTO visitor_list (name, IC_No, dob, gender, address, race, religion, contact_no, vehicle_type, registration_no, date, category, check_in, check_out, remarks, blacklist)
				VALUES ('$name', '$IC_No', '$DOB','$gender', '$address', '$race','$religion', '$contact_num', '$registration_num', '$date', '$category', '$entrypass_num' , '$check_in', 'check_out', '$remarks', 'NO')";


				mysql_query($query);
				mysql_close($connection);
				header("location: visitor.php"); 
			}
			
	}

?>