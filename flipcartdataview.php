<?php 

		$connect=mysqli_connect("localhost","root","","ecommers")or die("not connected");

		$qry="SELECT * FROM `ecommers1`";

		$res=mysqli_query($connect,$qry);

		$row=mysqli_fetch_assoc($res);

		echo "<pre>";
		print_r($row);		

?>

