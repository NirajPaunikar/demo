<?php 

	$connect=mysqli_connect("localhost","root","","creative")or die("not connected");

	$qry="SELECT * FROM `creative1`";

	$res=mysqli_query($connect,$qry);

	// $row=mysqli_fetch_assoc($res);

	if (isset($_GET['del'])) 
	{
		$del_id=$_GET['del'];
		echo $del_id;
		$qry="DELETE FROM `creative1` WHERE `id`='$del_id'";
		mysqli_query($connect,$qry);
		header("location:creativeviewdatatable.php");
	}

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

		<table border="1px">
			<tr>
				<td>id</td>
				<td>joindate</td>
				<td>studentname</td>
				<td>cours</td>
				<td>runningtopic</td>
				<td>facultyname</td>
				<td>time</td>
				<td>Delete</td>
				<td>Edit</td>
			</tr>

			<?php 
				while ($row=mysqli_fetch_assoc($res)) {
					
			?>
			<tr>
				<td><?php echo $row['id'] ?></td>
				<td><?php echo $row['joindate'] ?></td>
				<td><?php echo $row['studentname'] ?></td>
				<td><?php echo $row['cours'] ?></td>
				<td><?php echo $row['runningtopic'] ?></td>
				<td><?php echo $row['facultyname'] ?></td>
				<td><?php echo $row['time'] ?></td>
				<td><a href="creativeviewdatatable.php?del=<?php echo $row['id']; ?>">DELETE</a></td>
				<td><a href="creative.php?del=<?php echo $row['id']; ?>">EDIT</a></td>
			</tr>
			<?php 

				}

			?>
		</table>


</body>
</html>