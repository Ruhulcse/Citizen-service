<?php
$server="localhost";
$user="root";
$pass="";
$dbname="city";

$conn=mysqli_connect($server,$user,$pass,$dbname);
if(!$conn){
	die("Connection failed".mysql_connect_error());
}