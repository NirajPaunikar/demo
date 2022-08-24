iokjm <?php  


$connect=mysqli_connect("localhost","root","","ecommers")or die("not connected");

		$qry="SELECT * FROM `ecommers1`";

		$res=mysqli_query($connect,$qry);

		$row=mysqli_fetch_assoc($res);

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
				<td>unshipped</td>
				<td>orders</td>
				<td>pricing</td>
				<td>ads</td>
				<td>reports</td>
				<td>stock</td>
				<td>pending</td>
				<td>return</td>
				<td>sales</td>
				<td>cashon</td>
			</tr>

			<?php 

				while ($row=mysqli_fetch_assoc($res)) {
					
				

			?>
			<tr>
				<td><?php echo $row['id'] ?></td>
				<td><?php echo $row['unshipped'] ?></td>
				<td><?php echo $row['orders'] ?></td>
				<td><?php echo $row['pricing'] ?></td>
				<td><?php echo $row['ads'] ?></td>
				<td><?php echo $row['reports'] ?></td>
				<td><?php echo $row['stock'] ?></td>
				<td><?php echo $row['pending'] ?></td>
				<td><?php echo $row['return'] ?></td>
				<td><?php echo $row['sales'] ?></td>
				<td><?php echo $row['cashon'] ?></td>

			</tr>
		<?php }

		 ?>
		</table>

</body>
</html>