<?php
	// include Database connection file 
	include("db_connection.php");

	// Design initial table header 
	$data = '<table class="table-responsive table table-bordered table-striped" width="100%">
						<tr>
							<th>Created</th>
							<th>Order No</th>
							<th>Service</th>
							<th>Billing Name</th>
							<th>Zip</th>
							<th>Shipping</th>
							<th>Weight</th>
							<th>Tracking No</th>
							<th>Carton</th>
							<th>Pick No</th>
							<th>Update</th>
							<th>Delete</th>
						</tr>';

	$query = "SELECT * from k9 ORDER BY track_date DESC";

	if (!$result = mysqli_query($con, $query)) {
        exit(mysqli_error($con));
    }

    // if query results contains rows then featch those rows 
    if(mysqli_num_rows($result) > 0)
    {
    	//$number = 1;
    	while($row = mysqli_fetch_assoc($result))
    	{
    		$data .= '<tr>
				<td>'.$row['track_date'].'</td>
				<td>'.$row['order_no'].'</td>
				<td>'.$row['service'].'</td>
				<td>'.$row['billing_name'].'</td>
				<td>'.$row['zip'].'</td>
				<td>'.$row['shipping_country'].'</td>
				<td>'.$row['weight'].'</td>
				<td>'.$row['tracking_no'].'</td>
				<td>'.$row['carton_quantity'].'</td>
				<td>'.$row['pick_no'].'</td>
				<td>
				<button onclick="GetUserDetails('.$row['id'].')" class="btn btn-warning btn-sm">Update</button>
				</td>
				<td>
				<button onclick="DeleteUser('.$row['id'].')" class="btn btn-danger btn-sm">Delete</button>
				</td>
    		</tr>';
    		//$number++;
    	}
    }
    else
    {
    	// records now found 
    	$data .= '<tr><td colspan="10">Records not found!</td></tr>';
    }

    $data .= '</table>';

    echo $data;
?>