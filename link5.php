<!DOCTYPE html>
<html>
<head>
	<title>Link 5</title>
	<style type="text/css">
		table,thead,td,tr{
			border: 1px solid black;
			border-collapse: collapse;
			padding: 20px;
		}
	</style>
</head>
<body>
<table>
		<tr><td><b>School Name</td>
		<td><b>Standard</td></tr>
<?php
   include 'connection.php';
   $sql = "select School_name,Standard_name from standard,school";
   $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0)
      {
       while($rows = mysqli_fetch_assoc($result))
       {
 ?>

 <tbody>
          <tr data-expanded="true">
            <td><?php echo $rows['School_name'] ?></td>
            <td><?php echo $rows['Standard_name'] ?></td>
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
</table>
</body>
</html>