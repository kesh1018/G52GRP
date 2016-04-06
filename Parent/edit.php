<?php
	include('session.php');

	$db = mysql_select_db("dbregistration", $connection);

	if(isset($_POST['name'])){
	$ID = $_POST['pk'];
	$column = $_POST['name'];
	$value = $_POST['value'];

	$ID = mysql_real_escape_string($ID);
	$column = mysql_real_escape_string($column);
	$value = mysql_real_escape_string($value);

     $query = mysql_query("UPDATE visitor_list SET $column = '$value' WHERE ID = $ID ");
     mysql_query($query);
	}
?>