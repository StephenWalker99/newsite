<?php

/**
 * class.model.login.php
 *
 * The purpose of the file is to log in users of the website using their first name, last name, email address and password.
 *  
 * This file uses JSON to encode data back to the controller.
 * PHP version 5.3
 *
 * @author  Original Author <n3266475@live.tees.ac.uk>
 * @version SVN:1.0
 */
 
//session_start();
//error_reporting(E_ERROR);
//date_default_timezone_set('Europe/London');

session_start();
date_default_timezone_set('Europe/London');
// set time-out period (in seconds)
$inactive = 300;
 
// check to see if $_SESSION["timeout"] is set
if (isset($_SESSION["timeout"])) {
    // calculate the session's "time to live"
    $sessionTTL = time() - $_SESSION["timeout"];
    if ($sessionTTL > $inactive) {
        session_destroy();
        header("Location:#index");
    }
}
$_SESSION["timeout"] = time();



include "class.model.DBConnect.php";

DBConnect();

$action = $_GET['action'];

if($action=="login"){
login($Host, $User, $Password, $DBName, $table_1);
}

function login($Host, $User, $Password, $DBName, $table_1){


//COLLECT POST data//For loop must be closed at the top of your script before carrying on with the query
$formValue=array();
foreach ($_POST as $key => $value) {
$formValue[$key] = $value;

$formValue[$key] = strip_tags($value);
if(empty($value)){
	$message = "Please Fill In The Missing Field(s)!";
	echo json_encode(array('console.log'=>'missing data from the form', 'success'=>true, 'html'=>$message));
	exit();
    }//close missing field condition
  }//close for loop

//Make our connection
		$Link = mysqli_connect($Host, $User, $Password, $DBName);
		//Query for email And PassWord. Select 1 record, where email is equal to VAR.
		$Query = "SELECT * FROM $table_1 WHERE email = '".$formValue['email']."'";
		$Result = mysqli_query($Link, $Query);

		//Check that the table contains the user name entered
		$num_rows = mysqli_num_rows($Result);
		//$PassWordMatch = mysqli_fetch_array($Result);
		$Row = mysqli_fetch_array($Result);
		
		
		// created salted hash
		$PassWord=$formValue['PassWord'];
		$salt = "jkrg@konregw";
		$PassWord = hash("sha512", $PassWord.$salt);

		
		
		if ($num_rows==0)
		{
			//Deliver String Variable For User Not Recognised
			$error = "Your Email Address was not recongised, please try again!" ;
		
			echo json_encode(array('success'=>true,'html'=>$error, 'console.log'=>$Query));
			exit();
		
		}
		else
		{


			if ($PassWord != $Row['PassWord'])
			{
				
				$error = "Your Password was not valid, please try again!" ;
				echo json_encode(array('success'=>true,'html'=>$error));
				exit();
			}
			else
			{
				
				
		$User_ID = $Row['id'];
		$fname = $Row['firstN'];
		$lname = $Row['lastN'];
		$name = $fname.' '.$lname;
		$emailad = $Row['email'];	
                
		//create a session for to secure our models (will use this in the next tutorial).
				$_SESSION['User_ID'] = $User_ID ;
								
				//Free memory and close connection to DB
				mysqli_free_result($Result);
				mysqli_close($Link);
				
				$message = "You are now Logged In Successfully!";
				echo json_encode(array('success'=>true,'html'=>$message, 'action'=>'login', 'name'=>$name, 'emailad'=>$emailad, 'console.log'=>$Query));
				//echo json_encode(array('success'=>true,'html'=>$message, 'action'=>'login'));
				exit();
				
			}//close password match conditional
		}//close num rows 0 conditional
  }

?>
