<?php
// Connection variables to K9connectables
$host = "db769156931.hosting-data.io";
$user = "dbo769156931";
$password = "Tottenham_99";
$database = "db769156931";

// Connect to MySQL Database
$con = new mysqli($host, $user, $password, $database);

// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}

?>