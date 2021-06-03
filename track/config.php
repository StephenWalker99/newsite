<?php
function getdb(){
$servername = "localhost";
$username = "root";
$password = "";
$db = "members";

try { 
    $con = mysqli_connect($servername, $username, $password, $db);
    //$con->set_charset("utf8");
     //echo "Connected successfully"; 
    }
catch(exception $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
    return $con;
}
?>