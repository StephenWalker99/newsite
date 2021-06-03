<?php
/**
 * class.model.add.php
 *
 * The purpose of the file is to add a recipe to the database using a form it also uploads an imsge to a directory. This file uses JSON to encode data back to the controller.
 *
 * PHP version 5.3
 *
 * @author  Original Author <n3266475@live.tees.ac.uk>
 * @version SVN:1.0
 */
include("database.php");

$data = array();

if(isset($_GET['files']))
{	
	$error = false;
	$files = array();

	$uploaddir = '../images/';
	foreach($_FILES as $file)
	{
		if(move_uploaded_file($file['tmp_name'], $uploaddir .basename($file['name'])))
		{
			$files[] = $uploaddir .$file['name'];
		}
		else
		{
		    $error = true;
		}
	}
	$data = ($error) ? array('error' => 'There was an error uploading your files') : array('files' => $files);
}
else
{
	$data = array('success' => 'Image was submitted', 'formData' => $_POST);
}

//This gets all information from the form 
 $pic = $file['name'];  

// escape variables for security
//$longitude = mysqli_real_escape_string($con, $_POST['longitude']);
//$latitude = mysqli_real_escape_string($con, $_POST['latitude']);
$named = mysqli_real_escape_string($con, $_POST['name']);
$ingredients = mysqli_real_escape_string($con, $_POST['ingredients']);
$description = mysqli_real_escape_string($con, $_POST['description']);

$sql="INSERT INTO Recipes (name, ingredients, description, image) VALUES ('$named', '$ingredients', '$description', '$pic')";

if (!mysqli_query($con,$sql)) {
  die('Error: ' . mysqli_error($con));
}
//echo "1 record added";
echo json_encode($data);
mysqli_close($con);
?> 
