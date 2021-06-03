<?php
	require '../db_config.php';
	$post = file_get_contents('php://input');
	$post = json_decode($post);
	$sql = "INSERT INTO k9 (track_date,order_no,service,billing_name,zip,shipping_country,weight) VALUES ('".$post->track_date."','".$post->order_no."','".$post->service."','".$post->billing_name."','".$post->zip."','".$post->shipping_country."','".$post->weight."')";

	$result = $mysqli->query($sql);

	$sql = "SELECT * FROM k9 Order by id desc LIMIT 1"; 
	$result = $mysqli->query($sql);
	$data = $result->fetch_assoc();
	
	echo json_encode($data);
// 
?>