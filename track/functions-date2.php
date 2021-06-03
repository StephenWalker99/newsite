<?php
include('config.php');
$con = getdb();
   if(isset($_POST['Import'])){
		if($_FILES['file']['name']){
			
			$arrFileName = explode('.',$_FILES['file']['name']);
			if($arrFileName[1] == 'csv'){
				$file = fopen($_FILES['file']['tmp_name'], "r");
		  	// read the first line and ignore it
			fgetcsv($file);
	        while (($data = fgetcsv($file, 10000, ",")) !== FALSE) {
	        
	 $sql = "UPDATE k9,temp_track_date SET k9.track_date = temp_track_date.track_date WHERE k9.order_no = temp_track_date.order_no ";

	           $result = mysqli_query($con, $sql);
				if(!isset($result))
				{
					echo "<script>
							alert('Invalid File:Please Upload CSV File');
							window.location = '../track-date.php'
						  </script>";		
				}
				else {
					  echo "<script>
						alert('CSV File has been successfully Imported');
						window.location = '../track-date.php'
					</script>";
				}
	         }
			
	         fclose($file);	
		 }
	}
}	 
	
	 if(isset($_POST["Export"])){
		 
      header('Content-Type: text/csv; charset=utf-8');  
      header('Content-Disposition: attachment; filename=data.csv');  
      $output = fopen("php://output", "w");  
      fputcsv($output, array('Order Date','Order No'));  
      $query = "SELECT track_date,order_no from temp_track_date ORDER BY track_date DESC";  
      $result = mysqli_query($con, $query);  
      while($row = mysqli_fetch_assoc($result))  
      {  
           fputcsv($output, $row);  
      }  
      fclose($output);  
 }  
	
function get_all_records4(){
    $con = getdb();
    $Sql = "SELECT track_date,order_no FROM temp_track_date ORDER BY track_date DESC";
    $result = mysqli_query($con, $Sql);  
    if (mysqli_num_rows($result) > 0) {
     echo "<div class='table-responsive'><table id='myTable' class='table table-striped table-bordered'>
     				<thead>
     					<tr>
				  		<th>Created Date</th>
				  		<th>Order No</th>
                        </tr></thead><tbody>";
     while($row = mysqli_fetch_assoc($result)) {
         echo "<tr>	
                   <td>" . $row['track_date']."</td>
                   <td>" . $row['order_no']."</td></tr>";
         
     }
	//  echo "<tr> <td><a href='' class='btn btn-danger' id='status_btn' data-loading-text='Changing Status..'>Export</a></td></tr>";
     echo "</tbody></table></div>";
	 
} else {
     echo "you have no recent pending orders";
}
}
?>