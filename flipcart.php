<?php 

	$connect=mysqli_connect("localhost","root","","ecommers")or die("not connected");


	if (isset($_POST['submit'])) {
		
		echo "<pre>";
		print_r($_POST);

		$orders=$_POST['orders'];

		$pricing=$_POST['pricing'];

		$ads=$_POST['ads'];

		$reports=$_POST['reports'];

		$stock=$_POST['stock'];

		$pending=$_POST['pending'];

		$unshipped=$_POST['unshipped'];

		$return=$_POST['return'];

		$sales=$_POST['sales'];

		$cashon=$_POST['cashon'];

		$query="INSERT INTO `ecommers1`(`orders`,`pricing`,`ads`,`reports`,`stock`,`pending`,`unshipped`,`return`,`sales`,`cashon`) VALUES ('$orders','$pricing','$ads','$reports','$stock','$pending','$unshipped','$return','$sales','$cashon')";

		// echo $query;die;

		if (mysqli_query($connect,$query)) {
			echo "sucess";
		}
		else
		{
			echo "not sucess";
		}

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

	<form method="POST">
		<table border="1px">
			<tr>Unknowen Compony</tr>
			<tr>
				<td>orders</td>
				<td><input type="text" name="orders"></td>
			</tr>
			<tr>
				<td>pricing</td>
				<td><input type="number" name="pricing"></td>
			</tr>
			<tr>
				<td>advtisment</td>
				<td>
					<input type="radio" name="ads">done <input type="radio" name="ads">not done
				</td>
			</tr>
			<tr>
				<td>reports</td>
				<td><input type="number" name="reports"></td>
			</tr>
			<tr>
				<td>stock</td>
				<td><input type="text" name="stock"></td>
			</tr>
			<tr>
				<td>pending</td>
				<td><input type="text" name="pending"></td>
			</tr>
			<tr>
				<td>unshipped</td>
				<td><input type="text" name="unshipped"></td>
			</tr>
			<tr>
				<td>return</td>
				<td><input type="text" name="return"></td>
			</tr>
			<tr>
				<td>sales</td>
				<td><input type="text" name="sales"></td>
			</tr>
			<tr>
				<td>delevery</td>
				<td><input type="radio" name="cashon">cash <input type="radio" name="cashon">online</td>
			</tr>
			<tr>
				<td>submit</td>
				<td><input type="submit" name="submit"></td>
			</tr>
			<tr>
				<td>view data</td>
				<td><a href="flipcartdataview.php">View Data</a></td>
			</tr>
		</table>
	</form>

</body>
</html>