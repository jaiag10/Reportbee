<!DOCTYPE html>
<html>
<head>
	<title>Link 3</title>
</head>
<body>
<select>
	<option name="school1">HolyFamily</option>
	<option name="school2">st. john</option>
	<option name="school3">Fr. agnel school</option>
</select>
<select>
	<option name="standard1">1</option>
	<option name="standard2">2</option>
	<option name="standard3">3</option>
</select>
</body>
</html>

<?php
error_reporting(0);
include 'connection.php';
$sql = "select * from student where  = 'Female' AND BG LIKE '%-'";
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