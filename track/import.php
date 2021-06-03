<?php
include('config.php');
if(isset($_POST["Import"])){
		$con = getdb();
		echo $filename=$_FILES["file"]["tmp_name"];
		 if($_FILES["file"]["size"] > 0)
		 {
		  	$file = fopen($filename, "r");
	         while (($getData = fgetcsv($file, 10000, ",")) !== FALSE)
	         {
	           $sql = "INSERT into trackinginfo (track_id,name,service,postcode,shipping,weight,tracking_no,carton_quantity,pick_no,track_date) values ('".$getData[0]."','".$getData[1]."','".$getData[2]."','".$getData[3]."','".$getData[4]."','".$getData[5]."','".$getData[6]."','".$getData[7]."','".$getData[8]."','".$getData[9]."')";
				var_dump($sql);
					exit();
	         //we are using mysql_query function. it returns a resource on true else False on error
	           $result = $con->query($sql);
				if(!$result )
				{
					echo "<script type=\"text/javascript\">
							alert(\"Invalid File:Please Upload CSV File.\");
							window.location = \"index.php\"
						</script>";		
				}
	         }
	         fclose($file);
	         //throws a message if data successfully imported to mysql database from excel file
	         echo "<script type=\"text/javascript\">
						alert(\"CSV File has been successfully Imported.\");
						window.location = \"index.php\"
					</script>";	
			
		 }
	}


 if(isset($_POST["Export"])){
		 
      header('Content-Type: text/csv; charset=utf-8');  
      header('Content-Disposition: attachment; filename=data.csv');  
      $output = fopen("php://output", "w");  
      fputcsv($output, array('Order Number', 'Billing Name', 'Service', 'Post Code', 'Shipping Country', 'Weight', 'Tracking No','Carton Quantity','Pick No', 'Tracking Date'));  
      $query = "SELECT * from trackinginfo ORDER BY track_id DESC";  
      $result = mysqli_query($con, $query);  
      while($row = mysqli_fetch_assoc($result))  
      {  
           fputcsv($output, $row);  
      }  
      fclose($output);  
 }  
	
function get_all_records(){
    $con = getdb();
    $Sql = "SELECT * FROM trackinginfo";
    $result = mysqli_query($con, $Sql);  
    if (mysqli_num_rows($result) > 0) {
     echo "<div class='table-responsive'><table id='myTable' class='table table-striped table-bordered'>
     <thead>
     <tr>
     					<th>Order#</th>
				  		<th>Billing Name</th>
				  		<th>Service</th>
				  		<th>Post Code</th>
				  		<th>Shipping Country</th>
				  		<th>Weight</th>
				  		<th>Tracking#</th>
				  		<th>Carton Quantity</th>
				  		<th>Pick#</th>
				  		<th>Date Created</th>
                        </tr></thead><tbody>";
     while($row = mysqli_fetch_assoc($result)) {
         echo "<tr><td>" . $row['track_id']."</td>
                   <td>" . $row['name']."</td>
                   <td>" . $row['service']."</td>
                   <td>" . $row['postcode']."</td>
                   <td>" . $row['shipping']."</td>
                   <td>" . $row['weight']."</td>
                   <td>" . $row['tracking_no']."</td>
                   <td>" . $row['carton_quantity']."</td>
                   <td>" . $row['pick_no']."</td>
                   <td>" . $row['track_date']."</td></tr>";
         
     }
	//  echo "<tr> <td><a href='' class='btn btn-danger' id='status_btn' data-loading-text='Changing Status..'>Export</a></td></tr>";
     echo "</tbody></table></div>";
	 
} else {
     echo "you have no recent pending orders";
}
}








		 
?>	