<?php
/*
------------------------------------------------------------------------------------------------------
Script Name: mysql_connect.php
Author:  TEKUNO
Description: To connect to the MySQL server and database
------------------------------------------------------------------------------------------------------
*/
$username ="root";
$password="";
$database="ticketing";
$con = mysqli_connect("localhost",$username,$password);
mysqli_select_db($con, $database) or die ("Unable to select database");

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
