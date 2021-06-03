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
	0=>'track_date', 
	1=>'order_no',
	2=>'service',
	3=>'billing_name',
	4=>'postcode',
	5=>'shipping_country',
	6=>'weight',
	7=>'tracking_no',
	8=>'carton_quantity',
	9=>'pick_no',
);



// getting total number records without any search
$sql = "SELECT track_date,order_no,service,billing_name,zip,shipping_country,weight,tracking_no,carton_quantity,pick_no";
$sql.=" FROM soopa1";
$query=mysqli_query($conn, $sql) or die("order-grid.php: get gps");
$totalData = mysqli_num_rows($query);
$totalFiltered = $totalData;  // when there is no search parameter then total number rows = total number filtered rows.


$sql = "SELECT track_date,order_no,service,billing_name,zip,shipping_country,weight,tracking_no,carton_quantity,pick_no";
$sql.=" FROM soopa1 WHERE 1=1";
if( !empty($requestData['search']['value']) ) {   // if there is a search parameter, $requestData['search']['value'] contains search parameter
	$sql.=" AND ( track_date LIKE '".$requestData['search']['value']."%' ";    
	$sql.=" OR order_no LIKE '".$requestData['search']['value']."%' ";
	//$sql.=" OR service LIKE '".$requestData['search']['value']."%' )";
	$sql.=" OR billing_name LIKE '".$requestData['search']['value']."%' )";
	//$sql.=" OR zip LIKE '".$requestData['search']['value']."%' )";
}
$query=mysqli_query($conn, $sql) or die("order-grid.php: get gps");
$totalFiltered = mysqli_num_rows($query); // when there is a search parameter then we have to modify total number filtered rows as per search result. 
$sql.=" ORDER BY ". $columns[$requestData['order'][0]['column']]."   ".$requestData['order'][0]['dir']."  LIMIT ".$requestData['start']." ,".$requestData['length']."   ";
/* $requestData['order'][0]['column'] contains colmun index, $requestData['order'][0]['dir'] contains order such as asc/desc  */	
$query=mysqli_query($conn, $sql) or die("order-grid.php: get gps");

$data = array();
while( $row=mysqli_fetch_array($query) ) {  // preparing an array
	$nestedData=array(); 

	$nestedData[] = $row["track_date"];
	$nestedData[] = $row["order_no"];
	$nestedData[] = $row["service"];
	$nestedData[] = $row["billing_name"];
	$nestedData[] = $row["zip"];
	$nestedData[] = $row["shipping_country"];
	$nestedData[] = $row["weight"];
	$nestedData[] = $row["tracking_no"];
	$nestedData[] = $row["carton_quantity"];
	$nestedData[] = $row["pick_no"];
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
