<?php
	require '../db_config.php';
	$id  = $_GET["id"];
	
	$post = file_get_contents('php://input');
	$post = json_decode($post);
	$sql = "UPDATE k9 SET track_date = '".$post->track_date."', order_no = '".$post->order_no."', service = '".$post->service."', billing_name = '".$post->billing_name."', zip = '".$post->zip."', shipping_country = '".$post->shipping_country."', weight = '".$post->weight."', tracking_no = '".$post->tracking_no."', carton_quantity = '".$post->carton_quantity."', pick_no = '".$post->pick_no."' WHERE id = '".$id."'";
	$result = $mysqli->query($sql);

	$sql = "SELECT * FROM k9 WHERE id = '".$id."'"; 
	$result = $mysqli->query($sql);
	$data = $result->fetch_assoc();
	
	echo json_encode($data);
// 
?>