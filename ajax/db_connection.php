<?php
// Connection variables to K9connectables
$host = "";
$user = "";
$password = "";
$database = "";

// Connect to MySQL Database
$con = new mysqli($host, $user, $password, $database);

// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

?>
