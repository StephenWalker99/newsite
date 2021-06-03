<?php
/* Database connection start */
$servername = "db769156931.hosting-data.io";
$username = "dbo769156931";
$password = "Tottenham_99";
$dbname = "db769156931";

$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());
/* Database connection end */

//DBConnect()

// storing  request (ie, get/post) global array to a variable  
$requestData= $_REQUEST;


$columns = array( 
// datatable column index  => database column name
	0 => 'id', 
	1 => 'order_no',
	2 => 'service',
	3 => 'billing_name',
	4 => 'zip',
	5 => 'shipping_country',
	6 => 'weight',
	7 => 'tracking_no',
	8 => 'carton_quantity',
	9 => 'pick_no',
	//10 => 'track_date',
);




// getting total number records without any search
$sql = "SELECT id";
$sql.=" FROM soopa1";
//$sql.=" FROM patient WHERE 1=1";
$query=mysqli_query($conn, $sql) or die("soopa-grid.php: get trackinginfos");
$totalData = mysqli_num_rows($query);
$totalFiltered = $totalData;  // when there is no search parameter then total number rows = total number filtered rows.


$sql = "SELECT id, order_no, service, billing_name, zip, shipping_country, weight, tracking_no, carton_quantity, pick_no";
$sql.=" FROM soopa1 WHERE 1=1";
if( !empty($requestData['search']['value']) ) {   // if there is a search parameter, $requestData['search']['value'] contains search parameter
	$sql.=" AND ( order_no LIKE '".$requestData['search']['value']."%' ";    
	//$sql.=" OR track_date LIKE '".$requestData['search']['value']."%' ";
	//$sql.=" OR order_no LIKE '".$requestData['search']['value']."%' ";
	//$sql.=" OR service LIKE '".$requestData['search']['value']."%' ";
	$sql.=" OR billing_name LIKE '".$requestData['search']['value']."%' ";
	//$sql.=" OR postcode LIKE '".$requestData['search']['value']."%' ";
	$sql.=" OR tracking_no LIKE '".$requestData['search']['value']."%' )";
	//$sql.=" OR patient_gender LIKE '".$requestData['search']['value']."%' )";
	
	
}
$query=mysqli_query($conn, $sql) or die("soopa-grid.php: get trackinginfos");
$totalFiltered = mysqli_num_rows($query); // when there is a search parameter then we have to modify total number filtered rows as per search result. 
$sql.=" ORDER BY ". $columns[$requestData['order'][0]['column']]."   ".$requestData['order'][0]['dir']."  LIMIT ".$requestData['start']." ,".$requestData['length']."   ";
/* $requestData['order'][0]['column'] contains colmun index, $requestData['order'][0]['dir'] contains order such as asc/desc  */	
$query=mysqli_query($conn, $sql) or die("soopa-grid.php: get trackinginfos");
	

$data = array();
while( $row=mysqli_fetch_array($query) ) {  // preparing an array
	$nestedData=array(); 
	//$nestedData[] = $row["user_id"];
	$nestedData[] = $row["order_no"];
	$nestedData[] = $row["name"];
	$nestedData[] = $row["service"];
	$nestedData[] = $row["zip"];
	$nestedData[] = $row["shipping"];
	$nestedData[] = $row["weight"];
	$nestedData[] = $row["tracking_no"];
	$nestedData[] = $row["carton_quantity"];
	$nestedData[] = $row["pick_no"];
	//$nestedData[] = $row["track_date"];
	$data[] = $nestedData;
}

$json_data = array(
			"draw" => intval( $requestData['draw'] ),   // for every request/draw by clientside , they send a number as a parameter, when they recieve a response/data they first check the draw number, so we are sending same number in draw. 
			"recordsTotal" => intval( $totalData ),  // total number of records
			"recordsFiltered" => intval( $totalFiltered ), // total number of records after searching, if there is no searching then totalFiltered = totalData
			"data" => $data   // total data array
			);

echo json_encode($json_data);  // send data as json format

?>
