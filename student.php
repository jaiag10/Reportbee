<!DOCTYPE html>
<html>
<head>
	<title>Student data</title>
</head>
<body>
<nav>
	<a href="link1.php">Link 1</a>
	<a href="link2.php">Link 2</a>
	<a href="link3.php">Link 3</a>
	<a href="link4.php">Link 4</a>
	<a href="link5.php">Link 5</a>
</nav>
<table>
<thead>
	<th>Student Name</th>
	<th>Section id </th>
	<th>Roll no.</th>
	<th>DOB</th>
	<th>Gender</th>
	<th>Bg</th>
	<th>Mobile</th>
	<th>Email</th>
</thead>

<?php
   include 'connection.php';
   $sql = "select * from student";
   $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0)
      {
       while($rows = mysqli_fetch_assoc($result))
       {
 ?>

 <tbody>
          <tr data-expanded="true">
            <td><?php echo $rows['Student_name'] ?></td>
            <td><?php echo $rows['Section_id'] ?></td>
            <td><?php echo $rows['Roll_no.'] ?></td>
            <td><?php echo $rows['DOB'] ?></td>
            <td><?php echo $rows['Gender'] ?></td>
            <td><?php echo $rows['BG'] ?></td>
            <td><?php echo $rows['Mobile'] ?></td>
            <td><?php echo $rows['Email'] ?></td>
          </tr>
   <?php
      }
  }
      else
      {
        echo "Value not found";
      }
      mysqli_close();
 ?>
</tbody>
</table>
</body>
</html>















