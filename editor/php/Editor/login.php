<?php
error_reporting(E_ALL);
ini_set('display_errors', '1'); 
$db = new mysqli('mysql.interdns.co.uk', 'walkerdesigns_99', 'tadsteve8', 'tadsteve_8_3');
session_start();
    if($_POST['username']!="" && $_POST['password']!=""):
        extract($_POST);
        $username=mysqli_real_escape_string($db,$_POST['username']);
        $pass_encrypt=md5(mysqli_real_escape_string($db,$_POST['password']));
        $fetch=$db->query("SELECT * FROM `site_users` WHERE user_name='$username' AND `user_password` = '$pass_encrypt'");
        $count=mysqli_num_rows($fetch);
        if($count=="1") :
           $row=mysqli_fetch_array($fetch);
           $_SESSION['login_username']=$row['user_name'];    
           echo 1;  
        else :
          echo 0;
        endif;
    else :
        header("Location:index.php");
    endif;
?>