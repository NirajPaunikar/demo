<?php  

	$connect=mysqli_connect("localhost","root","","creative")or die("not connected");

	$qry="SELECT * FROM `creative1`";

	$res=mysqli_query($connect,$qry);

	$row=mysqli_fetch_assoc($res);

	echo "<pre>";
	print_r($row);

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

		
</body>
</html>