<?php
	require '../db_config.php';
	$id  = $_GET["id"];
	$sql = "DELETE FROM k9 WHERE id = '".$id."'";
	$result = $mysqli->query($sql);
	
	echo json_encode([$id]);
// 
?>