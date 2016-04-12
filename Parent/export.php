<?php
	
	$connection = mysql_connect("localhost", "root", "");

	// Initialize connection
	if(!$connection){
		die('Could not connect :' . mysqli_error());
	}

	$db = mysql_select_db("dbregistration", $connection);

	// Initialize query
	$query = "select * from visitor_list";	
	 function cleanData(&$str)
  {
    $str = preg_replace("/\t/", "\\t", $str);
    $str = preg_replace("/\r?\n/", "\\n", $str);
    if(strstr($str, '"')) $str = '"' . str_replace('"', '""', $str) . '"';
  }

  // filename for download
  $filename = "visitor_list_" . date('Ymd') . ".xls";

  header("Content-Disposition: attachment; filename=\"$filename\"");
  header("Content-Type: application/vnd.ms-excel");	

  $flag = false;
  $result = mysql_query($query) or die('Query failed!');
  while(false !== ($row = mysql_fetch_assoc($result))) {
    if(!$flag) {
      // display field/column names as first row
      echo implode("\t", array_keys($row)) . "\r\n";
      $flag = true;
    }
    array_walk($row, __NAMESPACE__ . '\cleanData');
    echo implode("\t", array_values($row)) . "\r\n";
  }
  exit;
	    

?>x`