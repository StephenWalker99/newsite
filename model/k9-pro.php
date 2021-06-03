<?php
require('model/configxx.php');
session_start();

// choose to view only logged in user //
$sql = "SELECT id, firstN, lastN, email FROM users WHERE id = '" . $_SESSION['id'] . "'";

// choose to view all users //
//$sql = "SELECT * FROM users";
$result = $mysqli->query($sql);

while($row = $result->fetch_array(MYSQLI_ASSOC)){
  $data[] = $row;
}
$results = ["sEcho" => 1,
        	"iTotalRecords" => count($data),
        	"iTotalDisplayRecords" => count($data),
        	"aaData" => $data ];
echo json_encode($results);
?>