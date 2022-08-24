<?php 
	// This is for testing 
	// This is for testing 
	// This is for testing 
	// This is for testing 
	$connect=mysqli_connect("localhost","root","","creative")or die("not connected");

	if (isset($_POST['submit'])) {
		
		// echo "<pre>";
		// print_r($_POST);

		$date=$_POST['DD'];
		$month=$_POST['MM'];
		$year=$_POST['YY'];

		$joiningdate=implode("-",array($year,$month,$date));

		$studentname=$_POST['studentname'];

		$cours=$_POST['cours'];

		$runningtopic=$_POST['runningtopic'];

		$facultyname=$_POST['facultyname'];

		@$time=$_POST['time'];


		if ($studentname=='')
		{
			echo "Enter Student Name";
		}
		else if (!preg_match("/^[a-zA-Z-]*$/", $studentname))
		{
			echo "Invalid Student name";
		}

		$qry="INSERT INTO `creative1`(`joindate`,`studentname`,`cours`,`runningtopic`,`facultyname`,`time`) VALUES('$joiningdate','$studentname','$cours','$runningtopic','$facultyname','$time')";


		if (mysqli_query($connect,$qry)) 
		{
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
	<title>
	</title>
</head>
<body>

		<form method="POST">
			<table border="1px">
				<tr>
					<td>Join Date</td>
					<td>
						<select name="DD">

							<option>Date</option>
							<?php 
								for ($i=1; $i<=31; $i++) 
								{ 
									
								?>
								<option><?php echo " ".$i; ?></option>
							<?php

								}
							?>

						</select>

						
						<select name="MM">

							<option>Month</option>
							<?php 
								for ($i=1; $i<=12; $i++) 
								{ 
													
								?>
								<option><?php echo " ".$i; ?></option>
							<?php

								}
							?>
						</select>
						<select name="YY">

							<option>Year</option>
							<?php 
								for ($i=1948; $i<=2022; $i++) 
								{ 
													
								?>
								<option><?php echo " ".$i; ?></option>
							<?php

								}
							?>
						</select>
					</td>
				</tr>
				<tr>
					<td>Student name</td>
					<td><input type="text" name="studentname"></td>
				</tr>
				<tr>
					<td>cours</td>
					<td>
						<select name="cours">
							<option>Master In Web Design</option>
							<option>Master In Web Development</option>
							<option>Master In Game Development</option>
							<option>Master In 2D/3D Animation</option>
							<option>Master In Full Stack Development</option>
							<option>Master in UI/UX Design</option>
						</select>
				</tr>
				<tr>
					<td>Running topic</td>
					<td><input type="text" name="runningtopic"></td>
				</tr>
				<tr>
					<td>Faclty name</td>
					<td>
						<select name="facultyname">
						<option>khusi madam</option>
						<option>shailesh sir</option>
						<option>gautam sir</option>
						<option>dhruvi madam</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Time</td>
					<td>
						<input type="radio" name="time" value="08am to 10am	">08am to 10am					
						<input type="radio" name="time" value="10am to 12am">10am to 12am
					</td>

				</tr>
				<tr>
					<td>Submit</td>
					<td><input type="submit" name="submit"></td>
				</tr>
				<tr>
					<td>View Data</td>
					<td><a href="creativeviewdatatable.php">Viewdata</a></td>
				</tr>
			</table>
		</form>

</body>
</html>