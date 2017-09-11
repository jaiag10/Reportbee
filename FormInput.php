<!DOCTYPE html>
<html>
<head>
	<title>Student Data Input</title>
</head>
<body>
	<div class="container">
	<header>
		<p id="a1">Enter Information</p>
	</header>
	<div id="f1">
		<form method="POST" action="<?php echo ($_SERVER['PHP_SELF']); ?>" >
			<div id="t1">
			Name : <input type="text" name="name" placeholder="NAME" required="yes">
			Roll no. : <input type="text" name="roll" placeholder="Roll no." required="yes">
			</div>
			<br>
			<div id="t2">
			Standard id: <input type="text" name="standardid" placeholder="Standard id">
			Standard : <input type="text" name="standard" placeholder="Standard">
			</div>
			<br>
			<div id="t5">
			Section id: <input type="text" name="sectionid" placeholder="Section id">
			Section : <input type="text" name="section" placeholder="Section">
			</div>
			<br>
			<div id="t3">
			School id: <input type="text" name="schoolid" placeholder="School id">
			School : <input type="text" name="school" placeholder="School">
			</div>'
			<br>
			<div id="t4">
			Email : <input type="text" name="email" placeholder="E-mail">
			Mobile : <input type="text" name="mobile" placeholder="Mobile no.">
			Blood Group : <input type="text" name="bg">
			</div>
			<div id="r0">
				<p> Gender : <input type="text" name="gender" placeholder="Male/Female">
			</div>
			<div id="s0">
			BirthDay :  &nbsp;
			<input type="varchar" name="birthday" placeholder="YYYY-MM-DD">
			</div>
			<br>
			<div id="Submit">
			<input type="Submit" name="Submit" value="Submit Data">
			</div>
			</form>

	<?php
	include 'connection.php';
	$name = $_POST['name'];
	$roll = $_POST['roll'];
	$standard = $_POST['standard'];
	$standardid = $_POST['standardid'];
	 $section = $_POST['section'];
	 $sectionid = $_POST['sectionid'];
	$school = $_POST['school'];
	$schoolid = $_POST['schoolid'];
	$bg = $_POST['bg'];
	 $email = $_POST['email'];
	 $mobile = $_POST['mobile'];
	$birthday = $_POST['birthday'] ;
	$gender = $_POST['gender'];
	if(isset($_POST['Submit']))
    {
	$sql = "insert into school (School_id,School_name) values('$schoolid','$school')";
	$sql1 ="insert into standard (Standard_id,Standard_name,School_id) values('$standardid','$standard','$schoolid')";
	$sql2 = "insert into section (Section_id,Section_name,Standard_id) values('$sectionid','$section','$standardid')";
	$sql3 ="insert into student values('$name','$sectionid','$roll','$birthday','$gender','$bg','$mobile','$email')";
	if(mysqli_query($conn,$sql))
     {
     	if(mysqli_query($conn,$sql1))
     	{
     		if(mysqli_query($conn,$sql2))
     		{
     			if(mysqli_query($conn,$sql3))
     			{
     				echo "Added Student";
     			}
     		}
     	}
      
     }
     else
      {
      echo " failed";
      }
     }
 
       mysqli_close();
                        
	?>
</body>
</html>