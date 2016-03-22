<?php
/* Database connection start */
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbregistration";

$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());

/* Database connection end */


// storing  request (ie, get/post) global array to a variable  
$requestData= $_REQUEST;


$columns = array( 
// datatable column index  => database column name
    0 => 'NAME', 
    1 => 'IC_No',
    2 => 'address',
    3 => 'gender',
    4 => 'race',
    5 => 'category',
    6 => 'DATE',
    7 => 'check_in',
    8 => 'check_out'

);


// getting total number records without any search
$sql = "SELECT * FROM visitor_list";
$query=mysqli_query($conn, $sql) or die("Connection to the Server Failed");
$totalData = mysqli_num_rows($query);
$totalFiltered = $totalData;  // when there is no search parameter then total number rows = total number filtered rows.


if( !empty($requestData['search']['value']) ) {
    // if there is a search parameter
    $sql = "SELECT * ";
    $sql.=" FROM visitor_list";
    $sql.=" WHERE NAME LIKE '".$requestData['search']['value']."%' ";    // $requestData['search']['value'] contains search parameter
    $sql.=" OR IC_No LIKE '".$requestData['search']['value']."%' ";
    $sql.=" OR address LIKE '".$requestData['search']['value']."%' ";
    $sql.=" OR gender LIKE '".$requestData['search']['value']."%' ";
    $sql.=" OR race LIKE '".$requestData['search']['value']."%' ";
    $sql.=" OR category LIKE '".$requestData['search']['value']."%' ";
    $sql.=" OR DATE LIKE '".$requestData['search']['value']."%' ";
    $sql.=" OR check_in LIKE '".$requestData['search']['value']."%' ";
    $sql.=" OR check_out LIKE '".$requestData['search']['value']."%' ";

    $query=mysqli_query($conn, $sql) or die("Server failed");
    $totalFiltered = mysqli_num_rows($query); // when there is a search parameter then we have to modify total number filtered rows as per search result without limit in the query 

    $sql.=" ORDER BY ". $columns[$requestData['order'][0]['column']]."   ".$requestData['order'][0]['dir']."   LIMIT ".$requestData['start']." ,".$requestData['length']."   "; // $requestData['order'][0]['column'] contains colmun index, $requestData['order'][0]['dir'] contains order such as asc/desc , $requestData['start'] contains start row number ,$requestData['length'] contains limit length.
    $query=mysqli_query($conn, $sql) or die("Server failed"); // again run query with limit
    
} else {    

    $sql = "SELECT * ";
    $sql.=" FROM visitor_list";
    $sql.=" ORDER BY ". $columns[$requestData['order'][0]['column']]."   ".$requestData['order'][0]['dir']."   LIMIT ".$requestData['start']." ,".$requestData['length']."   ";
    $query=mysqli_query($conn, $sql) or die("Server Failed");
    
}

$data = array();
while( $row=mysqli_fetch_array($query) ) {  // preparing an array
    $nestedData=array(); 

    $nestedData[] = $row["NAME"];
    $nestedData[] = $row["IC_No"];
    $nestedData[] = $row["address"];
    $nestedData[] = $row["gender"];
    $nestedData[] = $row["race"];
    $nestedData[] = $row["category"];
    $nestedData[] = $row["DATE"];
    $nestedData[] = $row["check_in"];
    $nestedData[] = $row["check_out"];
    
    $data[] = $nestedData;
}



$json_data = array(
            "draw"            => intval( $requestData['draw'] ),   // for every request/draw by clientside , they send a number as a parameter, when they recieve a response/data they first check the draw number, so we are sending same number in draw. 
            "recordsTotal"    => intval( $totalData ),  // total number of records
            "recordsFiltered" => intval( $totalFiltered ), // total number of records after searching, if there is no searching then totalFiltered = totalData
            "data"            => $data   // total data array
            );

echo json_encode($json_data);  // send data as json format

?>
