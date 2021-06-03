<?php
   include("stevedata.php");

$data = array();

if(isset($_GET['files']))
{	
	$error = false;
	$files = array();

	$uploaddir = $_SERVER['DOCUMENT_ROOT'] . '/k9/uploads/img/users/';
	//$uploaddir = 'uploads/img/users/';
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
$firstN = mysqli_real_escape_string($con, $_POST['firstN']);
$lastN = mysqli_real_escape_string($con, $_POST['lastN']);
$email = mysqli_real_escape_string($con, $_POST['email']);
$PassWord = mysqli_real_escape_string($con, $_POST['PassWord']);

$PassWord = $_POST['PassWord'];
$PassWord = preg_replace('/\s/', '', $PassWord);
$salt = "jkrg@konregw";

$combine = $PassWord . $salt;

$PassWord = hash('sha512', $combine);

//$PassWord = sha512(mysqli_real_escape_string($con, $_POST['PassWord']));
//$PassWord = mysqli_real_escape_string($con, $_POST['PassWord']);


$sql="INSERT INTO users (firstN, lastN, email, image, PassWord) 
VALUES ('$firstN', '$lastN', '$email', '$pic', '$PassWord')";

if (!mysqli_query($con,$sql)) {
  die('Error: ' . mysqli_error($con));
}
//echo "1 record added";
echo json_encode($data);
mysqli_close($con);
?> 