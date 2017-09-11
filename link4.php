<?php
error_reporting(0);
include 'connection.php';
$sql = "select * from student where Gender = 'Female' AND BG LIKE '%-'";
$result = mysqli_query($conn,$sql);
	if(mysqli_num_rows($result)>0)
	{
		$rows = mysqli_fetch_assoc($result);	
		echo $rows['Student_name'];	
		echo ("<br>");									
	}
	else
	{
	    echo "Value not found".mysqli_error($conn);
	}
	
?>