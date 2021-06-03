<?php
// include Database connection file
include("db_connection.php");

// check request
if(isset($_POST))
{
    // get values
    $id = $_POST['id'];
    $track_date = $_POST['track_date'];
    $order_no = $_POST['order_no'];
    $service = $_POST['service'];
    $billing_name = $_POST['billing_name'];
    $zip = $_POST['zip'];
    $shipping_country = $_POST['shipping_country'];
    $weight = $_POST['weight'];
    $tracking_no = $_POST['tracking_no'];
    $carton_quantity = $_POST['carton_quantity'];
    $pick_no = $_POST['pick_no'];
    // Update User details
    $query = "UPDATE k9 SET track_date = '$track_date', order_no = '$order_no', service = '$service', billing_name = '$billing_name', zip = '$zip', shipping_country = '$shipping_country', weight = '$weight', tracking_no = '$tracking_no', carton_quantity = '$carton_quantity', pick_no = '$pick_no' WHERE id = '$id'";
    if (!$result = mysqli_query($con, $query)) {
        exit(mysqli_error($con));
    }
}