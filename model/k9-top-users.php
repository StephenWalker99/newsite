<?php
/* Database connection start */
$servername = "db769156931.hosting-data.io";
$username = "dbo769156931";
$password = "Tottenham_99";
$dbname = "db769156931";

$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());

/* Database connection end */


// storing  request (ie, get/post) global array to a variable  
$requestData= $_REQUEST;

$columns = array( 
// datatable column index  => database column name
	0=>'fname', 
	1=>'lname',
	2=>'email',
);

// getting total number records without any search
$sql = "SELECT fname,lname,email";
$sql.=" FROM k9";
$query=mysqli_query($conn, $sql) or die("k9-top-users.php: get gps");
$totalData = mysqli_num_rows($query);
$totalFiltered = $totalData;  // when there is no search parameter then total number rows = total number filtered rows.


$sql = "SELECT fname,lname,email";
$sql.=" FROM k9 WHERE 1=1";
if( !empty($requestData['search']['value']) ) {   // if there is a search parameter, $requestData['search']['value'] contains search parameter
	$sql.=" AND ( fname LIKE '".$requestData['search']['value']."%' ";    
	$sql.=" OR lname LIKE '".$requestData['search']['value']."%' ";
	//$sql.=" OR service LIKE '".$requestData['search']['value']."%' )";
	//$sql.=" OR email LIKE '".$requestData['search']['value']."%' )";
	//$sql.=" OR zip LIKE '".$requestData['search']['value']."%' )";
}
$query=mysqli_query($conn, $sql) or die("k9-top-users.php: get gps");
$totalFiltered = mysqli_num_rows($query); // when there is a search parameter then we have to modify total number filtered rows as per search result. 
$sql.=" ORDER BY ". $columns[$requestData['order'][0]['column']]."   ".$requestData['order'][0]['dir']."  LIMIT ".$requestData['start']." ,".$requestData['length']."   ";
/* $requestData['order'][0]['column'] contains colmun index, $requestData['order'][0]['dir'] contains order such as asc/desc  */	
$query=mysqli_query($conn, $sql) or die("k9-top-users.php: get gps");

$data = array();
while( $row=mysqli_fetch_array($query) ) {  // preparing an array
	$nestedData=array(); 

	$nestedData[] = $row["fname"];
	$nestedData[] = $row["lname"];
	$nestedData[] = $row["email"];
	$data[] = $nestedData;
}

$json_data = array(
			"draw"  => intval( $requestData['draw'] ),   // for every request/draw by clientside , they send a number as a parameter, when they recieve a response/data they first check the draw number, so we are sending same number in draw. 
			"recordsTotal"    => intval( $totalData ),  // total number of records
			"recordsFiltered" => intval( $totalFiltered ), // total number of records after searching, if there is no searching then totalFiltered = totalData
			"data"            => $data   // total data array
			);

echo json_encode($json_data);  // send data as json format
?>