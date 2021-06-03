<?php
	if(isset($_POST['service']) && isset($_POST['billing_name']) && isset($_POST['tracking_no']))
	{
		// include Database connection file 
		include("db_connection.php");

		// get values 
		$service = $_POST['service'];
		$billing_name = $_POST['billing_name'];
		$tracking_no = $_POST['tracking_no'];

		$query = "INSERT INTO k9(service, billing_name, tracking_no) VALUES('$service', '$billing_name', '$tracking_no')";
		if (!$result = mysqli_query($con, $query)) {
	        exit(mysqli_error($con));
	    }
	    echo "1 Record Added!";
	}
?>