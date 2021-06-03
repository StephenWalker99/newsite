<?php
/**
 * class.model.DBConnect.php
 *
 * The purpose of the file is to set a database connect 
 * function and make it global so that the user can use the function anywhere
 *  
 * PHP version 5.6 7.0 7.1
 *
 * @author  Original Author <n3266475@live.tees.ac.uk>
 * @version SVN:1.0
 **/
session_start(); 
error_reporting(E_ERROR);
//Connection To MYSQL DataBase
//Function called in external scripts 

function DBConnect(){
//add further global vars at the end of the line below once you have created them in the database admin tool
global $Host, $User, $Password, $DBName, $table_1, $table_2;

$Host = "localhost";
$User = "root";
$Password = "";
$DBName = "members";
$table_1 = "admin_users";
$table_2 = "users";
}
//close function

	header('Content-Type: text/html; charset=utf-8'); 
    //session_start();
?>
