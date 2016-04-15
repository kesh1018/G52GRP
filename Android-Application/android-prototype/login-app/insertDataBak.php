<?php
    $con = mysqli_connect("localhost", "root", "", "visitor_list");
    
	//$sql = "SELECT * FROM `visitor_list` WHERE ID=(SELECT MAX(ID) FROM `visitor_list`)";
	
		$registration_no = $_POST["registration_no"];
		$remarks = $_POST["remarks"];
		
		$statement = mysqli_prepare($con, "UPDATE visitor_list SET registration_no='$registration_no', remarks='remarks' WHERE ID=(SELECT MAX(ID) FROM `visitor_list`)");
		mysqli_stmt_execute($statement);
		
		$response = array();
		$response["success"] = true;  
		
	echo json_encode($response);
?>