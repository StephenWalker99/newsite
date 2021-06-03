<?php

function dbConnect (){
 	$conn =	null;
 	$host = 'db769156931.hosting-data.io';
 	$db = 	'db769156931';
 	$user = 'dbo769156931';
 	$pwd = 	'Tottenham_99';
	try {
	   	$conn = new PDO('mysql:host='.$host.';dbname='.$db, $user, $pwd);
		//echo 'Connected succesfully.<br>';
	}
	catch (PDOException $e) {
		echo '<p>Cannot connect to database !!</p>';
		echo '<p>'.$e.'</p>';
	    exit;
	}
	return $conn;
 }

 ?>