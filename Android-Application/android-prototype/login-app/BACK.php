<?php
    $con = mysqli_connect("localhost", "root", "", "visitor_list");
    
    $sql = "SELECT * FROM `visitor_list` WHERE ID=(SELECT MAX(ID) FROM `visitor_list`)";
	
	$res = mysqli_query($con,$sql);
	
    $result = array();
    $result["success"] = false;  
    
	while($row = mysqli_fetch_array($res)){
		array_push($result,array(
			'name'=>$row['name'],
			'IC_no'=>$row['IC_no'],
			'dob'=>$row['dob'],
			'gender'=>$row['gender'],
			'address'=>$row['address'],
			'race'=>$row['race'],
			'religion'=>$row['religion'],
			'contact_no'=>$row['contact_no'],
			'registration_no'=>$row['registration_no'],
			'category'=>$row['category'],
			'date'=>$row['date'],
			'check_in'=>$row['check_in'],
			'check_out'=>$row['check_out'],
			'remarks'=>$row['remarks'],
			'blacklist'=>$row['blacklist']
			
		));
	}    
    echo json_encode(array("result"=>$result));
	
	mysqli_close($con)
?>