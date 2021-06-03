<?php
include('config.php');
$con = getdb();
   if(isset($_POST["Import"])){		
		echo $filename=$_FILES["file"]["tmp_name"];	
		 if($_FILES["file"]["size"] > 0)
		 {
		  	$file = fopen($filename, "r");
		  	// read the first line and ignore it
			fgetcsv($file);
	        while (($getData = fgetcsv($file, 10000, ",")) !== FALSE)
	         {
	 $sql = "UPDATE tracking SET (service,weight) values ('".$getData[0]."','".$getData[1]."')";
	           $result = mysqli_query($con, $sql);
			    // var_dump(mysqli_error_list($con));
			    // exit();
				if(!isset($result))
				{
					echo "<script type=\"text/javascript\">
							alert(\"Invalid File:Please Upload CSV File.\");
							window.location = \"../index.php\"
						  </script>";		
				}
				else {
					  echo "<script type=\"text/javascript\">
						alert(\"CSV File has been successfully Imported.\");
						window.location = \"../index.php\"
					</script>";
				}
	         }
			
	         fclose($file);	
		 }
	}	 
	
	 if(isset($_POST["Export"])){
		 
      header('Content-Type: text/csv; charset=utf-8');  
      header('Content-Disposition: attachment; filename=data.csv');  
      $output = fopen("php://output", "w");  
      fputcsv($output, array('Created At', 'Order Number', 'Service', 'Billing Name', 'Post Code', 'Shipping Country', 'Weight', 'Tracking No','Carton Quantity','Pick No'));  
      $query = "SELECT * from tracking ORDER BY order_no ASC";  
      $result = mysqli_query($con, $query);  
      while($row = mysqli_fetch_assoc($result))  
      {  
           fputcsv($output, $row);  
      }  
      fclose($output);  
 }  
	
function get_all_records(){
    $con = getdb();
    $Sql = "SELECT * FROM tracking";
    $result = mysqli_query($con, $Sql);  
    if (mysqli_num_rows($result) > 0) {
     echo "<div class='table-responsive'><table id='myTable' class='table table-striped table-bordered'>
     <thead>
     <tr>
     					<th>Created</th>
				  		<th>Order No</th>
				  		<th>Service</th>
				  		<th>Billing Name</th>
				  		<th>Post Code</th>
				  		<th>Shipping Country</th>
				  		<th>Weight</th>
				  		<th>Tracking No</th>
				  		<th>Carton Quantity</th>
				  		<th>Pick No</th>
                        </tr></thead><tbody>";
     while($row = mysqli_fetch_assoc($result)) {
         echo "<tr>
                   <td>" . $row['track_date']."</td>
                   <td>" . $row['order_no']."</td>
                   <td>" . $row['service']."</td>
                   <td>" . $row['billing_name']."</td>
                   <td>" . $row['postcode']."</td>
                   <td>" . $row['shipping_country']."</td>
                   <td>" . $row['weight']."</td>
                   <td>" . $row['tracking_no']."</td>
                   <td>" . $row['carton_quantity']."</td>
                   <td>" . $row['pick_no']."</td></tr>";
         
     }
	//  echo "<tr> <td><a href='' class='btn btn-danger' id='status_btn' data-loading-text='Changing Status..'>Export</a></td></tr>";
     echo "</tbody></table></div>";
	 
} else {
     echo "you have no recent pending orders";
}
}
?>