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
global $Host, $User, $Password, $DBName, $table_1;

$Host = "db747941598.db.1and1.com";
$User = "dbo747941598";
$Password = "Tottenham_99";
$DBName = "db747941598";
$table_1 = "Move_Users";
}
//close function

	header('Content-Type: text/html; charset=utf-8'); 
    session_start();
?>
