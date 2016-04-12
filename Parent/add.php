<?php

	$connection = mysql_connect("localhost", "root", "");

	if(!$connection){
		die('Could not connect :' . mysqli_error());
	}

	$db = mysql_select_db("dbregistration", $connection);


	if (isset($_POST['add'])) {
			
		  	$name = $_POST['Name'];
			$IC_No= $_POST['IC_No'];
			$DOB = $_POST['DOB'];
			$gender= $_POST['gender'];
			$address = $_POST['address'];
			$race = $_POST['race'];
			$religion = $_POST['religion'];
			$contact_num = $_POST['contact_num'];
			$registration_num = $_POST['registration_num'];
			$category = $_POST['category'];
			$date = $_POST['date'];
			$check_in = $_POST['check_in'];
			$check_out = $_POST['check_out'];
			$remarks = $_POST['remarks'];
		

			$name = mysql_real_escape_string($name);
			$IC_No = mysql_real_escape_string($IC_No);
			$DOB = mysql_real_escape_string($DOB);
			$gender = mysql_real_escape_string($gender);
			$address = mysql_real_escape_string($address);
			$race = mysql_real_escape_string($race);
			$religion = mysql_real_escape_string($religion);
			$contact_num = mysql_real_escape_string($contact_num);
			$registration_num = mysql_real_escape_string($registration_num);
			$category = mysql_real_escape_string($category);
			$date = mysql_real_escape_string($date);
			$check_in = mysql_real_escape_string($check_in);
			$check_out = mysql_real_escape_string($check_out);
			$remarks = mysql_real_escape_string($remarks);
			
			$query2 = mysql_query("SELECT * FROM visitor_list WHERE (name = '$name' OR IC_No = '$IC_No') AND blacklist = 'YES'");

			if(mysql_num_rows($query2) != 0){
				echo '<script language="javascript">
							alert("This visitor is Blacklisted for Security Reasons");
							window.location.href="visitor.php";
						</script>';
				
			}else{
				$query = " INSERT INTO visitor_list (name, IC_No, dob, gender, address, race, religion, contact_no, registration_no, category, date, check_in, check_out, remarks, blacklist)
				VALUES ('$name', '$IC_No', '$DOB','$gender', '$address', '$race','$religion', '$contact_num', '$registration_num', '$category', '$date', '$check_in', 'check_out', '$remarks', 'NO')";

				mysql_query($query);
				mysql_close($connection);
				header("location: visitor.php"); 
			}
			
	}

?>