<?php                        // procedural rule.89+9865
error_reporting(0);
$servername = "localhost";
$username = "root";
$password ="";
$database ="rbstudent";

$conn = mysqli_connect($servername,$username,$password,$database);  

if(!$conn)
{
	die("connection_failed").mysqli_connect_error();
}


?>