<?php
	require '../db_config.php';

	$num_rec_per_page = 5;
	if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };
	$start_from = ($page-1) * $num_rec_per_page;

	if (!empty($_GET["search"])){
		$sqlTotal = "SELECT * FROM k9 
			WHERE (order_no LIKE '%".$_GET["search"]."%' OR service LIKE '%".$_GET["search"]."%')"; 
		$sql = "SELECT * FROM k9 
			WHERE (order_no LIKE '%".$_GET["search"]."%' OR service LIKE '%".$_GET["search"]."%') 
			LIMIT $start_from, $num_rec_per_page"; 
	}else{
		$sqlTotal = "SELECT * FROM k9"; 
		$sql = "SELECT * FROM k9 ORDER BY track_date DESC LIMIT $start_from, $num_rec_per_page"; 
	}

	$result = $mysqli->query($sql);

	while($row = $result->fetch_assoc()){
	     $json[] = $row;
	}
	$data['data'] = $json;

	$result =  mysqli_query($mysqli,$sqlTotal);
	$data['total'] = mysqli_num_rows($result);
	
	echo json_encode($data);
?>